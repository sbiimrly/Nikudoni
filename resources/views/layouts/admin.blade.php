<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Nikudoni</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-white shadow-lg h-screen fixed">
        <div class="p-6 font-bold text-xl text-primary-600">
            Admin Panel
        </div>

        <nav class="mt-6">
            <a href="{{ route('admin.dashboard') }}" 
               class="block px-6 py-3 hover:bg-primary-100 {{ request()->routeIs('admin.dashboard') ? 'bg-primary-200' : '' }}">
                Dashboard
            </a>

            <a href="{{ route('admin.orders') }}" 
               class="block px-6 py-3 hover:bg-primary-100">
                Pesanan
            </a>

            <a href="{{ route('admin.menu') }}" 
               class="block px-6 py-3 hover:bg-primary-100">
                Menu
            </a>

            <a href="{{ route('admin.customers') }}" 
               class="block px-6 py-3 hover:bg-primary-100">
                Pelanggan
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button 
                    class="w-full text-left px-6 py-3 hover:bg-red-100 mt-6 text-red-500">
                    Logout
                </button>
            </form>
        </nav>
    </aside>

    {{-- MAIN CONTENT --}}
    <main class="ml-64 w-full p-8">
        @yield('content')
    </main>

</body>
</html>
