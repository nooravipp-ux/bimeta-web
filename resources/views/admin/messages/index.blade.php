@extends('layouts.admin')
@section('title', 'Bimeta Karnusa - Messages ')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Messages</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Pengirim</th>
                                    <th>Email</th>
                                    <th>No. Telepon</th>
                                    <th>Pesan</th>
                                    <th>Tanggal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $dt)
                                <tr>
                                    <td>{{$dt->nama}}</td>
                                    <td>{{$dt->email}}</td>
                                    <td>{{$dt->no_telp}}</td>
                                    <td>{{$dt->pesan}}</td>
                                    <td>{{$dt->created_time}}</td>
                                    <td>
                                        <a href="{{route('message.delete', ['id' => $dt->id])}}" onclick="return confirm('apakah anda yakin ?')"><i class="icon-grid menu-icon ti-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection