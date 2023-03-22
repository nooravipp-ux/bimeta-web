@extends('layouts.admin')
@section('title', 'Bimeta Karnusa - Clinets ')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Customer</h4>
                    <a href="{{route('customers.create')}}" class="btn btn-primary">Tambah Customer</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Gambar Logo</th>
                                    <th>Nama Perusahaan / Personal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $dt)
                                <tr>
                                    <td>
                                        <img src="{{asset('front/img/customers/'.$dt->logo)}}"/>
                                    </td>
                                    <td>{{$dt->name}}</td>
                                    <td>
                                        <a href="{{route('customers.delete', ['id' => $dt->id])}}" onclick="return confirm('apakah anda yakin ?');"><i class="icon-grid menu-icon ti-trash"></i></a>
                                        <a href="{{route('customers.edit', ['id' => $dt->id])}}"><i class="icon-grid menu-icon ti-pencil"></i></a>
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