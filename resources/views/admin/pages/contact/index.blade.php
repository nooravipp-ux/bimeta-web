@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pengaturan Halaman Hubungi Kami</h4>
                    <form class="form-sample">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Meta Tag :</h6>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Meta title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$data->meta_title}}" name="meta_title" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Meta Description</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" name="meta_description">{{$data->meta_description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Meta Keyword</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" name="meta_meta_keyword">{{$data->meta_keyword}}</textarea>
                                    </div>
                                </div>

                                <h6>Image Banner :</h6>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image Banner 1</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" value="{{$data->img_banner_1}}" name="img_banner_1"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image Banner 1 Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$data->img_banner_1_title}}" name="img_banner_1_title"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image Banner 1 Desc</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$data->img_banner_1_desc}}" name="img_banner_1_desc"/>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image Banner 2</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image Banner 2 Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image Banner 3</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image Banner 3 Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div> -->

                            </div>
                            <div class="col-md-6">
                                <h6>Sales & Marketing Staff :</h6>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name Staff 1</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$data->marketing_1_name}}" name="marketing_1_name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Staff Image 1</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact No. 1</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$data->marketing_1_contact_no}}" name="marketing_1_contact_no" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name Staff 2</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$data->marketing_2_name}}" name="marketing_2_name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Staff Image 2</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact No. 2</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$data->marketing_2_contact_no}}" name="marketing_2_contact_no" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        
                                    </div>
                                    <div class="col-sm-3 text-right">
                                        <button type="submit" class="btn btn-primary ">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection