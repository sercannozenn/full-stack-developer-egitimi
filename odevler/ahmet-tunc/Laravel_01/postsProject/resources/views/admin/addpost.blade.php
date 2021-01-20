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


    <form action="" method="POST" class="form-horizontal form-box" enctype="multipart/form-data">
        @csrf
        <div class="form-box-content">
            <?php
            if (!isset($error)){
            if (isset($control)){
            if($control->exists)
            { ?>
            <div class="form-group">
                <div class="col-md-10">
                    <div class="alert alert-success" style="margin-bottom: unset">
                        <strong>Post kayıt işlemi başarıyla gerçekleştirilmiştir.</strong>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="form-group">
                <div class="col-md-10">
                    <div class="alert alert-danger" role="alert" style="margin-bottom: unset">
                        <strong>Post kayıt işlemi gerçekleştirilememiştir.</strong>
                    </div>
                </div>
            </div>
            <?php }}}else{ ?>
            <div class="form-group">
                <div class="col-md-10">
                    <div class="alert alert-danger" style="margin-bottom: unset">
                        <strong>Lütfen doldurmanız gereken alanları kontrol ediniz.</strong>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="form-group">
                <div class="col-md-4">
                    <input type="file" id="file" name="file" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <input type="text" name="title" id="title" class="form-control" maxlength="99" placeholder="Başlık"
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
                              class="ckeditor" required></textarea>
                </div>
            </div>
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

