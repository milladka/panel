<?php
require_once 'db.php';
// functions
session_start();
//for post as form login
function isPost(){
	return $_SERVER["REQUEST_METHOD"] == "POST";
}
 //for redirect to url
function redirect($Location){
	header("Location: {$Location}");
	die;
}
// check item return true or false
function validation_required($items){
	$counter_error = 0;
	foreach ( $items as $item){
		if(empty($item))
			$counter_error++;
	}
	return $counter_error == 0;
}
// check dastrasi user if not logined
function AuthLogin($Location = 'login.php'){
	if(! isset($_SESSION['username'])) {
		$username = $_COOKIE['username'];
		$password = $_COOKIE['password'];
		if ( isset( $username ) && isset( $password ) ) {
			$conn = connectToDB();
			$user = userGet($username , $conn);
			if ($user){
				if ( $password == $user->password ) {
					$_SESSION['username'] = $username;
					redirect( "index.php" );
				}
			}
		}
		redirect( $Location );
	}
}

// check dastrasi user if logined
function AuthLogout($Location = 'index.php'){
	if( isset($_SESSION['username']))
		redirect($Location);
}

//check and show old value in form
function old($key){
	if(! empty($_REQUEST[$key]))
		return htmlspecialchars($_REQUEST[$key]);
	return '';
}

function validation_email($email){
	return filter_var($email , FILTER_VALIDATE_EMAIL);
}

function title_page($name){
	echo "$name";
}

function time_elapsed_string($datetime, $full = false) {
	$now = new DateTime;
	$ago = new DateTime($datetime);
	$diff = $now->diff($ago);

	$diff->w = floor($diff->d / 7);
	$diff->d -= $diff->w * 7;

	$string = array(
		'y' => 'سال',
		'm' => 'ماه',
		'w' => 'هفته',
		'd' => 'روز',
		'h' => 'ساعت',
		'i' => 'دقیقه',
		's' => 'ثانیه',
	);
	foreach ($string as $k => &$v) {
		if ($diff->$k) {
			$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
		} else {
			unset($string[$k]);
		}
	}

	if (!$full) $string = array_slice($string, 0, 1);
	return $string ? implode(', ', $string) . ' پیش' : 'همین الان';
}