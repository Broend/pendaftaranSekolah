@extends('base')

@section('content')
    <div class="grid grid-cols-1 gap-4 w-full text-white md:grid-cols-3">
        <div
            class="flex flex-col items-center border-collapse py-10 border rounded bg-gradient-to-b from-cyan-500 to-cyan-700">
            <i class="ri-user-line text-white text-2xl"></i>
            <h1>Total Murid</h1>
        </div>
        <div
            class="flex flex-col items-center border-collapse py-10 border rounded bg-gradient-to-b from-cyan-500 to-cyan-700">
            <i class="ri-group-line text-white text-2xl"></i>
            <h1 class="mt-5">Jumlah Guru</h1>
        </div>
        <div
            class="flex flex-col items-center border-collapse py-10 border rounded bg-gradient-to-b from-cyan-500 to-cyan-700">
            <i class="ri-at-fill text-white text-2xl"></i>
            <h1>Ekskul</h1>
        </div>
    </div>
@endsection
