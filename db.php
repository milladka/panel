<?php
function connectToDB() {
	try{
		return new PDO("mysql:host=localhost;dbname=panelsaina","root",'');
	} catch(PDOException $e) {
		die( $e->getMessage());
	}
}

function userGet($username , $conn){
	$statment = $conn->prepare("SELECT * FROM users WHERE username = :username ");
	$statment->bindParam("username" , $username );
	$statment->execute();

	$user = $statment->fetch(PDO::FETCH_OBJ);

	return $user ? $user : false;
}
function MailGet($email , $conn){
	$statment = $conn->prepare("SELECT * FROM users WHERE email = :email ");
	$statment->bindParam("email" , $email );
	$statment->execute();

	$usermail = $statment->fetch(PDO::FETCH_OBJ);

	return $usermail ? $usermail : false;
}

function userSave($data , $conn){
	extract($data);
	$statment = $conn->prepare("INSERT INTO users (fullname , username , email , password) VALUES ( :fullname , :username , :email , :password  ) ");
	$statment->bindParam("fullname" , $fullname);
	$statment->bindParam("username" , $username);
	$statment->bindParam("email" , $email);
	$statment->bindParam("password" , $password);

	return $statment->execute() ? true : false;
}

function userUpdate($data , $conn){
	extract($data);
	$statment = $conn->prepare("UPDATE users SET fullname= :fullname, email= :email, mobile= :mobile, phone= :phone, codemelli= :codemelli, state= :state, city= :city, postalcode= :postalcode, languages= :languages, address= :address WHERE username= :username");
	$statment->bindParam("username" , $username);
	$statment->bindParam("fullname" , $fullname);
	$statment->bindParam("email" , $email);
	$statment->bindParam("mobile" , $mobile);
	$statment->bindParam("phone" , $phone);
	$statment->bindParam("codemelli" , $codemelli);
	$statment->bindParam("state" , $state);
	$statment->bindParam("city" , $city);
	$statment->bindParam("postalcode" , $postalcode);
	$statment->bindParam("languages" , $languages);
	$statment->bindParam("address" , $address);

	return $statment->execute() ? true : false;
}


function GetNameUser($username , $conn){
	$stmt = $conn->prepare("SELECT fullname FROM users WHERE username = :username");
	$stmt->execute(["username" => $username]);
	if ($row = $stmt->fetch()) {
		echo $row['fullname'];
	} else {
		echo 'مهمان';
	}
}

function GetNameUser_role($username , $conn) {
	$stmt = $conn->prepare( "SELECT user_role FROM users WHERE username = :username" );
	$stmt->execute( [ "username" => $username ] );
	if ( $row = $stmt->fetch() ) {
		$day = $row['user_role'];
		switch ( $day ) {
			case 'admin':
				require 'views/index.admin.view.php';
				break;
			case 'user':
				require 'views/index.view.php';
				break;
		}
	}
}

function Get_User_role($username , $conn) {
	$stmt = $conn->prepare( "SELECT user_role FROM users WHERE username = :username" );
	$stmt->execute( [ "username" => $username ] );
	if ( $row = $stmt->fetch() ) {
		$day = $row['user_role'];
		switch ( $day ) {
			case 'user':
				redirect('index.php');
				break;
		}
	}
}
/**
 * @param $username
 * @param $conn
 */
function GetemptyUser($username , $conn){
	$stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
	$stmt->execute(["username" => $username]);
	if ($row = $stmt->fetch()) {
		if(empty($row['fullname']) || empty($row['codemelli']) || empty($row['phone']) || empty($row['mobile']) || empty($row['address']) ||
		   empty($row['city']) || empty($row['state']) || empty($row['postalcode']) || empty($row['languages'])) {
			echo '<div class="alert alert-success row" role="alert">
							<div class="col-lg-8 col-xs-12"><h6 class="alert-heading">خوش آمدید</h6>
							<p class="Headline-completion-account">کاربرگرامی، لطفا جهت بهره مندی از کلیه خدمات، اطلاعات کاربری خود را تکمیل نمایید.</p></div>
							<div class="col-lg-4 col-xs-12"><a class="btn btn-success btn-xs" href="complatedata.php">تکمیل و بروزرسانی اطلاعات کاربری</a>
							</div>
						</div>';
		}
	}
}

/**
 * @param $username
 * @param $conn
 */
function GetinfoUser($username , $conn , $obj){
	$stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
	$stmt->execute(["username" => $username]);
	if ($row = $stmt->fetch())
		echo $row[$obj];
}


function LangSave($data , $conn){
	extract($data);
	$statment = $conn->prepare("INSERT INTO languages (name , viewname) VALUES ( :name , :viewname) ");
	$statment->bindParam("name" , $name);
	$statment->bindParam("viewname" , $viewname);

	return $statment->execute()? true : false;
}

function viewlang($conn){
	$query = $conn->prepare("SELECT * FROM languages");
  $query->execute();

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td>" . $row['viewname'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo '<td><form action="deletelanguage.php" method="post">';
	echo '<input type="hidden" name="name" class="form-control" ';
  echo 'value="';
	echo $row['name'];
	echo '">';
	echo '<button type="submit" class="btn btn-danger btn-sm">حذف</button></form></td>';
	echo "</tr>";
}
}
