<?php

session_start();

$con = mysqli_connect('localhost','root','ilovemessi10');

mysqli_select_db($con, 'covid-tracing');

$date = $_POST['date'];
$time = $_POST['time'];
$duration = $_POST['duration'];
$map = $_POST['map'];

$s = " SELECT * FROM visittable WHERE date = '$date'";
$ss = " SELECT * FROM visittable WHERE time = '$time'";
$sss = " SELECT * FROM visittable WHERE duration = '$duration'";
$ssss = " SELECT * FROM visittable WHERE password = '$pass'";

$result = mysqli_query($con, $s);  
$resultTwo = mysqli_query($con, $ss);  
$resultThree = mysqli_query($con, $sss);  
$resultFour = mysqli_query($con, $ssss);  

$num = mysqli_num_rows($result);
$numTwo = mysqli_num_rows($resultTwo);
$numTwo = mysqli_num_rows($resultThree);
$numTwo = mysqli_num_rows($resultFour);

$reg = " insert into userlogintable(name , surname , username , password) values ('$name' , '$surname' , '$username' , '$pass')";
mysqli_query($con, $reg);
echo "Visit Added";
}

?>