<?php

session_start();

include('config.php');

if(!$con){
    die('connection failed'. mysqli_connect_error());
}
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO signup(username,email,password) values('$name','$email','$password')";
$result = mysqli_query($con,$sql);

header("Location:login.php");




















?>