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


    <table id="example-datatables" class="table table-striped table-bordered table-hover animation-fadeIn">
        <thead>
        <tr>
            <th class="cell-small"></th>
            <th class="cell-small text-center hidden-xs hidden-sm">No</th>
            <th><i class="fa fa-list-alt"></i> Başlık</th>
            <th class="hidden-xs hidden-sm hidden-md"><i class="fa fa-pencil"></i> İçerik</th>
            <th><i class="fa fa-bookmark"></i> Kategori</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="text-center">
                <div class="btn-group">
                    <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                </div>
            </td>
            <td class="text-center hidden-xs hidden-sm">1</td>
            <td><a href="javascript:void(0)">username1</a></td>
            <td class="hidden-xs hidden-sm hidden-md">user1@example.com</td>
            <td><span class="label label-warning">Pending..</span></td>
        </tr>
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

