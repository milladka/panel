<?php
require_once 'functions.php';
AuthLogin();
$conn =connectToDB();
$event_id = $_POST['id'];
$result = $conn->prepare("DELETE FROM users WHERE id= :id");
$result->bindParam(':id', $event_id);
$result->execute();
echo "<SCRIPT type='text/javascript'> //not showing me this
        alert(';کاربر با موفقیت حذف شد');  
        window.location.replace(\"http:users.php\");
    </SCRIPT>";

