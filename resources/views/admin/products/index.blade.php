@extends('layouts.admin')
@section('title', 'Bimeta Karnusa - Products ')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <a href="{{route('conf.product.category.create')}}" class="btn btn-primary">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nc = 1; ?>
                                @foreach($dataCategory as $dc)
                                <tr>
                                    <td><?php echo $nc++; ?></td>
                                    <td>{{ $dc->category_name}}</td>
                                    <td>
                                        <!-- <a href="" onclick="return confirm('apakah anda yakin ?')"><i class="icon-grid menu-icon ti-trash"></i></a> -->
                                        <a href="{{route('conf.product.category.edit',['id' => $dc->id])}}"><i class="icon-grid menu-icon ti-pencil"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>
                    <a href="{{route('conf.product.create')}}" class="btn btn-primary">Tambah</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Gambar
                                    </th>
                                    <th>
                                        Nama Product
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                    <th>
                                        Deskripsi
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataProduct as $dp)
                                <tr>
                                    <td>
                                        <img src="{{asset('front/img/products/'.$dp->product_img_1)}}" />
                                    </td>
                                    <td>{{$dp->product_name}}</td>
                                    <td>{{$dp->category_name}}</td>
                                    <td>{{$dp->description}}</td>
                                    <td>
                                        <a href="{{route('conf.product.delete',['id' => $dp->id])}}" onclick="return confirm('apakah anda yakin ?')"><i class="icon-grid menu-icon ti-trash"></i></a>
                                        <a href="{{route('conf.product.edit',['id' => $dp->id])}}"><i class="icon-grid menu-icon ti-pencil"></i></a>
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