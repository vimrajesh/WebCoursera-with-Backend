<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/webcoursera/assets/images/logo.png" />
    <title>WebCoursera Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/webcoursera/assets/css/styles.css" />

</head>

<body class="text-center main-body">
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand hover-effect" href="/webcoursera/index.php" style="color:rgb(60, 98, 141)">
                <img src="/webcoursera/assets/images/logo.png" width="25" height="25" alt="..." />
                WebCoursera
            </a>
        </div>
    </nav>

    <div class="container col-xl-10 col-xxl-8 px-4 py-0">
        <div class="row align-items-center g-lg-5 py-4">
            <div class="col-lg-7 text-center text-lg-start">
                <img src="/webcoursera/assets/images/login_image.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="800" loading="lazy" style="opacity: 75%;">
            </div>
            <div class="col-md-10 mx-auto col-lg-5">

                <form class="p-4 p-md-5 border rounded-3 bg-light" method="post">
                    <h1 class="mb-4 mt-2" style="font-weight: 500; font-size: 2.25em; color:rgb(60, 98, 141)">Login</h1>
                    <div id="error" class="mb-3" style="display:none;"> </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
                    <hr class="my-4">
                    <div>
                        <small class="text-muted">New to Coursera? <a href="/webcoursera/login/signup.php"> Sign up</a></small>
                    </div>
                    <div class="mt-4">
                        <small class="text-muted">
                            <a href="../privacy_policy.html">Privacy Policy</a> and <a href="/webcoursera/terms.html">T&C</a> apply.
                            </a>
                            <br>
                            <div class="mt-2">
                                &copy; 2021 WebCoursera, Inc.
                            </div>
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <?php
    include '../assets/php/db_connection.php';

    function unsetVariables()
    {
        unset($email);
        unset($pwd);
        unset($hash);
        unset($sql);
        unset($result);
        unset($flag);
    }

    if (count($_POST) > 0) {

        $conn = OpenCon();

        $email = $_POST["email"];
        $pwd = $_POST["password"];
        $hash =  hash("sha256", $pwd);
        $sql =  "SELECT `password` FROM `user_detail` 
                WHERE `email` = '$email'";
        $result = mysqli_query($conn, $sql);
        $flag = false;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row["password"] == $hash) {
                    $flag = true;
                    $sql1 =  "SELECT `name` FROM `user_detail` 
                            WHERE `email` = '$email'";
                    $result1 = mysqli_query($conn, $sql1);
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        setcookie("user", explode(' ',trim($row1["name"]))[0], time() + (86400 * 30), "/"); 
                        setcookie("email", $email, time() + (86400 * 30), "/"); 
                        // echo explode(' ',trim($row1["name"]))[0];
                        // echo "<script>setTimeout(\"location.href = '../index.php';\",1500);</script>";
                        CloseCon($conn);
                        unsetVariables();
                        header("Location:../index.php");
                    }
                } else {
                    // echo "Hello World";
                    echo <<<HEREDOC
                    <script>
                        var err = document.getElementById('error');
                        err.innerHTML = 'Incorrect password entered. Try again.';
                        err.style.display = 'block';
                        err.style.color = 'red';
                    </script>
                    HEREDOC;
                }
                break;
            }
        } else {
            echo <<<HEREDOC
            <script>
                var err = document.getElementById('error');
                err.innerHTML = 'Email ID not registered with us. Click <a href="/webcoursera/login/signup.php">here</a> to register.';
                err.style.display = 'block';
                err.style.color = 'red';    
            </script>
            HEREDOC;
        }
        unsetVariables();
        CloseCon($conn);
    }
    ?>
</body>

</html>