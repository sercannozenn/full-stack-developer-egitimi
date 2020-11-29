@extends('layouts.front')
@section('title')
    Yeni Makale Ekleme
@endsection
@section('css')
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-md-8 m-auto ">
            <h3>Yeni Makale Ekleme</h3>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Makale Başlık</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Makale Başlığı">
                </div>

                <div class="form-group">
                    <label for="content">Makale İçerik</label>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"
                              placeholder="Makale İçerik"></textarea>
                </div>

                <div class="form-group">
                    <label for="status">
                        <input type="checkbox" name="status" id="status"> Status
                    </label>
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">Kaydet</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
@endsection
