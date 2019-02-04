<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>BFP</title>

   <!-- Bootstrap 4 cdn -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   <!-- FontAwesome cdn -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

   <!-- Jquery Validator -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

   <!-- Own css -->
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark sticky-top" id="nav-bg">
   <div class="container-fluid">
      <a href="http:index.php" class="navbar-brand"><img src="assets/img/bfp-header.png" alt="bfp-header" id="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a href="http:index.php" class="nav-link active">Home</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  Services
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"> FSIC For New Business Permit With Valid FSIC Issued</a>
                  <a class="dropdown-item" href="#"> FSIC For New Business Permit Without Valid FSIC Issued</a>
                  <a class="dropdown-item" href="#"> Renewal of FSIC For Business Permit Without Valid FSIC</a>
                  <a class="dropdown-item" href="#"> FSIC For Renewal Of Business Permit</a>
                  <a class="dropdown-item" href="#"> FSIC For Occupancy Permit</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  About
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">About BFP NCR</a>
                  <a class="dropdown-item" href="#">Mission and Vission</a>
                  <a class="dropdown-item" href="#">BFP Mandate</a>
               </div>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link" data-toggle="modal" data-target="#applicationModal">Application</a>
            </li>
         </ul>
         <button class="btn btn-outline-light" data-toggle="modal" data-target="#loginModal">Login</button>
      </div>
   </div>
</nav>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Account Type</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-6">
                  <a href="http:login_emp.php" class="btn btn-block">Employee</a>
               </div>
               <div class="col-md-6">
                  <a href="http:login_app.php" class="btn btn-block">Applicant</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="applicationModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle">Application</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-12">
                     <a href="http:application.php" class="btn btn-block">FSEC</a>
                     <a href="http:register_fsic_o.php" class="btn btn-block">FSIC - Occupancy</a>
                     <a href="http:register_fsic_b.php" class="btn btn-block">FSIC - Business</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
