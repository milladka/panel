<?php
require_once 'functions.php';
 // section work
AuthLogin();
$username = $_SESSION['username'];
$conn =connectToDB();

if( isPost() ){
	extract($_POST);
			$data = [
				"name" => $name ,
				"viewname" => $viewname
			];
			$conn = connectToDB();
					LangSave($data , $conn) ? $status = 'ثبت نام انجام نشد دوباره تلاش کنید' : $status = 'ثبت نام انجام نشد دوباره تلاش کنید';
}
Get_User_role($username,$conn);
require 'views/add_languages.view.php';
