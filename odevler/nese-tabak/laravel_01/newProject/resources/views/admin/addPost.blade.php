@extends('layouts.front')
@section('title')
   New Post
@endsection
@section('css')
@endsection
@section('content')
    <div class="container" id="page-content">
    <div class="row ">
        <div class="col-md-8 m-auto">

            <h3>NEW POST</h3>

            <form action="" method="post">

                @csrf

            <div class="form-group mt-3">
                <label for="title" >Post Name</label>
                <input type="text" name="name" class="form-control" id="title" placeholder="Post Name...">

            </div>

            <div class="form-group mt-3">
                <label for="content">Post Content</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10" placeholder="Post Content..."></textarea>
            </div>
<div class="form-group">
    <label for="status">
        <input type="checkbox" name="status" id="status">Status
    </label>
</div>
            <div class="form-group">
                <button class="btn btn-block btn-success" type="submit">SAVE</button>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
@section('js')
@endsection
