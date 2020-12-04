@extends('layouts.front')

@section('title')
    Post Listesi
@endsection


@section('css')
@endsection

@section('content')
    <ul id="nav-info" class="clearfix">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Post İşlemleri</a></li>
        <li><a href="javascript:void(0)">Post Listesi</a></li>
    </ul>
    <h3 class="page-header page-header-top"><i class="fa fa-list-alt animation-hatch"></i> Post Listesi</h3>


    <table id="example-datatables" class="table table-striped table-bordered table-hover animation-slideDown">
        <thead>
        <tr>
            <th class="cell-small"></th>
            <th class="cell-small text-center hidden-xs hidden-sm">ID</th>
            <th><i class="fa fa-list-alt"></i> Başlık</th>
            <th class="hidden-xs hidden-sm hidden-md text-center"><i class="fa fa-clock-o"></i> Oluşturulma Tarihi</th>
            <th><i class="fa fa-bookmark text-center"></i> Aktiflik</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($veriler as $row){?>
        <tr>
            <td class="text-center col-xs-2 col-sm-1">
                <div class="btn-group">
                    <a href="{{url('/admin/getallpost/update/'.$row->id)}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('/admin/getallpost/delete/'.$row->id)}}" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                </div>
            </td>
            <td class="text-center hidden-xs hidden-sm col-xs-1">{{$row->id}}</td>
            <td class="col-xs-5">{{$row->title}}</td>
            <td class="hidden-xs hidden-sm hidden-md col-xs-2 text-center">{{$row->created_at}}</td>
            <?php
            if($row->status == 0){ ?>
                <td class="text-center col-xs-1 text-center" style="background-color: #FF4444"><span class="fa fa-times gi-white"></span></td>
            <?php } else{ ?>
            <td class="text-center col-xs-1 text-center" style="background-color: #44FF44"><span class="fa fa-check gi-white"></span></td>
        <?php }?>
        </tr>

        <?php } ?>

        </tbody>
    </table>
@endsection


@section('js')
    <script>
        $(function () {
            /* Initialize Datatables */
            $('#example-datatables').dataTable({columnDefs: [{orderable: false, targets: [0]}]});
            $('#example-datatables2').dataTable();
            $('#example-datatables3').dataTable();
            $('.dataTables_filter input').attr('placeholder', 'Ara');
        });
    </script>
@endsection

