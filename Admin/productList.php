<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0770b86deb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    </ul>
                    <button class="btn btn-danger rounded-pill me-5" type="submit"><a
                            class="text-light text-decoration-none fw-bold" href="../home.php">Logout</a></button>
                </div>
            </div>
        </nav>
    </div>

    <div class="container pt-5 mt-2">
        <h4 class="text-center fw-bold">Product List</h4>
        <h6 class="text-center text-danger fw-bold pb-5 mb-5">All Available Product Services Are Provide</h6>
    </div>

    <div class="container pb-5 mb-5">
    <div class="row g-4">

<?php

include '../config.php';
$alldata = mysqli_query($conn, "SELECT * FROM `services`");
while ($row = mysqli_fetch_array($alldata)) {
    echo " <div class='col-md-6 col-12'>
    <div class='card shadow'>
    <img src='$row[image]' class='card-img-top p-3'>
    <div class='card-body text-center'>
    <h4 class='card-title fw-bold mb-3'>$row[title]</h4>
    <p class='card-text info'>$row[info]</p>
    <h6 class='text-danger fw-bold'>Fees:$$row[fee]</h6>
    <button class='btn btn-success fw-bold rounded-pill my-3  px-5'><a class='edit' href='update.php? id=$row[id]'>Update</a></button>
    <button class='btn btn-danger fw-bold rounded-pill my-3  px-5'><a class='edit' href='delete.php? id=$row[id]'>Delete</a></button>
    </div>
    </div>
</div> ";
}
?>

</div>
</div>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>