@extends('layouts.front')
@section('title')
    Yeni Makale Ekleme
@endsection
@section('css')
@endsection
@section('content')
    <div id="page-content">
    <div class="row">
        <div class="col-md-8 m-auto">
            <h3 class="mt-4 mb-4">Yeni Makale Ekleme</h3>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Makale Başlığı</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Başlık Giriniz">

                </div>
                <div class="form-group">
                    <label for="content">Makale İçeriği</label>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"
                              placeholder="Maale İçeriği Giriniz"></textarea>
                </div>
                <div class="form-group">
                    <label for="status">
                        <input type="checkbox" name="status" id="status">Status
                    </label>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">Kaydet</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
@section('js')
@endsection
