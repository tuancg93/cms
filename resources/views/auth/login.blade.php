@extends('layouts.app_login')

@section('content')
    <div class="login-content">
        <div class="nk-block toggled" id="l-login">
            <form method="POST" action="{{ route('login') }}">
                <div class="nk-form">
                    @csrf
                    <div class="input-group">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                        <div class="nk-int-st">
                            <input id="username" type="text"
                                   class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                   name="username" value="{{ old('username') }}" required autofocus placeholder="Tên đăng nhập">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="input-group mg-t-15">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                        <div class="nk-int-st">
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password"
                                   required placeholder="Mật khẩu">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="fm-checkbox">
                        <label><input type="checkbox" class="i-checks"
                                      id="remember" {{ old('remember') ? 'checked' : '' }}> <i></i> Keep me signed
                            in</label>
                    </div>
                </div>
                <div class="nk-navigation nk-lg-ic">
                    <button type="submit" class="btn btn-warning"><span>Đăng nhập</span></button>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" data-ma-action="nk-login-switch"
                           data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection