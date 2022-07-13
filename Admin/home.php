<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0770b86deb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="sec-1">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <span><i class="fa-solid fa-dumbbell text-danger ms-5 fs-4"></i><a class="navbar-brand fw-bold fs-4" href="#"><span class="text-danger">Fit&</span>play</a>
                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ps-3">
                            <a class="nav-link active  na1" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item ps-3">
                            <a class="nav-link active   na1" aria-current="page" href="#about">About</a>
                        </li>
                        <li class="nav-item ps-3">
                            <a class="nav-link active  na1" aria-current="page" href="#service">Services</a>
                        </li>
                        <li class="nav-item ps-3">
                            <a class="nav-link active  na1" aria-current="page" href="#trainer">Trainer</a>
                        </li>
                        <li class="nav-item ps-3">
                            <a class="nav-link active  na1" aria-current="page" href="#join">Join Now</a>
                        </li>        
                    </ul>
                    <form class="d-flex me-5">
                        <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                        
                        
                        <?php

                if (isset($_SESSION['l_email'])) {
                    echo ' <button class="btn btn-danger rounded-pill" type="submit"><a class="text-light text-decoration-none fw-bold" href="login.php">Logout</a></button>';
                } else {
                    echo ' <button class="btn btn-danger rounded-pill" type="submit"><a class="text-light text-decoration-none fw-bold" href="login.php">Login</a></button>';
                }


                ?>

                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- include 'config.php';

            $alldata = mysqli_query($conn, "SELECT * FROM `news`");

            while ($row = mysqli_fetch_array($alldata)) {
                echo "    <li class='cards_item'>
                <div class='card'>
                <div class='card_image'><img src='admin/$row[image]'></div>
                <div class='card_content'>
                <h2 class='card_title mb-3'>$row[title]........</h2>
               
                <a href='newsshow.php? id=$row[id]' class='btn card_btn'>Read More</a>
                </div>
                </div>
            </li>";
            }
            ?> -->
           
           <!-- update action  -->
           
           <!-- <?php include 'config.php'; -->



// $id = $_POST['id'];

// $title = $_POST['ptitle'];
// $category = $_POST['cat'];
// $price = $_POST['pprice'];
// $image = $_FILES['pimg'];


// $imageLocation = $image['tmp_name'];
// $imageName = $image['name'];

// $imageDes = 'imageproduct/' . $imageName;


// move_uploaded_file($imageLocation, $imageDes);



// $update_product = mysqli_query($conn, "UPDATE `product` SET `title`='$title',`category`='$category',`price`='$price',`image`='$imageDes' WHERE id = '$id'");


// if ($update_product) {
//     echo "<script>alert('Product Successfully Updated')</script>";
//     echo "<script>location.href = 'showproduct.php'</script>";
// } else {
//     echo "<script>alert('Failed Update!')</script>";
//     echo "<script>location.href = 'editproduct.php'</script>";
// }


//include "../config.php"



// delete form 

// <div class="container">
//         <h1 class="text-center mt-4 mb-5 ">Edit Product</h1>
//         <form action="editproduct_action.php" method="POST" class="w-50 m-auto" enctype="multipart/form-data">
//             <div class="mb-3">
//                 <label for="ptitle" class="form-label">Product Title</label>
//                 <input type="text" id="ptitle" value="<?php echo $data['title'] ?>" name="ptitle" class="form-control">

//             </div>
//             <div class="mb-3">
//                 <label for="ptitle" class="form-label">Category</label>

//                 <select class="form-select form-select" name="cat" aria-label=".form-select-sm example">
//                     <option value="<?php echo $data['category'] ?>"><?php echo $data['category'] ?></option>
//                     <option value="Women">Women</option>
//                     <option value="Baby">Baby</option>
//                     <option value="Indian">Indian</option>
//                     <option value="Dress">Dress</option>
//                     <option value="Western">Western</option>
//                 </select>

//             </div>
//             <div class="mb-3">
//                 <label for="pprice" class="form-label">Price</label>
//                 <input type="text" id="pprice" value="<?php echo $data['price'] ?>" name="pprice" class="form-control">
//             </div>

//             <div class="mb-3">
//                 <label for="pimg" class="form-label">Product Image</label>
//                 <input type="file" id="pimg" name="pimg" class="form-control" value="<?php echo $data['image'] ?>">
//                 <img src="" alt="">
//             </div>

//             <div class="mb-3">
//                 <img src="<?php echo $data['image'] ?>" alt="Image" style="width:100px;">
//             </div>


//             <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
//             <button type="submit" class="btn btn-primary">Edit Product</button>
//         </form>
//     </div>
// [5:00 pm, 13/07/2022] Emad Luf: <?php

// include 'config.php';

// $id = $_GET['id'];

// echo $id;

// $deletequery = "DELETE FROM `user` WHERE id='$id'";

// mysqli_query($conn, $deletequery);

// if ($deletequery) {

//     echo "<script>alert('Delete Successfull')</script>";
//     header("location:home.php");
// }


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>