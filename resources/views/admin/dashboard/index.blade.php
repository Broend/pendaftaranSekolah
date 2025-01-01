@extends('base')

@section('content')
    <div class="min-h-screen bg-gray-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Dashboard Admin</h1>
                    <p class="mt-1 text-sm text-gray-500">Selamat datang kembali, Admin</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="relative p-2 text-gray-400 hover:text-gray-500">
                        <i class="ri-notification-line text-xl"></i>
                        <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-400 ring-2 ring-white"></span>
                    </button>
                    <div class="flex items-center space-x-3">
                        <img class="h-10 w-10 rounded-full bg-gray-300" src="https://via.placeholder.com/40" alt="Profile">
                        <span class="text-sm font-medium text-gray-700">Administrator</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 p-6 shadow-lg">
                <div class="absolute bottom-0 right-0 text-white/20">
                    <i class="ri-user-line text-7xl opacity-50"></i>
                </div>
                <div class="relative">
                    <div class="flex items-center">
                        <i class="ri-user-line text-white text-2xl mr-3"></i>
                        <h2 class="text-xl font-bold text-white">Total Murid</h2>
                    </div>
                    <p class="mt-4 text-3xl font-bold text-white">1,234</p>
                    <p class="mt-1 text-sm text-blue-100">+12% dari bulan lalu</p>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-purple-500 to-purple-600 p-6 shadow-lg">
                <div class="absolute bottom-0 right-0 text-white/20">
                    <i class="ri-group-line text-7xl opacity-50"></i>
                </div>
                <div class="relative">
                    <div class="flex items-center">
                        <i class="ri-group-line text-white text-2xl mr-3"></i>
                        <h2 class="text-xl font-bold text-white">Jumlah Guru</h2>
                    </div>
                    <p class="mt-4 text-3xl font-bold text-white">86</p>
                    <p class="mt-1 text-sm text-purple-100">+3 guru baru</p>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-green-500 to-green-600 p-6 shadow-lg">
                <div class="absolute bottom-0 right-0 text-white/20">
                    <i class="ri-at-fill text-7xl opacity-50"></i>
                </div>
                <div class="relative">
                    <div class="flex items-center">
                        <i class="ri-at-fill text-white text-2xl mr-3"></i>
                        <h2 class="text-xl font-bold text-white">Ekskul</h2>
                    </div>
                    <p class="mt-4 text-3xl font-bold text-white">12</p>
                    <p class="mt-1 text-sm text-green-100">8 aktif minggu ini</p>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-orange-500 to-orange-600 p-6 shadow-lg">
                <div class="absolute bottom-0 right-0 text-white/20">
                    <i class="ri-calendar-check-line text-7xl opacity-50"></i>
                </div>
                <div class="relative">
                    <div class="flex items-center">
                        <i class="ri-calendar-check-line text-white text-2xl mr-3"></i>
                        <h2 class="text-xl font-bold text-white">Pendaftar</h2>
                    </div>
                    <p class="mt-4 text-3xl font-bold text-white">98%</p>
                    <p class="mt-1 text-sm text-orange-100">Rata-rata daftar minggu ini</p>
                </div>
            </div>
        </div>
        <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div class="rounded-lg bg-white p-6 shadow-md">
                <h3 class="text-lg font-medium text-gray-900">Menu</h3>
                <div class="mt-4 space-y-3">
                    <a href="#" class="flex items-center rounded-lg border p-3 hover:bg-gray-50 transition-colors">
                        <i class="ri-book-open-line mr-3 text-blue-500"></i>
                        <span class="text-gray-700">Profile Sekolah</span>
                    </a>
                    <a href="{{ route('students.index') }}"
                        class="flex items-center rounded-lg border p-3 hover:bg-gray-50 transition-colors">
                        <i class="ri-user-follow-line mr-3 text-green-500"></i>
                        <span class="text-gray-700">Manajemen Siswa</span>
                    </a>
                    <a href="#" class="flex items-center rounded-lg border p-3 hover:bg-gray-50 transition-colors">
                        <i class="ri-group-line mr-3 text-purple-500"></i>
                        <span class="text-gray-700">Manajemen Guru</span>
                    </a>
                    <a href="#" class="flex items-center rounded-lg border p-3 hover:bg-gray-50 transition-colors">
                        <i class="ri-medal-line mr-3 text-yellow-500"></i>
                        <span class="text-gray-700">Eksul</span>
                    </a>
                    <a href="#" class="flex items-center rounded-lg border p-3 hover:bg-gray-50 transition-colors">
                        <i class="ri-mail-line mr-3 text-red-500"></i>
                        <span class="text-gray-700">Contact</span>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-2 rounded-lg bg-white p-6 shadow-md">
                <h3 class="text-lg font-medium text-gray-900">Notifikasi</h3>
                <div class="mt-4 space-y-4">
                    <div class="flex items-start space-x-4 border-b pb-4">
                        <div class="rounded-full bg-blue-500 p-2">
                            <i class="ri-user-add-line text-white"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Pendaftaran Siswa Baru</p>
                            <p class="text-sm text-gray-500">5 siswa baru telah mendaftar</p>
                            <p class="mt-1 text-xs text-gray-400">2 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 border-b pb-4">
                        <div class="rounded-full bg-green-500 p-2">
                            <i class="ri-discuss-line text-white"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Rapat Guru</p>
                            <p class="text-sm text-gray-500">Pembahasan kurikulum semester baru</p>
                            <p class="mt-1 text-xs text-gray-400">5 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="rounded-full bg-purple-500 p-2">
                            <i class="ri-file-list-3-line text-white"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Update Nilai</p>
                            <p class="text-sm text-gray-500">Nilai ujian tengah semester telah diupdate</p>
                            <p class="mt-1 text-xs text-gray-400">1 hari yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
