<?php

session_start();

$con = mysqli_connect('localhost','root','ilovemessi10');

mysqli_select_db($con, 'covid-tracing');

$date = $_POST['date'];
$time = $_POST['time'];
$duration = $_POST['duration'];
$x = $_POST['x'];
$y = $_POST['y'];

$s = " SELECT * from 'visit' where x = '$x'";

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
}else{
    $reg = " insert into visit(date , time , duration , x , y) values ('$date' , '$time' , '$duration' , '$x' , '$y')";
    mysqli_query($con, $reg);
    echo "Visit Added";
}

?>