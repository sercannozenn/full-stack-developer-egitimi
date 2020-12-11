@extends('layouts.admin')

@section('title')
    Makale Ekleme
@endsection
@section('css')
@endsection
@section('content')
    <div class="l12">
        <div class="row">
            <form id="frmPost" action="{{route('view.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <h5 class="card-title activator">Yeni Makale Ekle</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 col-sm-12 m6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">title</i>
                                    <input id="title" name="title" type="text">
                                    <label for="title">Makale Başlığı</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">local_offer</i>
                                    <select id="category" name="category_id">
                                        <option value="" disabled selected>Kategori Seçiniz</option>
                                        @foreach($PostCategory as $categoryItem)
                                            <option value="{{$categoryItem->id}}">{{$categoryItem->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">local_offer</i>
                                    <select id="tag" name="tags_id[]" multiple>
                                        <option value="" disabled selected>Etiket Seçiniz</option>
                                        @foreach($PostTag as $tagItem)
                                            <option name="tags_id" value="{{$tagItem->id}}">{{$tagItem->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 col-sm-12 m6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <i class="material-icons prefix">add_a_photo</i>

                                    <div class="btn white darken-1">
                                        <input name="image" type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"
                                               placeholder="Makale resmi seçiniz..">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">date_range</i>
                                    <input id="datetime" name="publish_date" type="text" placeholder="Lütfen tarih seçiniz"
                                           onfocus="this.type='datetime-local'">
                                </div>
                            </div>
                            <div class="row">
                                <div class="field-field input-field col s12 p-5">
                                    <div class="m-l-10 m-t-20">
                                        <label class="form-control">
                                            <input name="status" type="checkbox" checked="checked"/>
                                            <span>Aktif / Pasif</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="form-group">
                        <textarea name="ckeditor" id="ckeditor" cols="50" rows="15" class="ckeditor">
                        </textarea>
                    </div>
                </div>
                <div class="col s12 m-t-10">
                    <input class="btn btn-block blue" type="button" id="btnSave" name="btnSave" value="Kaydet">
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('assets/backEnd/libs/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backEnd/libs/ckeditor/samples/js/sample.js')}}"></script>

    <script>
        $(document).ready(function ()
        {
            $('#btnSave').click(function ()
            {
                $('#frmPost').submit();
            });
        });

{{--        @php--}}
{{--            if ($errors->any()){--}}
{{--                $swalText = '';--}}
{{--                    foreach ($errors->all() as $error){--}}
{{--                        $swalText+=$error.'<br>';--}}
{{--                    }--}}
{{--            }--}}

{{--        @endphp--}}

{{--        @if($errors->any())--}}
{{--            Swal.fire({--}}
{{--           icon:'error',--}}
{{--           title:'Hata',--}}
{{--           html:{!! $swalText !!}--}}
{{--        });--}}

{{--        @endif--}}


    </script>
@endsection
