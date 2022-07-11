<?php
include 'config.php';

$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_number=$_POST['a_number'];
$a_date=$_POST['a_date'];

session_start();

$insert_query="INSERT INTO `applyjoin`(`name`, `email`, `number`, `date`) VALUES ('$a_name','$a_email','$a_number','$a_date')";

if(!mysqli_query($conn,$insert_query)){
    die("Not Inserted!!");
   }
     
   else{
    echo "<script>alert('Inserted Successfully!!!')</script>";
    echo "<script>location.href='home.php'</script>";
   }


?>