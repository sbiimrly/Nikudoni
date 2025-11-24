@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-semibold mb-6 text-primary-700">
    Dashboard Admin
</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    {{-- CARD: PESANAN HARI INI --}}
    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-gray-600 text-sm">Pesanan Hari Ini</h2>
        <p class="text-3xl font-bold mt-2">{{ $ordersToday ?? 0 }}</p>
    </div>

    {{-- CARD: TOTAL MENU --}}
    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-gray-600 text-sm">Jumlah Menu</h2>
        <p class="text-3xl font-bold mt-2">{{ $menuCount ?? 0 }}</p>
    </div>
    

    {{-- CARD: PENDAPATAN --}}
    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-gray-600 text-sm">Pendapatan Hari Ini</h2>
        <p class="text-3xl font-bold mt-2">Rp {{ number_format($incomeToday ?? 0) }}</p>
    </div>
</div>

{{-- RECENT ORDERS --}}
<div class="mt-12">
    <h2 class="text-xl font-semibold mb-4">Pesanan Terbaru</h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <table class="w-full">
            <thead>
                <tr class="text-left border-b">
                    <th class="pb-3">Nama</th>
                    <th class="pb-3">Menu</th>
                    <th class="pb-3">Total</th>
                    <th class="pb-3">Status</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($recentOrders ?? [] as $order)
                    <tr class="border-b">
                        <td class="py-3">{{ $order->customer_name }}</td>
                        <td>{{ $order->menu_name }}</td>
                        <td>Rp {{ number_format($order->total) }}</td>
                        <td class="text-primary-600 font-semibold">{{ $order->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-gray-500">
                            Belum ada pesanan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection
