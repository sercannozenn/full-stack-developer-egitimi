<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    public function index()
    {
        $list = PostTag::all();
        return view('admin.tag_list',compact('list'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $tagName = $request->name;
        $tagStatus = $request->status;
        $tagUserID = Auth::user();

        $data = [
            'name' => $tagName,
            'status' => $tagStatus ? 1 : 0,
            'user_id' => $tagUserID->id
        ];

        PostTag::create($data);
        alert()->success('Başarılı', 'Kategori eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('etiket.index');

    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $PostTag = PostTag::find($id);
        $PostTag->name = $request->name;
        $request->status ? $status=1 : $status=0;
        $PostTag->status = $status;

        $PostTag->save();
        alert()->success('Başarılı','Etiket güncellendi')
            ->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('etiket.index');

    }


    public function destroy($id)
    {
        //
    }

    public function delete(Request $request){
        $tagID = $request->id;

        PostTag::where('id', $tagID)->delete();

        return response()->json(['message' => 'Başarılı'], 200);
    }

    public function edit($id)
    {
        return response()->json([
            'post' => PostTag::find($id)
        ], 200);
    }


    public function changeStatus(Request $request)
    {
        try
        {
            $tag = PostTag::find($request->id);
            $tag->status = $tag->status ? 0 : 1;
            $tag->save();

            return response()->json(['message' => 'Başarılı', 'status' => $tag->status], 200);
        }
        catch (\Exception $exception)
        {
            return response()->json(['message' => 'Başarısız', 'status' => $tag->status], 500);
        }
    }

}
