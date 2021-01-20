<?php

namespace App\Http\Controllers;

use App\Models\articlesModel;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = articlesModel::all();
        return view('Articles.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new articlesModel();
        $data->articlesName = $request->articlesName;
        $data->articlesPost = $request->articlesPost;
        if (is_null($request->status)) {
            $request->status = 0;
        }
        $data->articlesStatus = $request->status;

        $data->save();
        toastr()->success('Kayıt İşlemi Başarılı');
        return redirect()->back();

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
        $data = articlesModel::findOrFail($id);
        return view('Articles.update', compact('data'));

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
        $data = articlesModel::findOrFail($id);
        //dd($data);
        $data->articlesName = $request->articlesName;
        $data->articlesPost = $request->articlesPost;
        if (is_null($request->status)) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }
        $data->articlesStatus = $request->status;

        $data->update();
        toastr()->success('Güncelleme İşlemi Başarılı');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        articlesModel::findOrFail($id)->delete();

        toastr()->error('Silme İşlemi Başarılı');
        return redirect()->back();
    }
}
