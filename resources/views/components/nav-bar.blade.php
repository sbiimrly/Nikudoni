<nav class="sticky top-0 bg-white flex w-full justify-between py-5 z-100">
    <a href="{{ route('home.page') }}" class="flex items-center">
        <img src="{{ asset('images/logo-nikudoni.png') }}" alt="Nikudoni Logo" class="w-16 lg:w-20">
    </a>
    <div class="hidden lg:flex gap-20 text-black-200 text-lg font-normal">
        <div class="text-primary-500">Beranda</div>
        <div>Menu</div>
        <div>Tentang</div>
        <div>Reservasi</div>
        <div>Room Service</div>
    </div>
    <div class="flex gap-4 lg:gap-8 text-black-200 text-sm lg:text-lg font-normal items-center">
        <div class="hidden lg:flex">Login</div>
            <a href="{{ route('signin.page') }}" class="bg-primary-500 py-4 px-6 text-white rounded-4xl">
                Order ->
            </a>  
        <div><img src="{{ asset('icon/menu-hamburger.svg') }}" alt="" class="lg:hidde"></div>
    </div>
</nav>