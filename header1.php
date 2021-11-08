<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>News</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>

<body>
    <!-- HEADER -->
    <div id="header">

        <img src="images/news.jpg" id="logo1" />
        <!-- container -->
        <div class="container" style="color: white;">
            <marquee direction="left" height="100px">
                
                <p class="stock" id="s1">| Tech Mahindra 1,539</p>
                <p class="stock" id="s">| Larsen & Toubro 1,846</p>
                <p class="stock" id="s1">| Bajaj Finserv 19,054</p>
                <p class="stock" id="s1">| Infosys 1,821</p>
                <p class="stock" id="s">| HDFC Bank 1,689</p>
                <p class="stock" id="s">| Kotak Mahindra Bank 2,035</p>
                <p class="stock" id="s">| Reliance Industries 2,732</p>
                <p class="stock" id="s1">| HCL Technologies 1,232</p>
                <p class="stock" id="s1">| Mahindra & Mahindra 917.0</p>
                <p class="stock" id="s1">| HDFC 2,822</p>
                <p class="stock" id="s">| Wipro 711.6</p>
                <p class="stock" id="s1">| ICICI Bank 747.2</p>
                <p class="stock" id="s1">| Cipla 906.2</p>
                <p class="stock" id="s">| NTPC 149.7</p>
                <p class="stock" id="s">| Bharti Airtel 681.0</p>
                <p class="stock" id="s1">| Maruti Suzuki India 7,653</p>
                <p class="stock" id="s">| SBI Life Insurance Company 1,193</p>
            </marquee>
        </div>
    </div>

    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php

                    include "config.php";

                    if (isset($_GET['cid'])) {
                        $cat_id = $_GET['cid'];
                    }

                    $sql = "SELECT * FROM category WHERE post > 0";

                    $result = mysqli_query($conn, $sql) or die("query failed:category");

                    if (mysqli_num_rows($result) > 0) {

                        
                    ?>




                        <div class="navbar">



                            <button class="btn btn-secondary " id="mo1" type="button">
                                <a  href='http://localhost/second/index1.php'>Home </a></button>

                            <button class="btn btn-secondary " id="mo2" type="button">
                                <a href="pdf.php" >ePaper </a></button>




                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" id="mo" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Category
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $active = 'dropdown-item';
                                        echo "<a  href='category1.php?cid={$row['category_id']}'>{$row['category_name']} </a><br>";
                                    } ?>
                                </div>
                            </div>

                            <button class="btn btn-secondary " id="mo3" type="button">
                                <a href="logout.php" >Logout </a></button>



                        </div>



                    <?php } ?>

                </div>
            </div>

            <div class="my">
                <form class="search-post" action="search.php" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search .....">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-danger">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->