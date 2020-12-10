@extends('layouts.admin')
@section('title')
    {{ auth()->user()->name }} Profil
@endsection
@section('css')
@endsection
@section('content')
    <div class="col s12 l6">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title activator">Kullanıcı Bilgilerini Güncelle
                    <i class="material-icons right tooltipped" data-position="left" data-delay="50"
                       data-tooltip="Get Code">more_vert</i>
                </h5>
                <form autocomplete="off" action="" method="POST" id="user-update-form">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" type="text" autocomplete="off" name="name" value="{{$user->name}}">
                            <label for="name">İsim</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" name="email" autocomplete="off" value="{{$user->email}}">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password" type="password" name="password" autocomplete="off">
                            <label for="password" class="">Parola</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button id="user-update" class="btn cyan waves-effect waves-light right" type="button">
                                <i class="fas fa-save"></i>
                                Değişiklikleri Kaydet
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#user-update').click(function ()
        {
            var username = $('#name').val();
            var email = $('#email').val();

            if (username.trim() == "")
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Uyarı',
                    text: 'Kullanıcı adı boş bırakılamaz!',
                    confirmButtonText: 'Tamam'
                })
            }
            else if (email.trim() == "")
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Uyarı',
                    text: 'Email boş bırakılamaz!',
                    confirmButtonText: 'Tamam'
                })
            }
            else if (!validateEmail(email))
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Uyarı',
                    text: 'Geçerli bir email adresi giriniz!',
                    confirmButtonText: 'Tamam'

                })
            }
            else
            {
                $('#user-update-form').submit();
            }
        })

        function validateEmail(email)
        {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    </script>
@endsection
