@extends('admin.layouts.app')
@section('header-icon')
    <i class="notika-icon notika-form"></i>
@endsection
@section('header-element')
    <div class="cmp-tb-hd bcs-hd">
        <h2>Chi tiết tài khoản</h2>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row edit-user">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="col-lg-8 col-xs-12">
                        <div class="col-lg-10 user-element">
                            <label class="col-lg-4 control-label">Họ tên</label>
                            <div class="col-lg-8">
                                {{$data->fullname}}
                            </div>
                        </div>
                        <div class="col-lg-10 user-element">
                            <label class="col-lg-4 control-label">Tên truy cập</label>
                            <div class="col-lg-8">
                                {{$data->username}}
                            </div>
                        </div>
                        <div class="col-lg-10 user-element">
                            <label class="col-lg-4 control-label">Email</label>
                            <div class="col-lg-8">
                                {{$data->email}}
                            </div>
                        </div>
                        <div class="col-lg-10 user-element">
                            <label class="col-lg-4 control-label">Số điện thoại</label>
                            <div class="col-lg-8">
                                {{$data->phone}}
                            </div>
                        </div>
                        <div class="col-lg-10 user-element">
                            <label class="col-lg-4 control-label">Địa chỉ</label>
                            <div class="col-lg-8">
                                {{$data->address}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- /Page Body -->
@endsection
