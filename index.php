<?php
require_once 'functions.php';

 // section work

AuthLogin();
$username = $_SESSION['username'];
$conn =connectToDB();
GetNameUser_role($username,$conn);
