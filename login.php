<!-- 
<?php

session_start();
if(isset($_SESSION["name"]))
{

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
                        <h3 class="heading">Login Here</h3>
                        <!-- Form Start -->
                        <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login" />
                            <button><a href="signup.php">register here</a></button>
                        </form>
                        <!-- /Form  End -->

                        <?php

                        if(isset($_POST['login']))
                        {
                            include "config.php";
                            $email=mysqli_real_escape_string($conn,$_POST['email']);
                            $password=md5($_POST['password']);

                            $sql="SELECT id,name,email FROM signup WHERE email='{$email}'";

                            $result=mysqli_query($conn,$sql) or die("Query failed");

                            if(mysqli_num_rows($result)>0)
                            {
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    session_start();


                                    header("Location: ./index1.php");

                                }

                            }
                            else{
                                echo '<div>username and password are not matched</div>';
                            }
                        }



                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
