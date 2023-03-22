@extends('layouts.admin')
@section('title', 'Bimeta Karnusa - Products ')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Product</h4>
                    <form class="form-sample" method="post" action="{{route('conf.product.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Product</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="product_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select type="text" class="form-control" name="category_id">
                                            <option value=""> - </option>
                                            @foreach($dataCategory as $dc)
                                            <option value="{{$dc->id}}"> {{$dc->category_name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Spesifikasi</label>
                                    <div class="col-sm-9">
                                        <textarea type="file" class="form-control" name="description" height="400"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar Product 1</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="product_img_1"/>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar Product 2</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="product_img_2"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar Product 3</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="product_img_3"/>
                                    </div>
                                </div> -->
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