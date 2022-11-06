@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="global-area mtb">
        <div class="container-fluid">
            <div class="form">
                <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>website title</label>
                                <input class="form-control" type="text" name="website_title" placeholder="website title" value="{{ old('website_title', $data->website_title) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>twitter</label>
                                <input class="form-control" type="url" name="twitter" placeholder="twitter" value="{{ old('twitter', $data->twitter) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>facebook</label>
                                <input class="form-control" type="url" name="facebook" placeholder="facebook" value="{{ old('facebook', $data->facebook) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>instagram</label>
                                <input class="form-control" type="url" name="instagram" placeholder="instagram" value="{{ old('instagram', $data->instagram) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>snapchat</label>
                                <input class="form-control" type="url" name="snapchat" placeholder="snapchat" value="{{ old('snapchat', $data->snapchat) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" placeholder="whatsapp" value="{{ old('whatsapp', $data->whatsapp) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>mobile1</label>
                                <input class="form-control" type="text" name="mobile1" placeholder="mobile1" value="{{ old('mobile1', $data->mobile1) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>mobile2</label>
                                <input class="form-control" type="text" name="mobile2" placeholder="mobile2" value="{{ old('mobile2', $data->mobile2) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>mobile3</label>
                                <input class="form-control" type="text" name="mobile3" placeholder="mobile3" value="{{ old('mobile3', $data->mobile3) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>email1</label>
                                <input class="form-control" type="email" name="email1" placeholder="email1" value="{{ old('email1', $data->email1) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>email2</label>
                                <input class="form-control" type="email" name="email2" placeholder="email2" value="{{ old('email2', $data->email2) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>logo</label>
                                <img class="preview" src="{{ asset($data->logo) }}">
                                <input class="form-control" type="file" name="logo" accept=".png, .jpg, .jpeg, .svg" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>logo dark</label>
                                <img class="preview" src="{{ asset($data->logo_dark) }}">
                                <input class="form-control" type="file" name="logo_dark" accept=".png, .jpg, .jpeg, .svg" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-btn">
                                <button class="btn btn-primary hvr-sweep-to-top" type="submit">Save changes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
