<?php
include "../config.php"
$id = $_POST['id'];
$image=$_FILES['image'];
$title=$_POST['title'];
$info=$_POST['info'];
$fee=$_POST['fee'];

$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imagedes= "image/" .$imagename;


move_uploaded_file($imagelocation,$imagedes);

$update_product = mysqli_query($conn, "UPDATE `services` SET `image`='$imageDes',`title`='$title',`info`='$info', `fee`='$fee', WHERE id = '$id'");


if ($update_product) {
echo "<script>alert('Product Successfully Updated')</script>";
echo "<script>location.href = 'productList.php'</script>";
}
 else {
     echo "<script>alert('Failed Update!')</script>";
   echo "<script>location.href = 'productList.php'</script>";
 }



?>