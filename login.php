<?php

session_start();

$con = mysqli_connect('localhost','root','ilovemessi10');

mysqli_select_db($con, 'covid-tracing');

$username = $_POST['username'];
$pass = $_POST['pass'];

$s = " SELECT * FROM userlogintable WHERE username = '$username'";

$ss = " SELECT * FROM userlogintable WHERE password = '$pass'";

$result = mysqli_query($con, $s);  
$resultTwo = mysqli_query($con, $ss);  


$num = mysqli_num_rows($result);
$numTwo = mysqli_num_rows($resultTwo);


if($num == 1 && $numTwo == 1){
    $_SESSION['username'] = $username;
    $res = mysqli_query( $db_con, $query );
    header("location: home.php");
} else {
    header("location: main.php");
}

?>