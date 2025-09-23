<nav class="sticky top-0 bg-white flex w-full justify-between items-center py-5 z-100">
    <div>
        <img src="{{ asset('images/logo-nikudoni.png') }}" alt="Nikudoni Logo" class="w-16 lg:w-20">
    </div>
    <div class="hidden lg:flex gap-20 text-black-200 text-lg font-normal">
        <div class="text-primary-500">Beranda</div>
        <div>Menu</div>
        <div>Tentang</div>
        <div>Reservasi</div>
        <div>Room Service</div>
    </div>
    <div class="flex gap-4 lg:gap-8 text-black-200 text-sm lg:text-lg font-normal items-center">
        <div class="hidden lg:flex">Login</div>
            <x-button.button-cta>
                Order ->
            </x-button.button-cta>     
        <div><img src="{{ asset('icon/menu-hamburger.svg') }}" alt="" class="lg:hidde"></div>
    </div>
</nav>