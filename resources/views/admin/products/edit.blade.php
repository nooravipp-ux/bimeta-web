@extends('layouts.admin')
@section('title', 'Bimeta Karnusa - Products ')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Product</h4>
                    <form class="form-sample" method="post" action="{{route('conf.product.update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Product</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="product_name" value="{{$dataProduct->product_name}}" />
                                        <input type="hidden" class="form-control" name="id" value="{{$dataProduct->id}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select type="text" class="form-control" name="category_id">
                                            @foreach($dataCategory as $dc)
                                            <option value="{{$dc->id}}" <?php echo ($dataProduct->category_id == $dc->id) ? "selected" : ""; ?>>{{$dc->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Spesifikasi</label>
                                    <div class="col-sm-9">
                                        <textarea type="file" class="form-control" name="description" height="400">{{$dataProduct->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar Product 1</label>
                                    <div class="col-sm-9">
                                        @if($dataProduct->product_img_1)
                                        <img src="{{asset('front/img/products/'.$dataProduct->product_img_1)}}" alt="Product Img" width="200" height="200" />
                                        <a href="#" id="img_1" data-id="{{$dataProduct->id}}" data-toggle="modal" data-target="#modal1"><i class="icon-grid menu-icon ti-pencil"></i>update Gambar</a>
                                        @else
                                        <p class="pt-3">No image </p>
                                        @endif
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar Product 2</label>
                                    <div class="col-sm-9">
                                        @if($dataProduct->product_img_2)
                                        <img src="{{asset('front/img/products/'.$dataProduct->product_img_2)}}" alt="Product Img" width="200" height="200" />
                                        <a href="#" id="img_2" data-toggle="modal" data-id="{{$dataProduct->id}}" data-target="#modal2"><i class="icon-grid menu-icon ti-pencil"></i>update Gambar</a>
                                        @else
                                        <a href="#" id="img_2" data-toggle="modal" data-id="{{$dataProduct->id}}" data-target="#modal2"><i class="icon-grid menu-icon ti-pencil"></i>update Gambar</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar Product 3</label>
                                    <div class="col-sm-9">
                                        @if($dataProduct->product_img_2)
                                        <img src="{{asset('front/img/products/'.$dataProduct->product_img_3)}}" alt="Product Img" width="200" height="200" />
                                        <a href="#" id="img_3" data-toggle="modal" data-id="{{$dataProduct->id}}" data-target="#modal3"><i class="icon-grid menu-icon ti-pencil"></i>update Gambar</a>
                                        @else
                                        <a href="#" id="img_3" data-toggle="modal" data-id="{{$dataProduct->id}}" data-target="#modal3"><i class="icon-grid menu-icon ti-pencil"></i>update Gambar</a>
                                        @endif
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
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Gambar Produk 1</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="{{route('conf.product.image.update')}}">
                                @csrf
                                <div class="modal-body" id="modal_img_1">
                                    <input type="file" class="form-control" name="product_img_1" />
                                    <input type="hidden" class="form-control" id="f_img_1" name="id" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Gambar Produk 2</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="{{route('conf.product.image.update')}}">
                                @csrf
                                <div class="modal-body">
                                    <input type="file" class="form-control" name="product_img_2" />
                                    <input type="text" class="form-control" id="f_img_2" name="id" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Gambar Produk 3</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="{{route('conf.product.image.update')}}">
                                @csrf
                                <div class="modal-body">
                                    <input type="file" class="form-control" name="product_img_3" />
                                    <input type="text" class="form-control" id="f_img_3" name="id" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('#img_1').click(function() {
        var pid = $(this).data('id');
        $('#f_img_1').val(pid);
    });

    $('#img_2').click(function() {
        var pid = $(this).data('id');
        $('#f_img_2').val(pid);
    });

    $('#img_3').click(function() {
        var pid = $(this).data('id');
        $('#f_img_3').val(pid);
    })
</script>
@endsection