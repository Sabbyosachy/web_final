<?php
session_start();
?>
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
    
    <div id="home" class="sec-2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://i.ibb.co/FKtG5MX/pexels-jonathan-borba-3076514.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cardio Equipment</h5>
                        <p>Most gyms are home to a few different pieces of cardio equipment such as stair climbers, rowing machines, spin bikes, recumbent bikes and treadmills.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co/Trj474K/pexels-victor-freitas-2261485.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Strength Training</h5>
                        <p>Heading to the weight room at least two to three days each week will help keep your muscles strong,bones healthy and allow you to control your weight.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co/8bB1nnw/pexels-victor-freitas-841130.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fitness classes</h5>
                        <p>Access to group fitness classes is one of the advantages of gym workouts.Not only do you the heart-pumping,muscle-building benefits of the exercises.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div id="about" class="sec-3 container mt-5 pt-5">
        <div>
            <h4 class="text-center fw-bold">ABOUT US</h4>
            <h6 class="text-center text-danger fw-bold">Learn About Our Gym</h6>
        </div>
        <div class="row mt-3 sec3_row">
            <div class="col-md-6 col-12 wel">
                <div class="px-3">
                    <h3 class=" fw-bold text-danger">Welcome To Fit&play</h3>
                    <p class="info">Without a doubt, regular exercise can benefit your health, mind and body. Not only does it boost your energy, increase lean muscle mass, decrease your risk for certain health conditions and help you manage your weight, but it also
                        improves your mood and enables you to live longer.</p>
                    <button class="btn btn-danger rounded-pill mt-3">Learn More</button>
                </div>
            </div>
            <div class="col-md-6 col-12 wel">
                <img class="w-100" src="https://i.ibb.co/Zzgh9GM/gym1.png" alt="" srcset="">
            </div>
        </div>
    </div>

    <div id="service" class="sec-4 container mt-5 pt-5">
        <div>
            <h4 class="text-center fw-bold">SERVICES</h4>
            <h6 class="text-center text-danger fw-bold pb-5 mb-5">Choose Your Services</h6>
        </div>

        <div class="row g-4">
        <?php 
        include 'config.php';

            $alldata = mysqli_query($conn, "SELECT * FROM `services`");

            while ($row = mysqli_fetch_array($alldata)) {

                ?>
                 
                <div class="col-md-4 col-12">
                  <div class="card shadow">
                 <img src='Admin/<?php echo $row['image']; ?>' class="card-img-top p-3" alt="...">
                      <div class="card-body text-center">
                          <h4 class="card-title fw-bold"> <?php echo $row['title']; ?></h4>
                          <p class="card-text info"><?php echo $row['info']; ?></p>
                          <h6 class="text-danger">Fees:$<?php echo $row['fee']; ?></h6>
                          <button class="btn btn-danger rounded-pill mt-3">Learn More</button>
                      </div>
                  </div>
                  </div>
                  
                 
           <?php
            }
           ?>
            </div>
            </div>
     
    <div class="mt-5 p-5 d-flex justify-content-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7238.140536120851!2d91.8646838223944!3d24.895584668051615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552af8919883%3A0x6fc2fe33c01b3797!2sZindabazar%2C%20Sylhet!5e0!3m2!1sen!2sbd!4v1652204361272!5m2!1sen!2sbd"
            width="1250" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>

    <div id="trainer" class="sec-5 container mt-5 pt-5">
        <div>
            <h4 class="text-center fw-bold">TRAINERS</h4>
            <h6 class="text-center text-danger fw-bold">Choose Your Trainer</h6>
        </div>
        <div class="row mt-5 row-cols-1 row-cols-md-2 mx-5 px-5 g-5">
            <div class="col">
                <div class="card shadow">
                    <img src="https://i.ibb.co/JvDhhXT/trai2.webp" class="card-img-top p-3" alt="...">
                    <div class="card-body text-center">
                        <h4 class="card-title fw-bold">Malic Brazi</h4>
                        <h6 class="card-text text-danger fw-bold">Specialist : Free Hand & Powerlifting</h6>
                        <h6>Experience : 8 years</h6>
                        <button class="btn btn-danger rounded-pill mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <img src="https://i.ibb.co/jwSsMXR/trai7.jpg" class="card-img-top p-3" alt="...">
                    <div class="card-body text-center">
                        <h4 class="card-title fw-bold">Alex zender</h4>
                        <h6 class="card-text text-danger fw-bold">Specialist : Women's Gyms & Boutique</h6>
                        <h6>Experience : 8 years</h6>
                        <button class="btn btn-danger rounded-pill mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <img src="https://i.ibb.co/tzVdXXn/trai3.jpg" class="card-img-top p-3" alt="...">
                    <div class="card-body text-center">
                        <h4 class="card-title fw-bold">Jaky Seyba</h4>
                        <h6 class="card-text text-danger fw-bold">Specialist : CrossFit Gyms & Yoga</h6>
                        <h6>Experience : 8 years</h6>
                        <button class="btn btn-danger rounded-pill mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <img src="https://i.ibb.co/10tdMZX/trai4.jpg" class="card-img-top p-3" alt="...">
                    <div class="card-body text-center">
                        <h4 class="card-title fw-bold">Abrraiya Andruja</h4>
                        <h6 class="card-text text-danger fw-bold">Specialist : Powerlifting & Free Hand</h6>
                        <h6>Experience : 8 years</h6>
                        <button class="btn btn-danger rounded-pill mt-3">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="join" class="sec-6 mt-5 pt-5">
        <div>
            <h4 class="text-center fw-bold">JOIN NOW</h4>
            <h6 class="text-center text-danger fw-bold">Book For More Experience</h6>
        </div>
        <div class="div container w-50 mt-5 shadow p-5 docre">

            <form action="joininsert.php" method="post">
                <div class="mb-3">
                <p class="text-center">Booking Form</p> 
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">User Name</label>
                    <input placeholder="Enter Your Name" type="text" name="a_name" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input placeholder="Enter Your Email" type="email" name="a_email" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="mb-3">
                    <label for="mobilenum" class="form-label">Mobile Number</label>
                    <input placeholder="Enter Your Phone Number" type="number" name="a_number" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Admission Date</label>
                    <input placeholder="Enter Your Admission Date" type="datetime-local" name="a_date" class="form-control" id="exampleInputPassword1">
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-3">
            </form>
        </div>

    </div>

    <div class="px-4 mt-5 pt-5 ">
    <img class="w-100 d-flex justify-content-center rounded-3" src="https://i.ibb.co/f9k0zp1/t.jpg" alt="" srcset="">
    </div>

    <div class=" container sec-8 mt-5 pt-5">
        <div>
            <h4 class="text-center fw-bold">REVIEWS</h4>
            <h6 class="text-center text-danger fw-bold">Our Real Clients Feedback</h6>
        </div>
        <div class="row mt-5 row-cols-1 row-cols-md-3 g-4 ">
            <div class="col">
                <div class="card shadow">
                    <img src=" https://i.ibb.co/4PP0J2p/g.jpg" class="card-img-top p-3 rounded-circle w-50 mx-auto" alt="...">
                    <div class="card-body text-center">
                        <h4 class="card-title text-center fw-bold">Nicho Wasser</h4>
                        <p class="card-text text-center info">The services are great and qulified trainer.</p>
                        <h6><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <img src="https://i.ibb.co/zVq5mnq/h.jpg" class="card-img-top p-3 rounded-circle w-50 mx-auto" alt="...">
                    <div class="card-body text-center">
                        <h4 class="card-title text-center fw-bold"> Sherr Gliss</h4>
                        <p class="card-text text-center info">The services are great and qulified trainer.</p>
                        <h6><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <img src="https://i.ibb.co/hHgrS17/y.jpg" class="card-img-top p-3 rounded-circle w-50 mx-auto" alt="...">
                    <div class="card-body text-center">
                        <h4 class="card-title text-center fw-bold">Thom Perin</h4>
                        <p class="card-text text-center info">The services are great and qulified trainer.</p>
                        <h6><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></h6>
                    </div>
                </div>
            </div>
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
                                <p class="menu">About</p>
                                <p class="menu">Services</p>
                                <p class="menu">Trainer</p>
                                <p class="menu">Join Now</p>

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