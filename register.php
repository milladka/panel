<?php
require_once 'functions.php';
AuthLogout();
$status = null;

if( isPost() ){
	extract($_POST);
	if( validation_required([$username , $password , $name, $family, $email] )){
		if(validation_email($email)){

			$password = hash_hmac('sha256', $password ,'secert');

			$data = [
				"fullname" => $name . " " . $family ,
				"username" => $username,
				"password" => $password,
				"email" => $email
			];

			$conn = connectToDB();

			if (! userGet($username , $conn)){
				if(! MailGet($email , $conn)){
					userSave($data , $conn) ? redirect('login.php') : $status = 'ثبت نام انجام نشد دوباره تلاش کنید';
				} else {
					$status = "ایمیل قبلا ثبت شده است";
				}
			} else {
				$status = "نام کاربری قبلا ثبت شده است";
			}
		} else {
			$status = "فرمت ایمیل صحیح نیست";
		}
	}else{
		$status = "! نام کاربری و پسورد الزامی است";
	}
}
require 'views/register.view.php';