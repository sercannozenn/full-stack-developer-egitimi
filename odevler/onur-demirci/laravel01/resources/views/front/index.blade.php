@extends('layouts.front')
@section('title')
    Ana Sayfa
@endsection

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <div class="col-sm-6 col-lg-6 grid-container" id="column-1">
        @foreach($articles as $article)

            @if($loop->index<6)
                <div class="grid-item">{{$loop->index}}</div>
            @endif
        @endforeach
    </div>
    <div class="col-sm-6 col-lg-6 grid-container" id="column-2">
        @foreach($articles as $article)
            @if($loop->index>5)
                <div class="grid-item">{{$loop->index}}</div>
            @endif
        @endforeach
    </div>

    <div class="row">

    </div>

@endsection

@section('js')

@endsection