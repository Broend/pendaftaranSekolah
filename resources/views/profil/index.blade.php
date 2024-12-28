@extends('base')
@section('content')
    <div class="">
        <div class="absolute w-full left-0 top-0 z-[1] overflow-hidden">
            <img src="{{ asset('assetStyle/staticPicture/gambarSekolah.jpg') }}" alt=""
                class="w-full brightness-[40%] h-[30rem] object-cover blur-sm scale-105">
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

        <div class="absolute mt-[27rem] grid grid-cols-3 p-10 w-full left-0 gap-5">
            <div
                class=" shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-5 transition-all hover:shadow-[rgba(0,_0,_0,_0.14)_0px_3px_8px] hover:bg-[#0000001a]">
                <h1 class=" text-xl font-bold mb-2">Visi dan Misi</h1>
                {{-- <hr class="mb-1"> --}}
                <p class="menuProfil">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, dolores! Reiciendis,
                    tempore, distinctio
                    eligendi natus in cumque officiis libero laudantium, unde dignissimos voluptatem sed harum quidem
                    quibusdam rerum sequi deserunt!</p>
            </div>
            <div
                class=" shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-5 transition-all hover:shadow-[rgba(0,_0,_0,_0.14)_0px_3px_8px] hover:bg-[#0000001a]">
                <h1 class=" text-xl font-bold mb-2">Tentang kami</h1>
                {{-- <hr class="mb-1"> --}}
                <p class="menuProfil">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, velit. Numquam
                    dicta
                    inventore
                    tenetur est magni, ipsam suscipit quas itaque omnis eveniet eum eaque rem vitae aliquid doloribus ut
                    molestiae?</p>
            </div>
            <div
                class=" shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-5 transition-all hover:shadow-[rgba(0,_0,_0,_0.14)_0px_3px_8px] hover:bg-[#0000001a]">
                <h1 class=" text-xl font-bold mb-2">Berita</h1>
                {{-- <hr class="mb-1"> --}}
                <p class="menuProfil">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid itaque eos temporibus
                    quod nihil culpa
                    eius! Maxime reprehenderit laboriosam neque, assumenda quidem, cum earum voluptates excepturi dolorem
                    fugiat nobis rerum!</p>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuProfil = document.querySelectorAll('.menuProfil');
            const maxLength = 250;

            menuProfil.forEach(textP => {
                const text = textP.textContent.trim();

                if (text.length > maxLength) {
                    // Atur konten baru ke textP.textContent
                    textP.textContent = text.substring(0, maxLength) + "...";
                }
            });
        });
    </script>
@endsection
