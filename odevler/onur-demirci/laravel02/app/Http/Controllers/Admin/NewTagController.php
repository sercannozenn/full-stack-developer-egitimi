<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewTagController extends Controller
{
    public function index()
    {
        $tag_list = Tags::all();

        return view('admin.tag_list', compact('tag_list'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $tag_name = $request->tag_name;
        $description = $request->description;
        $status = $request->status;
        $user = Auth::user();
        $tag_data = [
            'name' => $tag_name,
            'status' => $status ? 1 : 0,
            'user_id' => $user->id
        ];

        Tags::create($tag_data);

        alert()->success('Başarılı', 'Etiket eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('etiket.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tag = Tags::find($id);

        return response()->json([
            'tag' => $tag
        ], 200);
    }


    public function update(Request $request, $id)
    {
        $tag = Tags::find($id);
//
        $tag->name = $request->tag_name;
        $status = $tag->status;
        $tag->status = $status ? 0 : 1;
        $tag->save();

        alert()->success('Başarılı', 'Etiket güncellendi')
            ->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('etiket.index');
    }


    public function destroy($id)
    {
        //
    }
    public function changeStatus(Request $request)
    {
        try
        {
            $tagID = $request->id;

            $tag = Tags::find($tagID);

            $status = $tag->status;

            $tag->status = $status ? 0 : 1;
            $tag->save();

            return response()->json(['message' => 'Başarılı', 'status' => $tag->status], 200);
        }
        catch (\Exception $exception)
        {
            return response()->json(['message' => 'Başarısız', 'status' => $status], 500);
        }
    }

    public function delete(Request $request)
    {
        $tagID = $request->id;

        Tags::where('id', $tagID)->delete();

        return response()->json(['message' => 'Başarılı'], 200);

    }
}
