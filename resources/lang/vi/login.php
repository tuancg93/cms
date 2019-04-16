<?php
$x = include "common.php";
$i18n = [
    'required_username' => 'Tên đăng nhập không được để trống',
    'required_password' => 'Mật khẩu không được để trống',
    'action_btn' => 'Đăng nhập',
    'username' => 'Tên đăng nhập',
    'password' => 'Mật khẩu',
    'login_wrong' => 'Tài khoản hoặc mật khẩu không đúng'


];
$i18n = array_merge($x,$i18n);
return $i18n;