<div class="py-6 lg:py-10">
    
    <!-- LABEL HERO -->
    <x-text.text-label>
        ー　いらっしゃいませ　ー
    </x-text.twxt-label>

    <!-- TEXT HERO -->
    <x-text.text-heading1>
        Comfort Food <span class="text-primary-500">Jepang Halal</span> di Semarang
    </x-text.text-heading1>

    <!-- P -->
    <x-text.text-p>
        Rasakan kembali kehangatan makanan keluarga dengan sajian langsung di depan mata
    </x-text.text-p>

    <div class="relative flex justify-center pt-10">
        <!-- Lingkaran merah -->
        <div class="absolute size-40 lg:size-90 rounded-full bg-red-500 z-0"></div>
        
        <!-- Parent -->
        <div class="flex overflow-x-auto snap-x snap-mandatory no-scrollbar">
            <!-- Item -->
            <div class="snap-center shrink-0 w-full flex justify-center">
                <img src="{{ asset('images/Hero-ramen.png') }}" 
                alt="Ramen"
                class="relative w-9/10 lg:w-4/6 z-1 -left-4 lg:-left-12 mt-10 lg:mt-20">
            </div>
            <div class="snap-center shrink-0 w-full flex justify-center">
                <img src="{{ asset('images/Hero-ramen.png') }}" 
                alt="Ramen"
                class="relative w-9/10 lg:w-4/6 z-1 -left-4 lg:-left-12 mt-10 lg:mt-20">
            </div>
            <div class="snap-center shrink-0 w-full flex justify-center">
                <img src="{{ asset('images/Hero-ramen.png') }}" 
                alt="Ramen"
                class="relative w-9/10 lg:w-4/6 z-1 -left-4 lg:-left-12 mt-10 lg:mt-20">
            </div>
        </div>

        <!-- Green -->
         <div class="absolute text-white bg-secondary-500 rounded-full z-2 text-xs size-16 flex items-center justify-center top-45 right-14 cursor-pointer">Scroll -></div>
        
    </div>

    <!-- Text -->
    <div class="flex gap-4 items-center justify-around">
        <div class="text-black-500 text-center text-lg lg:text-2xl font-semibold lg:pt-10"><span class="text-sm text-black-200 font-normal">牛肉醤油ラーメン</span> <br> Gyu Shoyu Ramen <span>*</span> </div>
            <div class="grid grid-cols-2">
                <div class="text-black-200 font-normal text-sm flex justify-center pr-2">Reg</div>
                <div class="text-black-200 font-normal text-sm flex justify-center border-l border-black-200 pl-4">Large</div>
                <div class="text-black-500 font-semibold text-2xl pt-1 flex justify-center pr-2">35K</div>
                <div class="text-black-500 font-semibold text-2xl border-l border-black-200 pl-4 pt-1">42K</div>
            </div>
    </div>
</div>
