@extends('admin.layouts.app')
@section('title')
    Cập nhật tài khoản
@endsection

@section('header-icon')
    <i class="notika-icon notika-form"></i>
@endsection
@section('header-element')
    <div class="cmp-tb-hd bcs-hd">
        <h2>Cập nhật tài khoản</h2>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row edit-user">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="col-lg-2 col-xs-0"></div>
                    <div class="col-lg-12 col-xs-12">
                        @if ($errors->any())
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8 div-danger">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-8 col-xs-12">
                        <form id="user-edit-form" method="post" class="form-horizontal" data-parsley-validate
                              action="{{route("user.editAction",["id"=>$data->id])}}"
                              data-bv-message="This value is not valid"
                              data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                              data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                              data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                            {{ csrf_field() }}


                            <div class="col-lg-10 user-element">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text"
                                               class="form-control <?php echo ($errors->has('fullname') == true) ? "parsley-error" : ""?>"
                                               required data-parsley-fullname
                                               name="fullname"
                                               data-parsley-required-message="Họ tên không được phép rỗng"
                                               data-parsley-maxlength="255"
                                               data-parsley-minlength="6"
                                               data-parsley-maxlength-message="Tiêu đề tối đa 255 kí tự"
                                               data-parsley-minlength-message="Tiêu đề thiểu 6 kí tự"
                                               id="User_fullname" placeholder="Nhập họ tên"
                                               value="{{(old('fullname')!='') ? old('fullname') : $data->fullname }}"

                                        />
                                    </div>
                                </div>
                                @if(($errors->has('full_name') ==true))
                                    <ul class="parsley-errors-list filled unique-fullname">
                                        <li class="parsley-fullname">{{ $errors->first('full_name') }}</li>
                                    </ul>
                                @endif
                            </div>


                            <div class="col-lg-10 user-element">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text"
                                               class="form-control <?php echo ($errors->has('username') == true) ? "parsley-error" : ""?>"
                                               required data-parsley-username
                                               name="username"
                                               data-parsley-required-message="Tên truy cập không được phép rỗng"
                                               data-parsley-maxlength="255"
                                               data-parsley-minlength="3"
                                               data-parsley-maxlength-message="Tên truy cập đa 255 kí tự"
                                               data-parsley-minlength-message="Tên truy cập tối thiểu 3 kí tự"
                                               id="User_username" placeholder="Nhập tên truy cập"
                                               value="{{ (old('username')!='') ? old('username') : $data->username }}"

                                        />
                                    </div>
                                </div>
                                <input type="hidden" value="{{$data->username}}" name="username_old">
                                @if(($errors->has('username') ==true))
                                    <ul class="parsley-errors-list filled unique-username">
                                        <li class="parsley-username">{{ $errors->first('username') }}</li>
                                    </ul>
                                @endif
                            </div>

                            <div class="col-lg-10 user-element">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text"
                                               class="form-control <?php echo ($errors->has('email') == true) ? "parsley-error" : ""?>"
                                               required data-parsley-email
                                               name="email"
                                               data-parsley-required-message="Email không được phép rỗng"
                                               id="User_email" placeholder="Nhập email"
                                               value="{{ (old('email')!='') ? old('email') : $data->email }}"
                                        />
                                    </div>
                                </div>

                                <input type="hidden" value="{{$data->email}}" name="email_old">
                                @if(($errors->has('email') ==true))
                                    <ul class="parsley-errors-list filled unique-email">
                                        <li class="parsley-email">{{ $errors->first('email') }}</li>
                                    </ul>
                                @endif
                            </div>

                            <div class="col-lg-10 user-element">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text"
                                               class="form-control <?php echo ($errors->has('phone') == true) ? "parsley-error" : ""?>"
                                               required data-parsley-phone
                                               name="phone"
                                               data-parsley-required-message="Số điện thoại không được phép rỗng"
                                               id="User_phone" placeholder="Nhập số điện thoại"
                                               value="{{ (old('phone')!='') ? old('phone') : $data->phone }}"
                                        />
                                    </div>
                                </div>
                                <input type="hidden" value="{{$data->phone}}" name="phone_old">
                                @if(($errors->has('phone') == true))
                                    <ul class="parsley-errors-list filled unique-phone">
                                        <li class="parsley-phone">{{ $errors->first('phone') }}</li>
                                    </ul>
                                @endif
                            </div>

                            <div class="col-lg-5 user-element">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="fa fa-key"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control"
                                               name="address"
                                               id="User_address" placeholder="Nhập địa chỉ"
                                               value="{{ (old('address')!='') ? old('address') :$data->address }}"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 user-element-submit">
                                <button class="btn btn-success submit-notifications" type="submit">
                                    Lưu
                                </button>
                                <button class="btn btn-warning btn-reset" type="button">
                                    Nhập lại
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- /Page Body -->
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('public/template/assets/js/parsleyjs/parsley.min.js')}}"></script>
    <script>


        // Valiadate email
        window.Parsley.addValidator('email', {
            requirementType: 'string',
            validateString: function (value, requirement) {
                var regex = /^([a-z0-9_\.-]+\@[\da-z\.-]+\.[a-z\.]{2,6})$/gm;
                return regex.test(value);
            },
            messages: {
                en: 'Email không đúng định dạng'
            }
        });

        //validate phone 10,11 character
        window.Parsley.addValidator('phone', {
            requirementType: 'number',
            validateString: function (value, requirement) {
                var regex = /^[0-9]{10,11}$/
                return regex.test(value);
            },
            messages: {
                en: 'Số điện thoại phải là số từ 10 đến 11 chữ số'
            }
        });

        //Reset button
        $('.btn-reset').click(function () {
            // $(':input', '#user-edit-form')
            //     .not(':button, :submit, :reset, :hidden')
            //     .val('')
            //     .prop('checked', false)
            //     .prop('selected', false);
            //
            // $("#parent_id").select2("val", "");
            $("#user-edit-form")[0].reset();

        });
    </script>
@endsection