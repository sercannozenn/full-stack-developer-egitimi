<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{

    public function index()
    {
        $list = Tag::all();

        return view('admin.tag_list', compact('list'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $status = $request->status;
        $user = Auth::user();

        $data = [
            'name' => $name,
            'status' => $status ? 1 : 0,
            'user_id' => $user->id
        ];

        Tag::create($data);

        alert()->success('Başarılı', 'Etiket eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('tag.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Tag::where('id', $id)->delete();

    }

    public function search(Request $request)
    {

        $text = $request->text;
        $result = Tag::where('name', 'LIKE', '%' . $text . '%')
            ->statusActive()
            ->get();

        return view('admin.layouts.tag_search_result', compact('result'));
    }
}
