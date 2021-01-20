@extends('layouts.front')

@section('css')

@endsection

@section('title')
    Yeni Makale Ekle
@endsection

@section('content')
    <h3>Yeni Makale Ekle</h3>
    <form action="" method="POST"  enctype="multipart/form-data">
        @csrf
        <input class="form-control" type="text" name="article_title" placeholder="Makale Başlığı">
        <hr>
        <h4 for="a_image">Makale Resmi <small>Maksimum boyut 5MB</small></h4><input type="file" id="a_image" name="article_image" accept="image/*">
        <hr>
        <h4>Yayınlanma Zamanı</h4>
        <br>
{{--        <hr style="margin-top:0">--}}
        <input id="now" name="publish_now" type="checkbox"><label for="publish_now"> &nbsp; Şimdi Yayınla</label>
        <br>
        <br>
        <label for="date">Yayınlanma Tarihi &nbsp; </label><input id="date" type="datetime-local" name="publish_time">
        <hr>
        <textarea class="ckeditor" name="article_content" id="ckedit" cols="30" rows="10"></textarea>
        <hr>
        <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Kaydet</button>
    </form>
@endsection

@section('js')
    <script src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>
    <script>

        var publishNow = document.getElementById('now');
        var date = document.getElementById('date');

        publishNow.onchange = function () {
            if (publishNow.checked) {
                date.disabled = true;
            } else {
                date.disabled = false;
            }
        }
        var d = new Date();
        const ye = new Intl.DateTimeFormat('tr', { year: 'numeric' }).format(d);
        const mo = new Intl.DateTimeFormat('tr', { month: 'numeric' }).format(d);
        const da = new Intl.DateTimeFormat('tr', { day: '2-digit' }).format(d);
        var today = `${ye}-${mo}-${da}`;
        today+= "T"+d.toString().substring(16,21);
        document.getElementById("date").min = today;

    </script>
@endsection