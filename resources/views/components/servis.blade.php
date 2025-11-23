<div class="py-6">
    <div>
        <p class="font-normal text-center text-xs lg:text-lg text-black-200">#SERVIS</p>
    </div>

<!-- Tambahkan Alpine.js sekali di layout utama -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div x-data="{ active: 1 }" class="w-full pt-4">
    <!-- Lingkaran Toggle -->
    <div class="flex justify-between">
        <!-- Lingkaran 1 -->
        <div 
            @click="active = 1"
            :class="active === 1 
                ? 'bg-primary-500 text-white' 
                : 'bg-white text-black-200'"
            class="aspect-square rounded-full w-1/3 flex flex-col items-center justify-center font-semibold text-xl text-center cursor-pointer transition-colors duration-300"
        >
            Room <br> Service
        </div>

        <!-- Lingkaran 2 -->
        <div 
            @click="active = 2"
            :class="active === 2 
                ? 'bg-primary-500 text-white' 
                : 'bg-white text-black-200'"
            class="aspect-square rounded-full w-1/3 flex flex-col items-center justify-center font-semibold text-xl text-center cursor-pointer transition-colors duration-300"
        >
            Reservasi
        </div>

        <!-- Lingkaran 3 -->
        <div 
            @click="active = 3"
            :class="active === 3 
                ? 'bg-primary-500 text-white' 
                : 'bg-white text-black-200'"
            class="aspect-square rounded-full w-1/3 flex flex-col items-center justify-center font-semibold text-xl text-center cursor-pointer transition-colors duration-300"
        >
            Jual <br> Bumbu
        </div>
    </div>

    <!-- Bagian Konten Gambar + Teks -->
    <div class="relative w-full h-[400px] mt-6 rounded-2xl overflow-hidden">

        <!-- Gambar Room Service -->
        <template x-if="active === 1">
            <div x-transition.opacity.duration.500ms>
                <img src="{{ asset('images/foto-servis-roomservice.svg') }}" 
                    alt="Room Service"
                    class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 flex items-end p-4">
                    <h1 class="text-white text-xl font-semibold">
                        Membutuhkan servis di luar kedai? Koki siap melayani Anda dimanapun, kapanpun. 
                        <span class="text-gray-200 underline">Selengkapnya</span>
                    </h1>
                </div>
            </div>
        </template>

        <!-- Gambar Reservasi -->
        <template x-if="active === 2">
            <div x-transition.opacity.duration.500ms>
                <img src="{{ asset('images/foto-reservasi.svg') }}" 
                    alt="Reservasi"
                    class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 flex items-end p-4">
                    <h1 class="text-white text-xl font-semibold">
                        Lakukan reservasi dengan mudah dan cepat! 
                        <span class="text-gray-200 underline">Pesan sekarang</span>
                    </h1>
                </div>
            </div>
        </template>

        <!-- Gambar Jual Bumbu -->
        <template x-if="active === 3">
            <div x-transition.opacity.duration.500ms>
                <img src="{{ asset('images/foto-bumbu.svg') }}" 
                    alt="Jual Bumbu"
                    class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 flex items-end p-4">
                    <h1 class="text-white text-xl font-semibold">
                        Nikmati cita rasa kami di rumah! Dapatkan bumbu khas Nikudoni.
                        <span class="text-gray-200 underline">Beli Sekarang</span>
                    </h1>
                </div>
            </div>
        </template>

    </div>
</div>
</div>