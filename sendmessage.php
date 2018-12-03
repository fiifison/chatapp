<?php

session_start();

include('config.php');

if(!$con){
    die("connection failed".mysqli_connect_error());

}
$msg = $_POST['message'];

$name = $_SESSION['username'];

$sql = "INSERT INTO post(message,username) values('$msg','$name')";

$result = mysqli_query($con, $sql);

header('Location:welcomeChat.php');





?>