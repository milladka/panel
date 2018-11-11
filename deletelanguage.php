<?php
require_once 'functions.php';
AuthLogin();
$conn =connectToDB();
$event_id = $_POST['name'];
$result = $conn->prepare("DELETE FROM languages WHERE name= :name");
$result->bindParam(':name', $event_id);
$result->execute();
header("location: languages.php");
