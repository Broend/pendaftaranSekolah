<nav
    class="flex fixed z-10 justify-between items-center lg:p-3 p-3 lg:px-[30px] bg-white shadow-md w-full">
    <a href="/" class="flex items-center gap-4">
        <img src="https://satujam.com/wp-content/uploads/2017/08/20150622033653LOGO_OSIS_SMA.jpg"
            class="w-[40px] h-[40px] rounded-full" alt="">
        <h1 class="text-slate-700 font-bold text-xl">SMA Lontol Kudung Ngidul</h1>
    </a>
    <div class="hidden md:block">
        <ul class="flex space-x-4 text-slate-400">
            @if (auth()->user()->role == 1)
            <li class="hover:text-slate-950 transition {{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" class="flex items-center gap-2 p-2">
                    <i class="ri-dashboard-2-line"></i> Dashboard
                </a>
            </li>
            @endif
            <li class="hover:text-slate-950 transition {{ request()->routeIs('profil') ? 'active' : '' }}">
                <a href="{{ route('profil') }}" class="flex items-center gap-2 p-2">
                    <i class="ri-community-line"></i> Profil
                </a>
            </li>
            <li class="hover:text-slate-950 transition {{ request()->routeIs('contact') ? 'active' : '' }}">
                <a href="{{ route('contact') }}" class="flex items-center gap-2 p-2">
                    <i class="ri-customer-service-2-line"></i> Contact
                </a>
            </li>
            <li class="hover:text-slate-950 transition {{ request()->is('daftar') ? 'active' : '' }}">
                <a href="/daftar" class="flex items-center gap-2 p-2">
                    <i class="ri-user-add-line"></i> Daftar
                </a>
            </li>
            <li class="text-red-400 hover:text-red-600 transition">
                <a href="{{ route('logout') }}" class="flex items-center gap-2 p-2">
                    <i class="ri-logout-box-r-line"></i> Logout
                </a>
            </li>
        </ul>
    </div>
    <i class="ri-menu-3-line text-slate-400 text-2xl lg:hidden cursor-pointer"></i>
</nav>
{{-- <div class="w-full bg-gradient-to-r from-indigo-500 to-indigo-400">
    <li class="hover:text-gray-200 transition"><a href="">Dashboard</a></li>
    <li class="hover:text-gray-200 transition"><a href="{{ route('profil') }}">Profil</a></li>
    <li class="hover:text-gray-200 transition"><a href="">Contact</a></li>
    <li class="hover:text-gray-200 transition"><a href="{{ route('logout') }}">Logout</a></li>
</div> --}}
