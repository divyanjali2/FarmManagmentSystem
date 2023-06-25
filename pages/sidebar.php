
<?php
require_once("../dbConnection/connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="1" sizes="76x76" href="../assets/img/1.png">
  <link rel="icon" type="image/png" href="../assets/img/1.png">
  <title>
  SG FARMS
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>





<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        <img src="../assets/img/1.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">SG Farms</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
   <!-- <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
           <!--   <i class="material-icons opacity-10">dashboard</i>-->
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li> <!--End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/inventory.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
           <!--   <i class="material-icons opacity-10">table_view</i>-->
            </div>
            <span class="nav-link-text ms-1">Inventory</span>
</a>
<!--<ul id="component-nav" class="nav-content collapse" data-bs-parents="#sidebar-nav">
  <li>
    <a href="place_order.php">
      <i class="bi bi-circle"></i><span>Place Order</span>-->
</a>


        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/supplier.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <!--    <i class="material-icons opacity-10">receipt_long</i>-->
            </div>
            <span class="nav-link-text ms-1">Supplier</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/orders.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
           <!--   <i class="material-icons opacity-10">format_textdirection_r_to_l</i>-->
            </div>
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <!--    <i class="material-icons opacity-10">notifications</i>-->
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/login.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/user-registration.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
   
  </aside>