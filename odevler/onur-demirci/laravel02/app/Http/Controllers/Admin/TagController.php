<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function showTags() {
        $tag_list = Tags::all();

        return view('admin.tag_list', compact('tag_list'));
    }

    public function addTag(Request $request) {
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

    public function editTag($id) {
        $tag = Tags::find($id);

        return response()->json([
            'tag' => $tag
        ], 200);
    }
}
