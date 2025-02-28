<nav class="flex sticky top-0 z-10 justify-between items-center lg:p-3 p-3 lg:px-[30px] bg-white shadow-md w-full">
    <a href="/" class="flex items-center gap-4">
        <img src="https://satujam.com/wp-content/uploads/2017/08/20150622033653LOGO_OSIS_SMA.jpg"
            class="w-[40px] h-[40px] rounded-full" alt="">
        <h1 class="text-slate-700 font-bold text-xl">SMA Lontol Kudung Ngidul</h1>
    </a>
    <div class="hidden md:block">
        <ul class="flex space-x-4 text-slate-400">
            @if (auth()->check() && auth()->user()->role === 1)
                <li class="hover:text-slate-950 transition {{ request()->is('admin/*') ? 'active' : '' }}">
                    <a href="{{ route('admin') }}" class="flex items-center gap-2 p-2">
                        <i class="ri-dashboard-2-line"></i> Dashboard
                    </a>
                </li>
            @else
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
            @endif
            @if (!auth()->check())
                <li class="hover:text-slate-950 transition {{ request()->is('daftar') ? 'active' : '' }}">
                    <a href="{{ route('login') }}" class="flex items-center gap-2 p-2">
                        <i class="ri-login-box-line"></i> Login
                    </a>
                </li>
            @endif
        @if (auth()->check())
                <li class="text-red-400 hover:text-red-600 transition">
                    <a href="{{ route('logout') }}" class="flex items-center gap-2 p-2">
                        <i class="ri-logout-box-r-line"></i> Logout
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <div class="md:hidden pointer-events-none bg-white shadow-md text-white p-2 absolute w-full left-0 top-full opacity-0 translate-y-[-20px] transition-all duration-500 ease" id="navbar">
        <ul class="flex flex-col text-slate-400">
            @if (auth()->check() && auth()->user()->role === 1)
                <li class="hover:text-slate-950 transition {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin') }}" class="flex items-center gap-2 p-2">
                        <i class="ri-dashboard-2-line"></i> Dashboard
                    </a>
                </li>
            @else
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
            @endif
            @if (!auth()->check())
                <li class="hover:text-slate-950 transition {{ request()->is('daftar') ? 'active' : '' }}">
                    <a href="{{ route('login') }}" class="flex items-center gap-2 p-2">
                        <i class="ri-login-box-line"></i> Login
                    </a>
                </li>
            @endif
        @if (auth()->check())
                <li class="text-red-400 hover:text-red-600 transition">
                    <a href="{{ route('logout') }}" class="flex items-center gap-2 p-2">
                        <i class="ri-logout-box-r-line"></i> Logout
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <i class="ri-menu-3-line text-slate-400 text-2xl md:hidden cursor-pointer" id="btn-navbarResp"></i>
</nav>
{{-- <div class="w-full bg-gradient-to-r from-indigo-500 to-indigo-400">
    <li class="hover:text-gray-200 transition"><a href="">Dashboard</a></li>
    <li class="hover:text-gray-200 transition"><a href="{{ route('profil') }}">Profil</a></li>
    <li class="hover:text-gray-200 transition"><a href="">Contact</a></li>
    <li class="hover:text-gray-200 transition"><a href="{{ route('logout') }}">Logout</a></li>
</div> --}}
