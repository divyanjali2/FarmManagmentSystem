<?php
require_once("../dbConnection/connect.php");
include("../pages/sidebar.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/1style.css">
    <title>SG Farm</title>

    <style>

:root {
            --bs-success-rgb: 43, 63, 84  !important;
        }
body {
            background-color: #0E7669;
 
}
    </style>
</head>


<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="profile-links">
                    <img src="../assets/img/marie.jpg" alt="">
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="inventory.php">Inventory</a></li>
                    <li><a href="calender.php">Calender</a></li>
                    <li><a href="login.php">Sign In</a></li>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-custum">
                    <div class="details">
                        <div class="row">
                            <div class="col-8">
                                Name
                            </div>
                            <div class="col-4">
                                Anusha Perera
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="row">
                            <div class="col-8">
                                Address
                            </div>
                            <div class="col-4">
                                Sanjay Sokal
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="row">
                            <div class="col-8">
                               Contact No
                            </div>
                            <div class="col-4">
                                +94 76 127 89 89
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-5">About The Farm</h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore assumenda doloribus, omnis molestias earum voluptatem dignissimos, repudiandae sit repellat velit sunt ab laboriosam aperiam quisquam, distinctio similique veniam voluptate totam temporibus provident! Laudantium consectetur, ab earum suscipit reprehenderit assumenda aliquam repellendus accusantium. Culpa in praesentium atque dignissimos officia nihil sed?
                </p>
            </div>
        </div>
    </div>
</body>

</html>