<!doctype html>
<html lang="TR-tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ahmet TUNÇ - Laravel01</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <style>
        .card{
            transition: .5s;
            border: 1px solid #88F;
        }
        .card:hover{
            box-shadow: -3px 3px 10px #777;
            transform: scale(1.02);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="{{route('admin.index')}}">Admin Panel</a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggle-icon"></span>
    </button>
</nav>

<div class="container" style="min-height: 700px">
    <div class="col-md-12 text-center bg-success">
        <h1 style="font-weight: bold">Basit Site Tasarımı</h1>
    </div>
    <div class="col-md-12">
        <div class="row">
    <?php
    foreach ($data as $item){
        if ($item->status == 1){
        ?>

        <div class="col-md-4" style="margin-top: 15px;">
            <div class="card col-md-12 table-bordered img-rounded bg-success" style="padding: unset">
                <div class="col-md-12" style="padding: unset; margin:unset">
                <img class="col-md-12 img-rounded" src="{{$item->picture}}" style="padding: unset" alt="Card image cap">

                </div>
                <div class="col-md-12 text-center" style="padding: unset; margin:unset">
                    <h5 class="card-title" style="font-weight: bold">{{$item->title}}</h5>
                    <p>{{$item->created_at}}</p>
                </div>
            </div>
        </div>

   <?php } }?>
        </div>
    </div>
</div>

<footer>
    <div class="col-md-12 bg-success text-center" style="font-weight: bold; padding: 5px" >
        &copy;2020. Tüm hakları gizli ve saklıdır.
    </div>
</footer>

<script src="{{asset('assets/js/vendor/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

</body>
</html>
