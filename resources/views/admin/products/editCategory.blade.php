@extends('layouts.admin')
@section('title', 'Bimeta Karnusa - Products ')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Category</h4>
                    <form class="form-sample" method="post" action="{{route('conf.product.category.update')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Category</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="category_name" value="{{$dataCategory->category_name}}"/>
                                        <input type="hidden" class="form-control" name="id" value="{{$dataCategory->id}}"/>
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