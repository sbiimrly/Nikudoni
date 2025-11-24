<?php
// AdminController.php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function menu(){
    $menus = Menu::all(); // ambil semua menu
    return view('admin.menu', compact('menus'));
}

    public function dashboard(){
        $totalUsers = User::count();
        $totalMenus = Menu::count();

        return view('admin.dashboard', compact('totalUsers', 'totalMenus'));
    }
public function manageStock(Request $request, $id)
{
    $request->validate([
        'quantity' => 'required|integer|min:1'
    ]);

    $menu = Menu::findOrFail($id);

    if ($request->action === 'add') {
        $menu->stock += $request->quantity;
    } elseif ($request->action === 'subtract') {
        $menu->stock = max(0, $menu->stock - $request->quantity); // jangan sampai minus
    }

    $menu->save();

    return redirect()->back()->with('success', 'Stock berhasil diperbarui.');
}

    

}
