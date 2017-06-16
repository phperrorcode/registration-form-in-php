<?php
include('config.php');	
session_start();
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$Verify_password=$_POST['Verify_password'];
$error_message="";
//server side validation
if($user_name =="" or $email=="" or $password=="") {
	 //Form Required Field Validation 
	$error_message = "All Fields are required";
}elseif($password != $Verify_password){
	//Password Matching Validation 
	$error_message = "password not match"; 
}else{
	$data=mysqli_query($conn,"SELECT * FROM user where email='$email'");
	$no=mysqli_num_rows($data);
	if($no){
		$error_message = "This Email Already exist";
	}else{
		$data=mysqli_query($conn,"INSERT INTO user (user_name,email,password) VALUES
			('".$user_name."','" . $email ."','".$password."')");
		$_SESSION['user']= $email;
		header("location: Dashboard.php");
	}
}
if($error_message !="")
{
	$_SESSION['err']=$error_message;
	header("location: registration.php");
}
?>