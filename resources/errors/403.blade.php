<x-app-layout>
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-red-600 mb-4">403</h1>
            <p class="text-xl text-gray-600">Akses ditolak. Kamu tidak punya izin ke halaman ini.</p>
            <a href="{{ route('dashboard') }}" class="mt-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Kembali ke Dashboard</a>
        </div>
    </div>
</x-app-layout>
