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
                @foreach ($errors->all() as $item)
                    <div class="text-red-500 text-sm mb-2">
                        {{ $item }}
                    </div>
                @endforeach
            @endif
            <div class="bg-white shadow rounded-lg p-8">
                <form method="POST" class="space-y-6" action="{{ route('daftar.func') }}">
                    @csrf
                    <div>
                        <label for="nis" class="block text-sm font-medium text-gray-700">
                            Nomor Induk Siswa (NIS)
                        </label>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="text" name="nis" id="nis" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <!-- Jurusan -->
                    <div>
                        <label for="jurusan" class="block text-sm font-medium text-gray-700">
                            Jurusan
                        </label>
                        <select name="jurusan" id="jurusan" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Pilih Jurusan</option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="BAHASA">Bahasa</option>
                        </select>
                    </div>

                    <!-- Angkatan -->
                    <div>
                        <label for="angkatan" class="block text-sm font-medium text-gray-700">
                            Angkatan
                        </label>
                        <input type="text" name="angakatan" id="angkatan" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700">
                            Alamat Lengkap
                        </label>
                        <textarea name="alamat" id="alamat" rows="3" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>

                    <!-- Nomor HP -->
                    <div>
                        <label for="nomorhp" class="block text-sm font-medium text-gray-700">
                            Nomor HP
                        </label>
                        <input type="tel" name="nomorhp" id="nomorhp" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Jenis Kelamin
                        </label>
                        <div class="mt-2 space-x-6">
                            <label class="inline-flex items-center">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" required
                                    class="form-radio text-blue-600">
                                <span class="ml-2">Laki-laki</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="jenis_kelamin" value="Perempuan" required
                                    class="form-radio text-blue-600">
                                <span class="ml-2">Perempuan</span>
                            </label>
                        </div>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">
                            Tanggal Lahir
                        </label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
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
