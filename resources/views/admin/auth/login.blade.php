@extends('admin.layouts.app_login')

@section('content')

    <div class="login-content">
        <div class="nk-block toggled" id="l-login">
            <form method="POST" action="{{ route('login') }}" id="form_login">
                <div class="nk-form">
                    @csrf
                    @if ($errors->has('errorlogin'))
                        <span class="invalid-feedback " role="alert">
                                        <strong class="error">{{ $errors->first('errorlogin') }}</strong>
                         </span>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                        <div class="nk-int-st">
                            <input id="username" type="text"
                                   class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                   data-parsley-required-message="{{trans('login.required_username')}}"
                                   name="username" value="{{ old('username') }}" required autofocus placeholder="{{trans('login.username')}}">

                        </div>
                    </div>
                    <div class="input-group mg-t-15">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                        <div class="nk-int-st">
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password"
                                   data-parsley-required-message="{{trans('login.required_password')}}"
                                   required placeholder="{{trans('login.password')}}">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong class="error">{{ $errors->first('password') }}</strong>
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
                    <button type="submit" class="btn btn-warning"><span>{{trans('login.action_btn')}}</span></button>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" data-ma-action="nk-login-switch"
                           data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
