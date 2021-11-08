<!-- 
<?php

session_start();
if (isset($_SESSION["username"])) {
    header("Location: ./post.php");
}



?> -->


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>

    </style>
</head>

<body>
    <div id="wrapper-admin" class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-34 col-md-4">
                    <div class="log">
                        <img class="logo" src="images/news.jpg">
                    </div>
                    <h3 class="heading">SignUp Here</h3>
                    <!-- Form Start -->
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="" required>
                        </div>
                        <input type="submit" name="signup" class="btn btn-primary" value="SignUp" />
                        <div class="link login-link text-center">Already a member? <a href="login.php">Login here</a></div>
                    </form>
                    <!-- /Form  End -->

                    <?php

                    if (isset($_POST['signup'])) {
                        include "config.php";
                        $name = mysqli_real_escape_string($conn, $_POST['username']);
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $password =mysqli_real_escape_string($conn, md5($_POST['password']));

                        $email_check = "SELECT * FROM signup WHERE email = '$email'";
                        $res = mysqli_query($conn, $email_check);
                        if (mysqli_num_rows($res) > 0) {
                            echo "Email that you have entered is already exist!";
                        } else {

                            $insert_data = "INSERT INTO signup (name, email, password)
                        values('$name', '$email', '$password')";
                            $data_check = mysqli_query($conn, $insert_data);


                            header("Location: ./index1.php");
                        }
                    }




                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>