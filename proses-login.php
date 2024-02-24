<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'fulan@gmail.com') {
  die("Email tidak terdaftar!");
}

if ($password !== 'kerjadarirumah') {
  die("Password salah!");
}
