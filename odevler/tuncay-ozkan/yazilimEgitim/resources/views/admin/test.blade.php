@extends('layouts.admin')
@section('css')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />


@endsection
@section('content')
    <select class="js-data-example-ajax"></select>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>
        $('.js-data-example-ajax').select2({

            ajax: {
                url: 'https://api.github.com/search/repositories',
                dataType: 'json'

            }
        });
    </script>




@endsection
