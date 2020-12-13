<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index()
    {
        $list = PostCategory::all();

//        $list = PostCategory::join('users', 'users.id', '=', 'post_category.user_id')
//            ->select('post_category.*', 'users.name as userName')
//            ->get();
//
//        $list= DB::table('post_category')->join('users', 'users.id', '=', 'post_category.user_id')
//            ->select('post_category.*', 'users.name as userName')
//            ->get();

        return view('admin.category_list', compact('list'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $status = $request->status;
        $user = Auth::user();
        $data = [
            'name' => $name,
            'description' => $description,
            'status' => $status ? 1 : 0,
            'user_id' => $user->id
        ];

        PostCategory::create($data);

        alert()->success('Başarılı', 'Kategori eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('category.index');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = PostCategory::find($id);

        return response()->json([
            'category' => $category
        ], 200);
    }


    public function update(Request $request, $id)
    {

        $category = PostCategory::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $status = $request->status;
        $category->status = $status ? 1 : 0;
        $category->save();

        alert()->success('Başarılı', 'Kategori güncellendi')
            ->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        //
    }

    public function changeStatus(Request $request)
    {
        try {
            $categoryID = $request->id;

            $category = PostCategory::find($categoryID);

            $status = $category->status;

            $category->status = $status ? 0 : 1;

            $category->save();

            return response()->json(['message' => 'Başarılı', 'status' => $category->status], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Başarısız', 'status' => $status], 500);
        }
    }

    public function delete(Request $request)
    {
        $categoryID = $request->id;
        PostCategory::where('id', $categoryID)->delete();


        return response()->json(['message' => 'Başarılı'], 200);

    }


}
