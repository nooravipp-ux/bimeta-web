@extends('layouts.admin')
@section('title', 'Bimeta Karnusa - Testimoni ')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Testimoni</h4>
                    <a href="{{route('testimoni.create')}}" class="btn btn-primary">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Customer</th>
                                    <th>PIC</th>
                                    <th>Testimoni</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $dt)
                                <tr>
                                    <td>{{$dt->customer_name}}</td>
                                    <td>{{$dt->pic}}</td>
                                    <td>{{$dt->testimoni}}</td>
                                    <td>
                                        <a href="{{route('testimoni.delete', ['id' => $dt->id])}}" onclick="return confirm('apakah anda yakin ?');"><i class="icon-grid menu-icon ti-trash"></i></a>
                                        <a href="{{route('testimoni.edit', ['id' => $dt->id])}}"><i class="icon-grid menu-icon ti-pencil"></i></a>
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