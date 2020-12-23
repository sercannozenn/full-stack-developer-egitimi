<?php

namespace App\Http\Controllers\Admin;

use App\Models\TagList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{

    public function index()
    {
        $list = TagList::all();
        return view('admin.tag_list', compact('list'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $result = TagList::where('name', 'LIKE', '%' . $search . '%')
            ->statusActive()
            ->get();
//        dd($result);
        return view('admin.layouts.tag_search_result', compact('result'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
//        dd($request->all());
        $name = $request->name;
        $status = $request->status;
        $user = Auth::user();
        $data = [
            'name' => $name,
            'user_id' => $user->id,
            'status' => $status ? 1 : 0
        ];


        TagList::create($data);
        alert()->success('Başarılı','Etiket Eklendi')
            ->showConfirmButton('Tamam','#3085d6');
        return redirect()->route('tag.index');

    }


    public function show($id)
    {

    }

    public function edit($id)
    {

        $tag = TagList::find($id);

        return response()->json([
            'tag' => $tag
        ], 200);
    }


    public function update(Request $request, $id)
    {
//        $list = TagList::find($id);
//        $list->name =$request->name;
//        $status = $list->status;
//        $list->status = $status ? 0 : 1;
//        $list->save();

//
        $name = $request->name;
        $status = $request->status;
        $user = Auth::user();
        $data = [
            'name' => $name,
            'user_id' => $user->id,
            'status' => $status ? 1 : 0
        ];


        TagList::where('id', $id)->update($data);


        alert()->success('Başarılı', 'Etiket güncellendi')
            ->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('tag.index');
    }

    public function changeStatus(Request $request)
    {

        try
        {
            $tagID = $request->id;

            $list = TagList::find($tagID);

            $status = $list->status;

            $list->status = $status ? 0 : 1;
            $list->save();

            return response()->json(['message' => 'Başarılı', 'status' => $list->status], 200);
        }
        catch (\Exception $exception)
        {
            return response()->json(['message' => 'Başarısız', 'status' => $status], 500);
        }
    }


    public function delete(Request $request)
    {
        $tagID = $request->id;

        TagList::where('id', $tagID)->delete();

        return response()->json(['message' => 'Başarılı'], 200);

    }
}
