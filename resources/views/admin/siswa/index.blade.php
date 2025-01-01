@extends('base')

@section('content')
    <div class="min-h-screen bg-gray-50 py-8 px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Data Siswa</h1>
            <p class="mt-1 text-sm text-gray-500">Kelola data akun dan pendaftaran siswa</p>
        </div>

        <!-- Tab Navigation -->
        <div class="mb-6 border-b border-gray-200">
            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                <button onclick="switchTab('accounts')" class="tab-btn active-tab" id="accounts-tab">
                    <div class="flex items-center px-1 py-4 font-medium">
                        <i class="ri-user-line mr-2"></i>
                        Akun Siswa
                        <span
                            class="ml-3 rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">{{ $ttlSiswaAcc }}</span>
                    </div>
                </button>
                <button onclick="switchTab('registrations')" class="tab-btn" id="registrations-tab">
                    <div class="flex items-center px-1 py-4 font-medium">
                        <i class="ri-file-list-3-line mr-2"></i>
                        Pendaftaran Siswa
                        <span
                            class="ml-3 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">{{ $ttlSiswaDftr }}</span>
                    </div>
                </button>
            </nav>
        </div>

        <!-- Student Accounts Table -->
        <div id="accounts-content" class="tab-content">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Table Header with Search -->
                <div class="p-4 border-b border-gray-200 bg-gray-50 flex justify-between items-center">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="ri-search-line text-gray-400"></i>
                        </div>
                        <input type="text"
                            class="pl-10 py-2 pr-4 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                            placeholder="Cari siswa...">
                    </div>
                </div>
                <!-- Table Content -->
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Siswa
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($siswaAcc as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40"
                                                alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $item->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $item->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                                    <button class="text-red-600 hover:text-red-900">Hapus</button>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-700">
                            Menampilkan 1 - 10 dari 150 data
                        </div>
                        <div class="flex-1 flex justify-end">
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                                <a href="#"
                                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    Previous
                                </a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    1
                                </a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    2
                                </a>
                                <a href="#"
                                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    Next
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="registrations-content" class="tab-content hidden">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Table Header with Search -->
                <div class="p-4 border-b border-gray-200 bg-gray-50 flex justify-between items-center">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="ri-search-line text-gray-400"></i>
                        </div>
                        <input type="text"
                            class="pl-10 py-2 pr-4 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                            placeholder="Cari pendaftar...">
                    </div>
                    <div class="flex space-x-2">
                        <button
                            class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="ri-download-line mr-2"></i>
                            Export
                        </button>
                    </div>
                </div>
                <!-- Table Content -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 overflow-x-auto"id="default-table">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Pendaftar</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    NIS</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Alamat</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nomor HP</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Jenis Kelamin</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tanggal Lahir</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Angkatan
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($siswaDaftar as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $item->user->name }}</div>
                                                <div class="text-sm text-gray-500">{{ $item->user->email }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $item->nis }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $item->alamat }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $item->nomorhp }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $item->jenis_kelamin }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $item->tanggal_lahir }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $item->angakatan }}</div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($item->status === 0)
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                Menunggu Verifikasi
                                            </span>
                                        @else
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-500 text-white">
                                                Sudah diterima
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-red-600 hover:text-red-900 mr-3">Hapus</button>
                                        @if ($item->status === 0)
                                            <button id="terima" class="terima text-green-600 hover:text-green-900"
                                                data-id="{{ $item->id }}">Terima</button>
                                        @else
                                            <button id="terima" disabled class="terima text-green-600 hover:text-green-900"
                                                data-id="{{ $item->id }}">Sudah diterima</button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    {{ $siswaDaftar->appends(['tab' => request('tab')])->links() }}
                </div>
            </div>
        </div>
    </div>

    <style>
        .tab-btn {
            @apply text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap border-transparent;
        }

        .active-tab {
            @apply border-b-2 border-blue-500 text-blue-600;
        }

        .tab-content {
            @apply transition-all duration-300 ease-in-out;
        }
    </style>


    <script>
        // Modified tab switching function
        function switchTab(tabName) {
            // Update URL with the active tab
            const url = new URL(window.location.href);
            url.searchParams.set('tab', tabName);
            window.history.pushState({}, '', url);

            // Update UI
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            document.querySelectorAll('.tab-btn').forEach(tab => {
                tab.classList.remove('active-tab');
            });
            document.getElementById(`${tabName}-content`).classList.remove('hidden');
            document.getElementById(`${tabName}-tab`).classList.add('active-tab');
        }

        // Check URL parameters on page load
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const activeTab = urlParams.get('tab') || 'accounts'; // Default to accounts if no tab specified
            switchTab(activeTab);
        });

        $(document).ready(function() {
            $(document).on('click', '.terima', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: '{{ route('students.update', ':id') }}'.replace(':id', id),
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        _method: 'PUT'
                    },
                    success: function(response) {
                        console.log('berhasil mengubah data');
                        if (response.success) {
                            // Update tombol untuk menunjukkan status diterima
                            $(`button[data-id="${id}"]`).html('<i class="ri-check-line"></i>');
                        }
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
