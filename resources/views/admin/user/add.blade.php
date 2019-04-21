@extends('admin.layouts.app')
@section('title')
    Tạo mới tài khoản
@endsection
@section('header-icon')
    <i class="notika-icon notika-form"></i>
@endsection
@section('header-element')
    <div class="cmp-tb-hd bcs-hd">
        <h2>Tạo mới tài khoản</h2>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row add-user">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="col-lg-2 col-xs-0"></div>
                    <div class="col-lg-12 col-xs-12">
                        @if($errors->any())
                            <div class="col-lg-10 div-danger">
                                <div class="alert alert-danger">
                                    <ul>
                                        <h4 style="font-weight: 500;">Xin hãy sửa lại các lỗi sau</h4>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-8 col-xs-12">
                        <form id="user-add-form" method="post" class="form-horizontal" data-parsley-validate
                              action="{{route("user.addAction")}}"
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
                                               value="{{ old('fullname') }}"

                                        />
                                    </div>
                                </div>
                                @if(($errors->has('full_name') ==true))
                                    <ul class="parsley-errors-list filled unique-fullname">
                                        <li class="parsley-fullname">{{ $errors->first('fullname') }}</li>
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
                                               value="{{ old('username') }}"
                                        />
                                    </div>
                                </div>
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
                                               data-parsley-maxlength="50"
                                               name="email"
                                               data-parsley-required-message="Email không được phép rỗng"
                                               data-parsley-maxlength-message="Email tối đa 50 kí tự"
                                               id="User_email" placeholder="Nhập email" value="{{ old('email') }}"
                                        />
                                    </div>
                                </div>
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
                                               value="{{ old('phone') }}"
                                        />
                                    </div>
                                </div>
                                @if(($errors->has('phone') ==true))
                                    <ul class="parsley-errors-list filled unique-phone">
                                        <li class="parsley-phone">{{ $errors->first('phone') }}</li>
                                    </ul>
                                @endif
                            </div>
                            <div class="col-lg-10 user-element">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="fa fa-key"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="password" class="form-control" required data-parsley-password
                                               name="password"
                                               data-parsley-minlength="6"
                                               data-parsley-minlength-message="Mật khẩu tối thiểu 6 kí tự"
                                               data-parsley-required-message="Mật khẩu không được phép rỗng"
                                               id="User_password" placeholder="Nhập mật khẩu"
                                               value="{{ old('password') }}"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10 user-element">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="fa fa-key"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="password" class="form-control" required data-parsley-repassword
                                               name="re_password"
                                               data-parsley-equalto="#User_password"
                                               data-parsley-equalto-message="Nhập lại mật khẩu không chính xác"
                                               data-parsley-required-message="Yêu cầu nhập lại password"
                                               id="User_re_password" placeholder="Nhập lại mật khẩu"
                                               value="{{ old('re_password') }}"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 user-element">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control"
                                               name="address"
                                               id="User_address" placeholder="Nhập địa chỉ" value="{{ old('address') }}"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10 user-element-submit">
                                <div class="col-sm-6">
                                    <button class="btn btn-success notika-btn-success waves-effect" type="submit">
                                        Tạo mới
                                    </button>
                                    <button class="btn btn-warning notika-btn-warning btn-reset waves-effect" type="button">
                                        Nhập lại
                                    </button>
                                </div>
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
    <script type="text/javascript" src="{{url('/public/admin')}}/parsley/parsley.min.js"></script>
    <script type="text/javascript">

        //validate email
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
            $(':input', '#user-add-form')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .prop('checked', false)
                .prop('selected', false);

            $("#parent_id").select2("val", "");

        });
        $(document).ready(function () {
            $(".nk-int-st").each(function () {
                $(this).click(function () {
                    if ($(this).find('.parsley-errors-list').length !== 0) {
                        $(this).addClass('without-after-element');
                    }
                });
            });
        });

    </script>
@endsection