<?php 
include('config.php');
session_start();
if(!isset($_SESSION['user'])){  
    header("Location:registration.php");
}
else
{
    $email= $_SESSION['user'];
    $query=mysqli_query($conn,"select * from user where email='$email'");
    $row=mysqli_fetch_array($query);
    if($_SESSION['user'] == $row['email'])
    {
    }
    else
    {
        header("Location:registration.php");
    }
}
?>