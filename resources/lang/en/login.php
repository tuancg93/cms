<?php
$x = include "common.php";
$i18n = [
    'required_username' => 'The username field is required.',
    'required_password' => 'The password field is required.',
    'action_btn' => 'Login',
    'username' => 'Username',
    'password' => 'Password',
    'wrong_login' => 'Oops, Somethings error please check again '


];
$i18n = array_merge($x,$i18n);
return $i18n;