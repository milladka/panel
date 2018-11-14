<?php
require_once 'functions.php';
// section work
AuthLogin();
$username = $_SESSION['username'];
$status = null;
$typestatus = 'danger';




//
//
//$images=$_FILES['profile']['name'];
//$tmp_dir=$_FILES['profile']['tmp_name'];
//$imageSize=$_FILES['profile']['size'];
//
//$upload_dir='img/uploads/';
//$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
//$valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
//$picProfile=rand(1000, 1000000).".".$imgExt;
//move_uploaded_file($tmp_dir, $upload_dir.$picProfile);


require 'views/register_teacher.view.php';