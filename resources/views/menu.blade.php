@extends('layouts.app')

@section('content')

<x-nav-bar />

<x-parts.poster />

<section class="max-w-6xl mx-auto px-4 mt-12 mb-20">

    {{-- SEARCH --}}
    <form method="GET" action="{{ route('menu.page') }}" class="mb-10">
        <div class="relative">
            <input 
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari menu favorit kamu..."
                class="w-full border border-gray-300 rounded-2xl py-4 px-6 pl-12 shadow-sm focus:ring-primary-500 focus:border-primary-500"
            >
            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">🔍</span>
        </div>
    </form>

    {{-- MENU GRID --}}
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @forelse ($menus as $menu)
            <div class="bg-white rounded-2xl shadow-md p-4 hover:shadow-xl transition cursor-pointer">

                <img 
                    src="{{ $menu->image_url }}"
                    class="w-full h-40 object-cover rounded-xl mb-3"
                >

                <h3 class="text-lg font-semibold mb-1">{{ $menu->name }}</h3>

                <p class="text-sm text-gray-500 mb-2">{{ $menu->description }}</p>

                <p class="text-primary-500 font-bold text-lg">
                    Rp {{ number_format($menu->price, 0, ',', '.') }}
                </p>
                <p>Stock tersisa: {{ $menu->stock }}</p>
            </div>
        @empty
            <p class="text-gray-500">Menu tidak ditemukan.</p>
        @endforelse

    </div>
</section>

@endsection
