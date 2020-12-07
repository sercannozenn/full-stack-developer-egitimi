@extends('layouts.front')

@section('title')
    Güncelleme İşlemi
@endsection


@section('css')
@endsection

@section('content')
    <ul id="nav-info" class="clearfix">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Post İşlemleri</a></li>
        <li><a href="javascript:void(0)">GÜNCELLEME İŞLEMİ</a></li>
    </ul>
    <h3 class="page-header page-header-top"><i class="fa fa-list-alt animation-hatch"></i> Güncelleme İşlemi</h3>


    <form action="{{route('admin.update')}}" method="POST" class="form-horizontal form-box" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="form-box-content">
{{--            <?php--}}
{{--            if (!isset($error)){--}}
{{--            if (isset($control)){--}}
{{--            if($control->exists)--}}
{{--            { ?>--}}
{{--            <div class="form-group">--}}
{{--                <div class="col-md-10">--}}
{{--                    <div class="alert alert-success" style="margin-bottom: unset">--}}
{{--                        <strong>Post kayıt işlemi başarıyla gerçekleştirilmiştir.</strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <?php }else{ ?>--}}
{{--            <div class="form-group">--}}
{{--                <div class="col-md-10">--}}
{{--                    <div class="alert alert-danger" role="alert" style="margin-bottom: unset">--}}
{{--                        <strong>Post kayıt işlemi gerçekleştirilememiştir.</strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <?php }}}else{ ?>--}}
{{--            <div class="form-group">--}}
{{--                <div class="col-md-10">--}}
{{--                    <div class="alert alert-danger" style="margin-bottom: unset">--}}
{{--                        <strong>Lütfen doldurmanız gereken alanları kontrol ediniz.</strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <?php } ?>--}}

            <div class="form-group">
                <div class="col-md-4">
                    <input type="file" id="file" name="file" class="form-control" value="{{"".$data['picture']}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <input type="text" name="title" id="title" class="form-control" maxlength="99" value="{{$data['title']}}" placeholder="Başlık"
                           required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <select id="select" name="select" class="form-control" required>
                        <option>Kategori</option>
                        <option>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <textarea id="content" name="content"
                              class="ckeditor" required>{{$data['content']}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <div class="checkbox">
                        <label for="status">
                            <?php if($data['status']==1){ ?>
                                <input type="checkbox" id="status" checked name="status">
                          <?php  }else{ ?>
                                <input type="checkbox" id="status" name="status">
                              <?php  } ?>
                             Aktif biçimde kaydet
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <input type="submit" class="btn btn-success col-md-12" value="Güncelle">
                </div>
            </div>
        </div>
    </form>

@endsection


@section('js')
    <script src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>

@endsection

