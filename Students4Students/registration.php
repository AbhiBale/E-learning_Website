<?php

session_start();

$con = mysqli_connect('localhost','root','Abhishek@2000');
//For phpmyadmin login site

mysqli_select_db($con, 'userregistration'); //This is to select databse

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name'";//SQL query

$result = mysqli_query($con, $s);
 
$num = mysqli_num_rows($result);

if($num==1)
{
	echo"Username Already Taken";
	header('location:insignup.php');
}
else 
{
	$reg= "insert into usertable(name , password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	header('location:Login.php');//It will redirect to login page after successfull registration
	echo"Registration Successfull";
}

