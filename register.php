
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
    <script src="regsitervali.js"></script>
</head>

<body>

    <div class="sec-6 mt-5 pt-5 pb-5">
        <div>
            <h4 class="text-center fw-bold">Register</h4>
            <h6 class="text-center text-danger fw-bold">Fill Up The Form</h6>
        </div>
        <div class="div container w-50 mt-5 shadow p-5 docre">

            <form onsubmit="validation()" action="insert.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">User Name</label>
                    <input placeholder="Enter Your Name" type="text" name="r_name" class="form-control" id="username">
                    <p class="fw-bold  fs-6 text-danger mt-2" id="nameError"></p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input placeholder="Enter Your Email" type="email" name="r_email" class="form-control" id="useremail">
                    <p class="fw-bold  fs-6 text-danger mt-2" id="emailError"></p>
                </div>

                <div class="mb-3">
                    <label for="mobilenum" class="form-label">Mobile Number</label>
                    <input placeholder="Enter Your Phone Number" type="number" name="r_number" class="form-control" id="userphone">
                    <p class="fw-bold  fs-6 text-danger mt-2" id="numberError"></p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Password</label>
                    <input placeholder="Enter Your password" type="text" name="r_password" class="form-control" id="userpass">
                    <p class="fw-bold  fs-6 text-danger mt-2" id="passError"></p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Confirmed Password</label>
                    <input placeholder="Confirmed Your password" type="password" name="r_conpassword" class="form-control" id="userConpass">
                    <p class="fw-bold  fs-6 text-danger mt-2" id="conpassError"></p>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-3">Register</button>
                <p class="mt-2">Already have an account? <a class="text-danger text-decoration-none fw-bold" href="login.php">Login Now</a></p>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>