@extends('base')
@section('content')
    <div class="">
        <div class="absolute w-full left-0 top-0 z-[1] overflow-hidden">
            <img src="{{ asset('assetStyle/staticPicture/gambarSekolah.jpg') }}" alt=""
                class="w-full brightness-[40%] h-[33rem] object-cover blur-sm scale-105 md:h-[30rem]">
        </div>
        <div
            class="absolute z-10 text-white left-[10%] right-[10%] top-[180px] w-[80%] md:left-[20%] md:right[20%] md:w-[60%] md:top-[190px]">

            <div class="flex flex-col text-center">
                <h1 class="text-3xl mb-3 font-bold"> Profil Sekolah </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum magnam id esse qui, excepturi voluptate
                    aut
                    fugit voluptatem rem obcaecati praesentium explicabo nam natus beatae, hic amet! Autem, fugiat officiis?
                </p>
            </div>
        </div>


    </div>
@endsection
