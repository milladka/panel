<?php
require_once 'functions.php';
// section work
AuthLogin();
$username = $_SESSION['username'];
$status = null;
$typestatus = 'danger';

if( isPost() ){
	extract($_POST);
			$data = [
				"fullname" => $fullname,
				"email" => $email,
				"mobile" => $mobile,
				"phone" => $phone,
				"codemelli" => $codemelli,
				"state" => $state,
				"city" => $city,
				"postalcode"=> $postalcode,
				"languages"=>$languages,
				"address"=>$address,
				"username" => $username
			];
			$conn = connectToDB();
	userUpdate( $data, $conn ) ? $status = 'بروزرسانی اطلاعات انجام شد   <a href="index.php">برگشت به صفحه اصلی</a>' : $status = 'انجام نشد دوباره تلاش کنید';
	userUpdate( $data, $conn ) ? $typestatus = 'success' : $status = 'انجام نشد دوباره تلاش کنید';
}

require 'views/complatedate.view.php';