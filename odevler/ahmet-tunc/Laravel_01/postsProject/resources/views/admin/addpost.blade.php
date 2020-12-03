@extends('layouts.front')

@section('title')
    Yeni Post Ekle
@endsection


@section('css')
@endsection

@section('content')
    <ul id="nav-info" class="clearfix">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Post İşlemleri</a></li>
        <li><a href="javascript:void(0)">Yeni Post Ekle</a></li>
    </ul>
    <h3 class="page-header page-header-top"><i class="fa fa-list-alt animation-hatch"></i> Yeni Post Ekle</h3>

    <form action="" method="POST" class="form-horizontal form-box">
        @csrf
        <div class="form-box-content">
            <div class="form-group">
                <div class="col-md-10">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Başlık">
                </div>
            </div>
{{--            <div class="form-group">--}}
{{--                <div class="col-md-10">--}}
{{--                    <select id="example-select-chosen" name="example-select-chosen" class="form-control">--}}
{{--                        <option>Kategori</option>--}}
{{--                        <option>html</option>--}}
{{--                        <option>css</option>--}}
{{--                        <option>javascript</option>--}}
{{--                        <option>php</option>--}}
{{--                        <option>mysql</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="form-group">
                <div class="col-md-10">
                    <textarea id="content" name="content"
                              class="ckeditor"></textarea>
                </div>
            </div>
{{--            <div class="form-group">--}}
{{--                <div class="col-md-2">--}}
{{--                    <div class="input-group input-colorpicker color" data-color="#db4a39">--}}
{{--                        <input type="text" id="example-input-colorpicker2" name="example-input-colorpicker2" class="form-control">--}}
{{--                        <span class="input-group-addon"><i style="background-color: #db4a39"></i></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-10">--}}
{{--                    <span class="help-block">Post Arkaplan Rengi</span>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="form-group">
                <div class="col-md-10">
                    <div class="checkbox">
                        <label for="status">
                            <input type="checkbox" id="status" name="status"> Aktif biçimde kaydet
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <input type="submit" class="btn btn-success col-md-12" value="Kaydet">
                </div>
            </div>
        </div>
    </form>

@endsection


@section('js')
    <script src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>
@endsection

