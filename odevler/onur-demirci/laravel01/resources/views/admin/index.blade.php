@extends('layouts.front')
@section('title')
    Admin Sayfası
@endsection

@section('css')
@endsection

@section('content')

@endsection

@section('js')
    @if(session('success'))
        <script>
            alert("{{session('success')}}");
        </script>
    @endif
@endsection