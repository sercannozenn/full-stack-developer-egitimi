@extends('layouts.front')
@section('title')
    Giriş
@endsection
@section('css')
    <style>
        .container {
            margin-top: 30vh;
        }

        .secondBtn {
            margin-top: 3vh;
        }

    </style>
@endsection
@section('content')
    <div class="container">
        <div class="card text-center  ">
            <h5 class="card-header">Lütfen İşleminizi Seçiniz</h5>
            <div class="card-body ">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-primary btn-block btn-lg">Giriş Yap</a>
                    </div>
                    <div class="col-md-12 secondBtn">
                        <a href="#" class="btn btn-primary btn-block btn-lg">Kaydol</a>
                    </div>
                </div>
                <div class="col-md-4"></div>


            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection


