<?php

require_once 'functions.php';

session_destroy();

if ( isset( $_COOKIE['username'] ) && isset( $_COOKIE['password'] ) ) {
	setcookie("username",'',time() - 60 * 60 * 24 * 7);
	setcookie("password",'',time() - 60 * 60 * 24 * 7);
}

redirect('login.php');
