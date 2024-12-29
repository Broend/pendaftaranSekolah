@extends('base')
@section('content')
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
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
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Daftar Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
