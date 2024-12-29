<nav
    class="flex fixed z-20 justify-between items-center px-5 lg:px-[75px] bg-gradient-to-r from-indigo-500 to-indigo-400 w-full">
    <a href="" class="flex items-center space-x-4">
        <img src="https://satujam.com/wp-content/uploads/2017/08/20150622033653LOGO_OSIS_SMA.jpg"
            class="w-[70px] py-5 rounded" alt="">
        <h1 class="text-white font-bold text-xl me-5">SMA Lontol Kudung Ngidul</h1>
    </a>
    <div class="hidden md:block">
        <ul class="flex space-x-4 text-white">
            <li class="hover:text-gray-200 transition"><a href="/dashboard">Dashboard</a></li>
            <li class="hover:text-gray-200 transition"><a href="{{ route('profil') }}">Profil</a></li>
            <li class="hover:text-gray-200 transition"><a href="{{ route('contact') }}">Contact</a></li>            
            <li class="hover:text-gray-200 transition"><a href="/daftar">Daftar</a></li>
            <li class="hover:text-gray-200 transition"><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </div>
    <i class="fa-solid fa-bars text-white text-xl md:hidden"></i>
</nav>
{{-- <div class="w-full bg-gradient-to-r from-indigo-500 to-indigo-400">
    <li class="hover:text-gray-200 transition"><a href="">Dashboard</a></li>
    <li class="hover:text-gray-200 transition"><a href="{{ route('profil') }}">Profil</a></li>
    <li class="hover:text-gray-200 transition"><a href="">Contact</a></li>
    <li class="hover:text-gray-200 transition"><a href="{{ route('logout') }}">Logout</a></li>
</div> --}}
