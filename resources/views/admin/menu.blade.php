@extends('layouts.admin')

@section('content')
<div class="p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Daftar Menu</h2>
    
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-gray-700">Nama Menu</th>
                    <th class="px-4 py-2 text-left text-gray-700">Harga</th>
                    <th class="px-4 py-2 text-left text-gray-700">Stock</th>
                    <th class="px-4 py-2 text-left text-gray-700">Kelola Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $menu->name }}</td>
                    <td class="px-4 py-2">Rp {{ number_format($menu->price, 0, ',', '.') }}</td>
                    <td class="px-4 py-2">{{ $menu->stock }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('admin.menu.manageStock', $menu->id) }}" method="POST" class="flex gap-2 mb-1">
                            @csrf
                            <input type="number" name="quantity" min="1" placeholder="Jumlah" class="border rounded px-2 py-1 w-24 focus:outline-none focus:ring-2 focus:ring-green-400">
                            <button type="submit" name="action" value="add" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded transition duration-200">Tambah</button>
                            <button type="submit" name="action" value="subtract" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded transition duration-200">Kurangi</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
