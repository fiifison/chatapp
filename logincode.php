<?php

session_start();

include('config.php');

if(!$con){
    die('Connection failed'.mysqli_connect_error());

}
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM signup WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($con, $sql);

if(!$row = mysqli_fetch_assoc($result)){
    echo "<script>";
    echo "alert('Incorrect username or password')";
    echo "window.location.href='login.php'";
    echo "</script>";
}
else{
    $_SESSION['username'] = $_POST['username'];

    header("Location:welcomeChat.php");
}



?>