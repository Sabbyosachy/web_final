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
                <span><i class="fa-solid fa-dumbbell text-danger ms-5 fs-4"></i><a class="navbar-brand fw-bold fs-4"
                        href="#"><span class="text-danger">Admin</span>Dashboard</a>
                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mx-3 mb-2 mb-lg-0">
                        <li class="nav-item ps-3">
                            <a class="nav-link active fw-bold" aria-current="page" href="home.php">ADD SERVICES</a>
                        </li>
                        <li class="nav-item ps-3">
                            <a class="nav-link active fw-bold" aria-current="page" href="productList.php">PRODUCT
                                LIST</a>
                        </li>
                        <li class="nav-item ps-3">
                            <a class="nav-link active fw-bold" aria-current="page" href="joinList.php">JOIN LIST</a>
                        </li> 
                    </ul>
                    <button class="btn btn-danger rounded-pill me-5" type="submit"><a
                            class="text-light text-decoration-none fw-bold" href="../home.php">Logout</a></button>
                </div>
            </div>
        </nav>
    </div>


   
    <div class="container pt-5 mt-3">
        <h4 class="text-center fw-bold">Join List</h4>
        <h6 class="text-center text-danger fw-bold pb-5 mb-5">Number Of User Join Request Handle</h6>
    </div>
    
    <div class="container">
<div class="row g-5">

<?php

include '../config.php';
$alldata = mysqli_query($conn, "SELECT * FROM `applyjoin`");
while ($row = mysqli_fetch_array($alldata)) {
    echo " 
    <div class='d-flex justify-content-center mb-3'>
    <div class='col-md-7 col-12'>
    <div class='card shadow p-4'>
    <h4 class='card-title fw-bold'>$row[name]</h4>
    <p class='card-text info'>Email: $row[email]</p>
    <p class='card-text info'>Phone: $row[number]</p>
    <p class='card-text info'>Date/Time: $row[date]</p>
    <button style='width:100px;' class='btn btn-danger fw-bold rounded my-3  py-2'><a class='edit' href='applyDelete.php? id=$row[id]'>Delete</a></button>
    </div>
    </div>
    </div>
    
</div>
 ";
}
?>

</div>
</div>
<div class="sec-7 mt-3 pt-5">
        <div class="footer">
            <div class="footer-container">
                <div class="container">
                    <div class="row sec3_row">
                        <div class="col-md-5 wel col-12">
                            <div class="left-container text-start">
                                <h1 class="head">Fit&play</h1>
                                <div class="icons-container d-flex">
                                    <div class="icon">
                                        <i class="fab fa-facebook"></i>
                                    </div>
                                    <div class="icon">
                                        <i class="fab fa-youtube "></i>
                                    </div>
                                    <div class="icon">
                                        <i class="fab fa-twitter-square "></i>
                                    </div>
                                </div>
                                <p class="mt-4 ">Here You find the best gym experience..</p>
                                <p class="mt-2">Copywrite © 2022 sabbyosachychakraborty</p>
                            </div>
                        </div>
                        <div class="col-md-3 wel col-12">
                            <div class="menu">

                                <p class="menu">Home</p>
                                <p class="menu">Add Service</p>
                                <p class="menu">Product List</p>
                                <p class="menu">Join List</p>

                            </div>
                        </div>
                        <div class="col-md-4 wel col-12">
                            <div class="iteams">
                                <p><i class="fas fa-map-marker-alt icn "></i>Sylhet,Amborkhana,street-2</p>
                                <p> <i class="fas fa-envelope icn "></i>fit&play@gmail.com</p>
                                <p><i class="fas fa-phone-square-alt icn "></i>+8801612567923</p>
                                <p><i class="fas fa-phone-square-alt icn "></i>+8801791268349</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>