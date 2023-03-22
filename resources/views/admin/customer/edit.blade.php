@extends('layouts.admin')
@section('title', 'Bimeta Karnusa - Clinets ')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Customer</h4>
                    <form class="form-sample" method="post" action="{{route('customers.update')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Customer</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" value="{{$data->name}}"/>
                                        <input type="hidden" class="form-control" name="id" value="{{$data->id}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Logo Img</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="logo"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection