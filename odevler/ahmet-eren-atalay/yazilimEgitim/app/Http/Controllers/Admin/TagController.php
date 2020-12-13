<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TagsList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tags = TagsList::all();

        return view('admin.tag_list',compact('tags'));
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
            'user_id' => $user->id,
            'status' => $status ? 1 : 0,
        ];
        TagsList::create($data);

        alert()->success('Başarılı', 'Kategori eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('tags.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = TagsList::find($id);

        return response()->json([
            'tags'=>$tags
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tags = TagsList::find($id);
        $tags->name = $request->name;
        $status = $request->status;
        $tags->status = $status ? 1 : 0;
        $tags->save();

        alert()->success('Başarılı', 'Kategori güncellendi')
            ->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('tags.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function changeStatus(Request $request)
    {
        try {
            $tagID = $request->id;

            $tag = TagsList::find($tagID);

            $status = $tag->status;

            $tag->status = $status ? 0 : 1;

            $tag->save();

            return response()->json(['message' => 'Başarılı', 'status' => $tag->status], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Başarısız', 'status' => $status], 500);
        }

    }

    public function delete (Request $request)
    {
        $tagID = $request->id;

        TagsList::where('id',$tagID)->delete();

        return response()->json(['message' => 'Başarılı'], 200);
    }
}
