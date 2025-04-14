<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function userDashboard(Request $request)
    {
        $query = Report::with(['user']) // Relasi ke user pelapor
        ->withCount('likes');

        if ($request->filled('search')) {
            $query->where('description', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $sortOrder = $request->get('sort', 'desc'); // default 'desc'
        $query->orderBy('created_at', $sortOrder);

        $reports = $query->paginate(10)->withQueryString();

        return view('dashboard.user.user', compact('reports'));
    }

    public function staffDashboard()
    {
        return view('dashboard.staff.staff');
    }

    public function headDashboard()
    {
             // Data ringkasan
        $totalUsers = User::where('role', 'user')->count();
        $totalStaff = User::where('role', 'staff')->count();
        $totalReports = Report::count();
        $pendingReports = Report::where('status', 'PROSES')->count();

        $complaintsPerProvince = Report::select('province', DB::raw('count(*) as total'))
            ->groupBy('province')
            ->pluck('total', 'province');

        return view('dashboard.head.head', compact(
            'totalUsers',
            'totalStaff',
            'totalReports',
            'pendingReports',
            'complaintsPerProvince'
        ));
    }
}
