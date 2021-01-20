
@extends('layouts.front')
@section('title')
    DashBoard
@endsection
@section('css')
@endsection
@section('content')
    <div id="page-content">
    <ul class="nav-dash">
        <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Users" class="animation-fadeIn">
                <i class="fa fa-user"></i>
            </a>
        </li>
    </ul>
    <h3 class="page-header page-header-top">Makaleler</h3>
    <table class="table">
        <thead>
        <tr>
            <th class="cell-small text-center" data-toggle="tooltip" title="Toggle all!"><input type="checkbox" id="check1-all" name="check1-all"></th>
            <th class="text-center">#</th>
            <th>Username</th>
            <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Email</th>
            <th class="hidden-xs hidden-sm">FullName</th>
            <th class="text-center"><i class="fa fa-bolt"></i> Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as$key=>$value)

            <tr>
                <td class="text-center"><input type="checkbox" id="check1-td1" name="check1-td1"></td>
                <td class="text-center">1</td>
                <td><a href="javascript:void(0)">{{$value->title}}</a></td>
                <td class="hidden-xs hidden-sm">{{auth()->user()->email}}</td>
                <td class="hidden-xs hidden-sm">{{auth()->user()->name}}</td>
                <td class="text-center">

                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>


        @endforeach

        </tbody>
    </table>
    </div>
@endsection
@section('js')
@endsection
