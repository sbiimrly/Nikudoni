@extends('layouts.app')

@section('content')

<!-- NAVBAR -->
<nav class="sticky top-0 bg-white flex w-full justify-between py-5 z-100">
    <a href="{{ route('home.page') }}" class="flex items-center">
        <img src="{{ asset('images/logo-nikudoni.png') }}" alt="Nikudoni Logo" class="w-16 lg:w-20">
    </a>
    <div class="text-2xl font-semibold text-primary-500">
        Buat Akun
    </div>
    <div class="text-white">
        a
    </div>
</nav>



            @if(session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('signup.page') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-base font-normal text-gray-700">Nama Pengguna</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="mt-1 block w-full rounded-md border-1 border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                        required>
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-base font-normal text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="mt-1 block w-full rounded-md border-1 border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                        required>
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-base font-normal text-gray-700">Password</label>
                    <input type="password" name="password" id="password"
                        class="mt-1 block w-full rounded-md border-1 border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                        required>
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-base font-normal text-gray-700">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="mt-1 block w-full rounded-md border-1 border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2"
                        required>
                </div>

                <div>
                    <label for="no_hp" class="block text-base font-normal text-gray-700">Nomor Telepon</label>
                    <input type="text" name="no_hp" id="no_hp"
                        class="mt-1 block w-full rounded-md border-1 border-gray-400 focus:ring-blue-500 focus:border-blue-500 p-2">
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white text-lg font-medium mt-6 py-2 rounded-md hover:bg-blue-700 transition">
                    Daftar
                </button>
            </form>

            <p class="mt-4 text-center text-base text-gray-600">
                Sudah memiliki akun?
                <a href="{{ route('signin.page') }}" class="text-blue-600 hover:underline">Masuk</a>
            </p>