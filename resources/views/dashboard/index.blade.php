@extends('base')

@section('content')
    <div class="grid grid-cols-1 gap-4 w-full text-white md:grid-cols-3">
        <div
            class="flex flex-col items-center border-collapse py-10 border rounded bg-gradient-to-b from-cyan-500 to-cyan-700">
            <x-heroicon-o-user class="w-20 mb-2" />
            <h1>Total Murid</h1>
        </div>
        <div
            class="flex flex-col items-center border-collapse py-10 border rounded bg-gradient-to-b from-cyan-500 to-cyan-700">
            <x-fas-chalkboard-teacher class="w-20 mb-0" />
            <h1 class="mt-5">Jumlah Guru</h1>
        </div>
        <div
            class="flex flex-col items-center border-collapse py-10 border rounded bg-gradient-to-b from-cyan-500 to-cyan-700">
            <x-iconsax-bol-teacher class="w-20 mb-2" />
            <h1>Ekskul</h1>
        </div>
    </div>
@endsection
