<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function showAddPost()
    {
        return view('admin.addpost');
    }

    public function addPost(Request $request)
    {
        if (isset($request->content) && isset($request->file))
        {
            $imageControl = $this->typeControl($_FILES['file']['type']);
            if ($imageControl)
            {
                if (!file_exists("resimler"))
                {
                    mkdir('resimler');
                }
                $dizin = "resimler/";

                $rand = rand(10000, 30000);
                $uploadImage = $dizin . $rand . $_FILES["file"]["name"];

                if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadImage))
                {
                    $picture = $uploadImage;
                    $category = $request->select;
                    $title = $request->title;
                    $content = $request->content;
                    $status = $request->status;

                    if (is_null($status))
                    {
                        $status = 0;
                    }
                    else
                    {
                        $status = 1;
                    }

                    $data['control'] = Posts::create([
                        'picture' => $picture,
                        'category' => $category,
                        'title' => $title,
                        'content' => $content,
                        'status' => $status
                    ]);

                    if ($data['control']->exists)
                    {
                        return view('admin.addpost', $data);
                    }
                    else
                    {
                        return view('admin.addpost', $data);
                    }
                }
                else
                {
                    dd('yüklenemedi');
                }
            }
            else
            {
                $error['error'] = true;
                return view('admin.addpost', $error);
            }

        }
        else
        {
            $error['error'] = true;
            return view('admin.addpost', $error);
        }

    }

    function typeControl($file)
    {
        $imageType = explode("/", $file);
        $array = ["jpg", "jpeg", "png"];
        if (!in_array(strtolower($imageType[1]), $array))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function getAllPost()
    {
        $data['veriler'] = Posts::get();
        return view('admin.getallpost', $data);
    }


    public function deletePost($id)
    {
        $deletePicture['veri'] = Posts::where('id', '=', $id)->get();
        foreach ($deletePicture['veri'] as $item)
        {
            if (isset($item->picture))
            {
                unlink($item->picture);
            }
        }
        $deletePosts = Posts::where('id', '=', $id)->delete();

        if ($deletePosts)
        {
            return redirect()->route('admin.getAllPost');
        }
        else
        {
            return redirect()->route('admin.getAllPost');
        }
    }

    public function showPost($id)
    {
        $data = Posts::find($id);
        return view('admin.update', ['data' => $data]);
    }

    public function updatePost(Request $request)
    {
        if (is_null($request->status))
        {
            $request->status = 0;
        }
        else
        {
            $request->status = 1;
        }

        $data = Posts::find($request->id);
        if (isset($request->file))
        {
            $imageControl = $this->typeControl($_FILES['file']['type']);
            if ($imageControl)
            {
                if (!file_exists("resimler"))
                {
                    mkdir('resimler');
                }
                $dizin = "resimler/";

                $rand = rand(10000, 30000);
                $uploadImage = $dizin . $rand . $_FILES["file"]["name"];

                if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadImage))
                {
                    unlink($data->picture);
                    $data->picture = $uploadImage;

                }
            }
        }
        $data->category = $request->select;
        $data->title = $request->title;
        $data->content = $request->content;
        $data->status = $request->status;
        $data->save();


        return redirect('admin/getallpost');
    }
}


