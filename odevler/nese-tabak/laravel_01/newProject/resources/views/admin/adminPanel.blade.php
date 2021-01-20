@extends('layouts.front')
@section('title')
    Admin Panel
@endsection
@section('css')
@endsection
@section('content')
    <div class="container" id="page-content">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav-dash">
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Users" class="animation-fadeIn">
                            <i class="fa fa-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Comments" class="animation-fadeIn">
                            <i class="fa fa-comments"></i> <span class="badge badge-success">3</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Calendar" class="animation-fadeIn">
                            <i class="fa fa-calendar"></i> <span class="badge badge-inverse">5</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Photos" class="animation-fadeIn">
                            <i class="fa fa-camera-retro"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Projects" class="animation-fadeIn">
                            <i class="fa fa-paperclip"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Tasks" class="animation-fadeIn">
                            <i class="fa fa-tasks"></i> <span class="badge badge-warning">1</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Reader" class="animation-fadeIn">
                            <i class="fa fa-book"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Settings" class="animation-fadeIn">
                            <i class="fa fa-cogs"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>
                    ADMİN PANEL
                </h3>
            </div>
        </div>
    </div>


@endsection
@section('js')
@endsection
