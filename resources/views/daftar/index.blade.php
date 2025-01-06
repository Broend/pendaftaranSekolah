@extends('base')
@section('content')
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        @if ($cekdata)
            <div class="flex justify-center items-center">
                <div class="max-w-md w-full bg-white rounded-lg shadow-sm p-8 ">
                    <div class="text-center">
                        <div class="bg-orange-50 w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                        </div>

                        <h1 class="text-2xl font-medium text-gray-700 mb-2">Anda Sudah Terdaftar</h1>
                        <p class="text-gray-500 mb-6">Silakan buat akun baru dengan email yang berbeda untuk pendaftaran
                            ulang
                        </p>

                        <div class="space-y-3">
                            <a href="{{ route('register') }}"
                                class="block w-full bg-blue-500 text-white px-6 py-2 rounded-md font-medium hover:bg-blue-600 transition-colors">
                                Buat Akun Baru
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="max-w-3xl mx-auto">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">
                        Pendaftaran Siswa Baru
                    </h1>
                    <h2 class="text-xl text-gray-600">
                        SMA Lontol Kudung Ngidul
                    </h2>
                </div>

                <!-- Form Card -->
                @if ($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <form method="POST" class="space-y-6" action="{{ route('daftar.func') }}">
                        @csrf
                        <div>
                            <label for="nis" class="block text-sm font-medium text-gray-700">
                                Nomor Induk Siswa (NIS)
                            </label>
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <!-- NIS -->
                            <input type="text" name="nis" id="nis"
                                class="mt-1 block w-full rounded-md border-gray-300 outline-none focus:ring-2 500 shadow-sm p-3 focus:border-blue-500 focus:ring-blue-500"
                                value="{{ old('nis') }}">

                        </div>

                        <!-- Jurusan -->
                        <div>
                            <label for="jurusan" class="block text-sm font-medium text-gray-700">
                                Jurusan
                            </label>
                            <select name="jurusan" id="jurusan"
                                class="mt-1 block w-full rounded-md p-3 border-gray-300 outline-none focus:ring-2 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Pilih Jurusan</option>
                                <option value="IPA" {{ old('jurusan') == 'IPA' ? 'selected' : '' }}>IPA</option>
                                <option value="IPS" {{ old('jurusan') == 'IPS' ? 'selected' : '' }}>IPS</option>
                                <option value="BAHASA" {{ old('jurusan') == 'BAHASA' ? 'selected' : '' }}>Bahasa</option>
                            </select>

                        </div>

                        <!-- Angkatan -->
                        <div>
                            <label for="angkatan" class="block text-sm font-medium text-gray-700">
                                Angkatan
                            </label>
                            <input type="text" name="angakatan" id="angkatan"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-500"
                                value="{{ old('angakatan') }}">
                        </div>

                        <!-- Alamat -->
                        <div>
                            <label for="alamat" class="block text-sm font-medium text-gray-700">
                                Alamat Lengkap
                            </label>
                            <textarea name="alamat" id="alamat" rows="3"
                                class="mt-1 block w-full rounded-md outline-none border-gray-300 shadow-sm p-3 focus:ring-2 focus:border-blue-500 focus:ring-blue-500">{{ old('alamat') }}</textarea>

                        </div>

                        <!-- Nomor HP -->
                        <div>
                            <label for="nomorhp" class="block text-sm font-medium text-gray-700">
                                Nomor HP
                            </label>
                            <input type="tel" name="nomorhp" id="nomorhp" value="{{ old('nomorhp') }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 outline-none focus:ring-2 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="mt-2 space-x-6">
                            <label class="inline-flex items-center">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"
                                    class="form-radio p-3 text-blue-600"
                                    {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }}>
                                <span class="ml-2">Laki-laki</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="jenis_kelamin" value="Perempuan"
                                    class="form-radio p-3 text-blue-600"
                                    {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}>
                                <span class="ml-2">Perempuan</span>
                            </label>
                        </div>


                        <!-- Tanggal Lahir -->
                        <div>
                            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">
                                Tanggal Lahir
                            </label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                class="mt-1 block w-full rounded-md outline-none focus:ring-2 border-gray-300 shadow-sm focus:border-blue-500 p-3 focus:ring-blue-500"
                                value="{{ old('tanggal_lahir') }}">

                        </div>

                        <!-- Submit Button -->
                        {{-- <div class="pt-4">
                            @if ($cekdata)
                                <button type="button" disabled
                                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Anda sudah pernah daftar
                                </button>
                            @else
                            @endif
                        </div> --}}
                        <button type="submit" dis
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Daftar Sekarang
                        </button>
                    </form>
                </div>
            </div>
        @endif

    </div>
@endsection
