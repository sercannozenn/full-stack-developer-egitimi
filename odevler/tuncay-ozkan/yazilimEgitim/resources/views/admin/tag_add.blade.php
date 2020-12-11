@extends('layouts.admin')
@section('title')
    Etiket Ekle
@endsection
@section('css')
@endsection
@section('content')
    <form>
        @csrf
        <div class="col s12 l4">
            <div class="card x-small">
                <div class="card-content">
                    <h5 class="card-title activator">Etiket
                    </h5>
                    <h6 class="card-subtitle">Etiket Eklemek İçin Enter Tuşuna Basın </h6>
                    <div class="chips" id="post"></div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <button id="btn-tag" class="btn-tag cyan waves-effect waves-light right btn-block PostCreate"
                        type="button">
                    Kaydet
                </button>
            </div>
        </div>
    </form>
@endsection
@section('js')

    <script>

        $(document).ready(function () {


            $('#btn-tag').click(function () {
                  const post = $('#post').text();
                $.ajax(
                    {
                        url: '{{route('admin.tag.store')}}',
                        method: 'POST',
                        data: {
                            '_token': '{{ csrf_token() }}',
                            data: post
                        },
                        async: false,
                        success: function (response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Uyarı',
                                text: "Kayıt İşlemi  Başarılı",
                                confirmButtonText: 'Tamam'

                            })
                        },
                        error:function () {
                            Swal.fire({
                                icon: 'danger',
                                title: 'Uyarı',
                                text: "Kayıt İşlemi  Başarısız",
                                confirmButtonText: 'Tamam'

                            })
                        }
                    },
                )
            })

        });

    </script>


@endsection
