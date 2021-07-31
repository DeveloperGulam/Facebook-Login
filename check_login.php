<?php
session_start();
$con=mysqli_connect('localhost','root','','machine_test');
$name=mysqli_real_escape_string($con,$_POST['name']);
$id=mysqli_real_escape_string($con,$_POST['id']);

$res=mysqli_query($con,"select * from login_details where fb_id='$id'");
$_SESSION['FB_ID']=$id;
$_SESSION['FB_NAME']=$name;
if(mysqli_num_rows($res)>0){
	
}else{
	mysqli_query($con,"insert into login_details(name,fb_id) values('$name','$id')");
}
?>