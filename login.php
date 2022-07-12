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

    <div class="sec-6 mt-5 pt-5">
        <div>
            <h4 class="text-center fw-bold">Login</h4>
            <h6 class="text-center text-danger fw-bold">Fill Up The Form</h6>
        </div>
        <div class="div container w-50 mt-5 shadow p-5 docre">

            <form onsubmit="return myfun()" action="inserLog.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input placeholder="Enter Your Email" type="email" name="l_email" class="form-control" id="useremail" require>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Password</label>
                    <input placeholder="Enter Your password" type="password" name="l_password" class="form-control" id="userpass">
                </div>
                <button type="submit" name="login" class="btn btn-primary mt-3">Login</button>
                <p class="mt-2">If you are new user? <a class="text-danger text-decoration-none fw-bold" href="register.php">Register Now</a></p>
            </form>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>