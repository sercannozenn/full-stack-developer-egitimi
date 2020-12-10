@extends('layouts.admin')
@section('title')
    Etiket Listesi
@endsection
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Etiket Listesi</h5>
                <a href="{{route('admin.tag.add')}}" class="btn-floating waves-effect waves-light teal" title="Yeni Tag Ekle">
                        <i class="material-icons">add</i>
                    </a>
                    <p>Add <code>class="responsive-table"</code> to the table tag to make the table horizontally scrollable on smaller screen widths.</p>
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Etiket Adı</th>
                            <th>Aktif/Pasif</th>
                            <th>Kullanıcı Adı</th>
                            <th>Oluşturma Tarihi</th>
                            <th>Güncelleme Tarihi</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
