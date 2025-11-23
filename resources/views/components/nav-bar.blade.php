<div x-data="{ open: false }" class="relative">

    {{-- NAVBAR --}}
    <nav 
        :class="open ? 'bg-black/5 backdrop-blur-sm' : 'bg-white'"
        class="sticky top-0 flex w-full justify-between py-5 z-50 px-4 lg:px-0 transition-colors duration-300">

        <a href="{{ route('home.page') }}" class="flex items-center">
            <img src="{{ asset('images/logo-nikudoni.png') }}" alt="Nikudoni Logo" class="w-16 lg:w-20">
        </a>

        <div class="hidden lg:flex gap-20 text-black-200 text-lg font-normal">
            <div class="text-primary-500">Beranda</div>
            <a href="{{ route('menu.page') }}">Menu</a>
            <div>Tentang</div>
            <div>Reservasi</div>
            <div>Room Service</div>
        </div>

        <div class="flex gap-4 lg:gap-8 text-black-200 text-sm lg:text-lg font-normal items-center">
            <div class="hidden lg:flex">Login</div>
            <a href="{{ route('signin.page') }}" class="bg-primary-500 py-4 px-6 text-white rounded-4xl">
                Order ->
            </a>

            <button @click="open = true" class="lg:hidden">
                <img src="{{ asset('icon/menu-hamburger.svg') }}" class="w-7">
            </button>
        </div>
    </nav>

    {{-- OVERLAY --}}
    <div 
        x-show="open"
        x-cloak
        @click="open = false"
        x-transition.opacity.duration.200ms
        class="fixed inset-0 bg-black/50 z-40 lg:hidden">
    </div>

    {{-- SIDEBAR --}}
    <div 
        x-show="open"
        x-cloak
        x-transition:enter="transition transform duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition transform duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="fixed top-0 left-0 w-64 h-full bg-white shadow-lg z-50 p-6 lg:hidden">

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">Menu</h2>
            <button @click="open = false">✕</button>
        </div>

        <div class="flex flex-col gap-4 text-black-200 text-lg">
            <a href="{{ route('home.page') }}" class="{{ request()->routeIs('home.page') ? 'text-primary-500' : '' }}">Beranda</a>
            <a href="{{ route('menu.page') }}" class="{{ request()->routeIs('menu.page') ? 'text-primary-500' : '' }}">Menu</a>
            <a href="#">Tentang</a>
            <a href="#">Reservasi</a>
            <a href="#">Room Service</a>

            <a href="{{ route('signin.page') }}" class="bg-primary-500 text-white py-2 px-4 rounded-xl mt-4">
                Login
            </a>
        </div>
    </div>

</div>
