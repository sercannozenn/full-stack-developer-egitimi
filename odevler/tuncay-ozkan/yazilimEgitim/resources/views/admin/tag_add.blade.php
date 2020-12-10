@extends('layouts.admin')
@section('title')
    Etiket Ekle
@endsection
@section('css')
@endsection
@section('content')
<form action="/admin/etiket/add" method="post">
    @csrf
    <div class="col s12 l4">
        <div class="card x-small">
            <div class="card-content">
                <h5 class="card-title activator">Etiket
                </h5>
                <h6 class="card-subtitle">Etiket  Eklemek  İçin Enter  Tuşuna Basın </h6>
                <div class="chips"></div>
            </div>
          
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <button class="btn cyan waves-effect waves-light right btn-block PostCreate" type="submit">
                Kaydet
            </button>
        </div>
    </div>
</form>
@endsection
@section('js')

<script>

$(document).ready(function(){

const test=document.getElementsByClassName('chips');
$(test).keydown(function(){
    
   console.log(test);
})


});

</script>


@endsection