<?php
include '../config.php';


$image=$_FILES['image'];
$title=$_POST['title'];
$info=$_POST['info'];
$fee=$_POST['fee'];

$imagename=$image['name'];
$imagelocation=$image['tmp_name'];

$imagedes= "image/" .$imagename;


move_uploaded_file($imagelocation,$imagedes);

session_start();
$insertQuery="INSERT INTO `services`(`image`, `title`, `info`, `fee`) VALUES ('$imagedes','$title','$info','$fee')";

if(!mysqli_query($conn,$insertQuery)){
    die("Not Inserted!!");
   }
     
   else{
    echo "<script>alert('Inserted Successfully!!!')</script>";
    echo "<script>location.href='home.php'</script>";
   }

?>