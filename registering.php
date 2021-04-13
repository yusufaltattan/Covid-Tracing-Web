<?php

session_start();
header('location:main.php');

$con = mysqli_connect('localhost','root','ilovemessi10');

mysqli_select_db($con, 'covid-tracing');

$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$pass = $_POST['pass'];

$s = " SELECT * from 'userlogintable' where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
}else{
    $reg = " insert into userlogintable(name , surname , username , password) values ('$name' , '$surname' , '$username' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>