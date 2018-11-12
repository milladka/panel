<?php
require_once 'functions.php';
// section work
AuthLogin();
$username = $_SESSION['username'];
$conn =connectToDB();





Get_User_role($username,$conn);
require 'views/transactions.view.php';
