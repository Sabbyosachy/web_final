<?php

include 'config.php';

$r_name=$_POST['r_name'];
$r_email=$_POST['r_email'];
$r_number=$_POST['r_number'];
$r_password=$_POST['r_password'];
$r_conpassword=$_POST['r_conpassword'];



$namecheck = "/^[a-zA-z. ]{3,20}$/";
$emailcheck = "/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/";
$passcheck = "/^(?=.*[0-9])(?=.*[!@#$%&*^])[a-zA-Z0-9!@#$%^&*]{8,16}$/";
$mobilecheck = "/(\+88)?-?01[0-9]{9}/";

$duplicateEmail=mysqli_query($conn,"SELECT * FROM `logininfo` WHERE email='$r_email'");

session_start();

    if(!preg_match($namecheck,$r_name)){
        echo "<script>alert('Your name is invalid please enter valid name')</script>";
    }
    elseif(!preg_match($emailcheck,$r_email)){
        echo "<script>alert('Your email is invalid please enter valid email')</script>";
    }
    elseif(!preg_match($mobilecheck,$r_number)){
        echo "<script>alert('Your phone number is invalid please enter valid mobile number')</script>";
    }
    elseif(!preg_match($passcheck,$r_password)){
        echo "<script>alert('Your password is invalid please enter valid password')</script>";
    }
    elseif($r_password!==$r_conpassword){
        echo "<script>alert('Password does not matched please enter correct password')</script>";
    }
    elseif(mysqli_num_rows($duplicateEmail)>0){
        echo "<script>alert('This Email is already taken please enter a unique email!!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }


    else{

       $insert_query="INSERT INTO `logininfo`(`name`, `email`, `number`, `password`) VALUES ('$r_name','$r_email','$r_number','$r_password')";
       
       if(!mysqli_query($conn,$insert_query)){
        die("Not Inserted!!");
       }
         
       else{
        echo "<script>alert('Inserted Successfully!!!')</script>";
        echo "<script>location.href='login.php'</script>";
       }
    }
?>