@extends('layouts.app')

@section('content')

<!-- NAVBAR -->
<nav class="sticky top-0 bg-white flex w-full justify-between py-5 z-100">
    <a href="{{ route('home.page') }}" class="flex items-center">
        <img src="{{ asset('images/logo-nikudoni.png') }}" alt="Nikudoni Logo" class="w-16 lg:w-20">
    </a>
    <div class="text-2xl font-semibold text-primary-500">
        Masuk
    </div>
    <div class="text-white">
        a
    </div>
</nav>

{{-- AREA GAMBAR DIPERBAIKI DI SINI --}}
<div class="w-full relative">
    <img src="{{ asset('images/foto-masuk.svg') }}" alt="foto masuk" 
         class="w-full h-full object-cover"> {{-- Ditambahkan w-full, h-full, dan object-cover --}}
    
    <div class="absolute inset-0 flex items-end p-4">
        <h1 class="text-white text-xl font-semibold">
            Selamat datang. Nikmati hidangan comfort food ala Jepang di Nikudoni.
        </h1>
    </div>
</div>
{{-- AKHIR AREA GAMBAR DIPERBAIKI --}}

@if(session('success'))
        <script>
            // ... (kode SweetAlert Anda) ...
        </script>
    @endif

    <form action="{{ route('signin.page') }}" method="POST" class="space-y-4">
        @csrf

        <div class="pt-4">
            <label for="email" class="block text-base font-normal text-black">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="mt-1 block w-full rounded-md border border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                required>
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-base font-normal text-black">Password</label>
            <input type="password" name="password" id="password"
                class="mt-1 block w-full rounded-md border border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                required>
            @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="w-full bg-primary-500 text-white text-lg font-medium mt-6 py-2 rounded-3xl">
            Masuk
        </button>
    </form>

    <p class="mt-4 text-center text-base text-gray-600">
        Belum memiliki akun?
        <a href="{{ route('signup.page') }}" class="text-blue-600 hover:underline">Daftar</a>
    </p>


@endsection