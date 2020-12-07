@extends('layouts.masterPage')
@section('pagetitle','Makale Ekleme Sayfası')

@section('content')

    <!-- Text Inputs -->
    <form action="/articles/edit/{{$data->id}}" method="post" class="form-horizontal form-box">
        @csrf
        <h4 class="form-box-header">{{$data->articlesName}} Makalesini Düzenle</h4>

        <div class="form-box-content">
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-normal">Makale Başlığı</label>
                <div class="col-md-3">
                    <input type="text" id="example-input-normal" name="articlesName" class="form-control"
                           value="{{$data->articlesName}}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="example-textarea-ckeditor">CKEditor</label>
                <div class="col-md-10">
                    <textarea id="example-textarea-ckeditor" name="articlesPost"
                              class="ckeditor">{{$data->articlesPost}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Status</label>
                <div class="col-md-10">
                    <label class="switch switch-success">
                        <input type="checkbox" name="status" id="status"
                               @if($data->articlesStatus==1)
                               checked
                               @endif
                               >
                        <span></span>
                    </label>

                </div>
            </div>


            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <input type="submit" class="btn btn-success" value="Güncelle">
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
