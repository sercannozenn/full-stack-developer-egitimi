@extends('layouts.masterPage')
@section('pagetitle','Makale Ekleme Sayfası')

@section('content')

    <!-- Text Inputs -->
    <form action="{{route('articles.post')}}" method="post" class="form-horizontal form-box" >
        @csrf
        <h4 class="form-box-header">Yeni Makale Ekle</h4>

        <div class="form-box-content">
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-normal">Makale Başlığı</label>
                <div class="col-md-3">
                    <input type="text" id="example-input-normal" name="articlesName" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="example-textarea-ckeditor">CKEditor</label>
                <div class="col-md-10">
                    <textarea id="example-textarea-ckeditor" name="articlesPost" class="ckeditor"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Status</label>
                <div class="col-md-10">
                    <label class="switch switch-success"><input type="checkbox" name="status" id="status" checked value="1"><span></span></label>

                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <input type="submit" class="btn btn-success" value="Kaydet">
                    <input type="submit" class="btn btn-danger" value="İptal">
                </div>
            </div>
        </div>
    </form>
    <!-- END Text Inputs -->

@stop
@section('js')
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>

    <script>
// const  status=document.querySelector('#status')
//
//        $(status).click(function () {
//            //alert("test");
//        })

    </script>
@stop
