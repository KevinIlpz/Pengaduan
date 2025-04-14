<?php

namespace App\Http\Controllers\HeadStaff;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Response;
use Illuminate\Support\Facades\DB;

class HeadStaffDashboardController extends Controller
{
    public function index()
    {
        $totalUsers = \App\Models\User::where('role', 'USER')->count();
        $totalStaff = \App\Models\User::where('role', 'STAFF')->count();

        $totalReports = Report::count();
        $prosesReports = Report::where('status', 'PROSES')->count();
        $totalResponses = Response::count();

        $complaintsPerProvince = Report::select('province', DB::raw('count(*) as total'))
            ->groupBy('province')
            ->pluck('total', 'province');

        $responsesByProvince = Response::select('reports.province', DB::raw('count(*) as total'))
            ->join('reports', 'responses.report_id', '=', 'reports.id')
            ->groupBy('reports.province')
            ->pluck('total', 'reports.province');

        return view('dashboard.head.head', compact(
            'prosesReports',
            'totalUsers',
            'totalStaff',
            'totalReports',
            'totalResponses',
            'complaintsPerProvince',
            'responsesByProvince',
        ));
    }


}
