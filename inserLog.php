<?php
include 'config.php';

if(isset($_POST['login']))
{
$l_email=$_POST['l_email'];
$l_password=$_POST['l_password'];
$result=mysqli_query($conn,"SELECT * FROM `logininfo` WHERE email='$l_email' And password='$l_password'");
if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['l_email']=$l_email;
    echo "<script>location.href='home.php'</script>";
}
else{
    echo "<script>alert('Incorrect Username and Password!!!')</script>";
}
}
?>