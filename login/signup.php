<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logo.png" />
    <title>WebCoursera Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/styles.css" />

</head>

<body class="text-center main-body">
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand hover-effect" href="../index.php" style="color:rgb(60, 98, 141)">
                <img src="../assets/images/logo.png" width="25" height="25" alt="..." />
                WebCoursera
            </a>
        </div>
    </nav>

    <div class="container col-xl-10 col-xxl-8 px-4 py-0">
        <div class="row align-items-center g-lg-5 py-4">
            <div class="col-lg-7 text-center text-lg-start">
                <img src="../assets/images/login_image.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="800" loading="lazy" style="opacity: 75%;">
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-4 border rounded-3 bg-light" method="POST" onsubmit="return validate();">
                    <h1 class="mb-4 mt-2" style="font-weight: 700; font-size: 2.25em; color:rgb(60, 98, 141)">Sign Up</h1>
                    <div id="error" class="mb-3" style="display:none;"> </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" onkeyup="return passwordChanged();">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3" id="strengthDiv" style="text-align:left!important;">
                        <div style="width:100%; height: 5px; background-color:gray!important;" id="passwordStrength">
                        </div>
                        <div id="strength" style="color:gray;">Password Strength</div>
                    </div>
                    <div class="mb-3" style="display:none;">
                        To maximise password strength: Password of length atleast 10 including atleast one of uppercase, lowercase and special symbols.
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="passwordConfirm" placeholder="Confirm Password" onkeyup="return passwordConfirmed();">
                        <label for="passwordConfirm">Confirm Password</label>
                    </div>

                    <div id="confirmPassswordMessage" class="mb-3" style="text-align: left!important;color:red; display: none">

                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me" required> I agree to the <a href="../terms.html"> Terms
                                and Conditions</a>.
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
                    <hr class="my-4">
                    <div>
                        <small class="text-muted">Are you an Existing User? <a href="login.php"> Login</a></small>
                        <div class="mt-2">
                            <small class="text-muted">

                                &copy; 2021 WebCoursera, Inc.
                            </small>
                        </div>

                </form>
            </div>
        </div>
    </div>
    <script src="../assets/js/validateCredentials.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
<?php
include '../assets/php/db_connection.php';
$conn = OpenCon();
if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $hash =  hash("sha256", $pwd);
    $sql =  "INSERT INTO `user_detail` (`email`, `name`, `password`)
               VALUES ('$email', '$name', '$hash')";
    $flag = mysqli_query($conn, $sql);
    if ($flag) {
        echo "<script>setTimeout(\"location.href = 'login.php';\",1500);</script>";
        // header("Location:login.php");
    } else {
        echo <<<HEREDOC
            <script>
                var err = document.getElementById('error');
                err.innerHTML = 'Email ID already used. Click <a href="login.php">here</a> to login.';
                err.style.display = 'block';
                err.style.color = 'red';
            </script>
            HEREDOC;
    }
}

CloseCon($conn);
?>

</html>
