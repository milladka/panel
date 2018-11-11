<?php
require_once 'functions.php';
 // section work
AuthLogin();
$username = $_SESSION['username'];
$conn =connectToDB();

if( isPost() ){
	extract($_POST);
			$data = [
				"namecourse" => $namecourse ,
				"timecourse" => $timecourse ,
				"typecourse" => $typecourse ,
				"languagecourse" => $languagecourse ,
				"desccourse" => $desccourse ,
				"amountcourse" => $amountcourse
			];
			$conn = connectToDB();
	        CourseSave($data , $conn) ? $status = 'ثبت نام انجام نشد دوباره تلاش کنید' : $status = 'ثبت نام انجام نشد دوباره تلاش کنید';
}
Get_User_role($username,$conn);
require 'views/courses.view.php';
