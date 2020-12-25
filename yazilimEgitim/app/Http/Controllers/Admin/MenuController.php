<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $list = Menu::all();
        return view('admin.menu', compact('list'));
    }

    public function add(Request $request)
    {
        
        Menu::create([
            'name' => $request->name,
            'order' => $request->order,
            'status' => isset($request->status) ? 1 : 0,
            'route_type' => $request->route_type,
            'route' => $request->route,
            'user_id' => auth()->id()

        ]);

        alert()->success('Başarılı', 'Menü eklendi.')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('menu.index');


    }

    public function editShow(Request $request)
    {
        $id = $request->id;
        $menu = Menu::find($id);

        return response()->json(['menu' => $menu], 200);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        Menu::where('id', $id)->update([
            'name' => $request->name,
            'order' => $request->order,
            'status' => isset($request->status) ? 1 : 0,
            'route_type' => $request->route_type,
            'route' => $request->route,
        ]);

        alert()->success('Başarılı', 'Menü güncellendi.')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('menu.index');
    }
}
