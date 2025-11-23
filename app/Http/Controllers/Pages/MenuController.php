<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;   // ← WAJIB ADA
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $menus = Menu::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%$search%");
        })->get();

        return view('menu', compact('menus'));
    }
}
