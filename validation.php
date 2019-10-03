<?php
session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_post['user'];
$pass = $_post['Password'];

$s = " select * from usertable where name = '$name' && Password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	header('location:home.php');

}else{
	header('location:login.php');
}

?>