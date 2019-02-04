<?php
   require_once 'core/init.php';
   include 'templates/header.php';

   if(Session::exists('home')){
      echo Session::flash('home');
   }
?>
<div id="slides" class="carousel slide" data-ride="carousel">
   <ul class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1"></li>
   </ul>
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img src="assets/img/bfp-landing-2.jpg" alt="bfp">
      </div>
      <div class="carousel-item">
         <img src="assets/img/bfp-landing.jpg" alt="bfp">
      </div>
   </div>
</div>

<div class="container-fluid">
   <div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
         <p class="lead">
         The Bureau of fire protection is an agency of Department of interior and Local Government (DILG) responsible for implementing national policies related to Fire fighting and Fire prevention as well as implementation of Philippine Fire Code (PD 1185), which was repealed and replaced by the New Fire Code of the Philippines (RA 9514).
         </p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
         <a href="#"><button type="button" class="btn btn-outline-secondary">Visit Official Website</button></a>
      </div>
   </div>
</div>

<div class="container-fluid padding">
   <div class="row welcome text-center">
      <div class="col-12">
         <h1 class="display-3">BFP Application System</h1>
      </div>
      <hr>
      <div class="col-12">
         <p class="lead">This the website of the Bureau of Fire Protection for the application of the certificates</p>
      </div>
   </div>
</div>

<div class="container-fluid padding">
   <div class="row text-center padding">
      <div class="col-xs-12 col-sm-6 col-md-4 home-app">
         <i class="fas fa-certificate"></i>
         <h3>FSEC</h3>
         <p>FIRE SAFETY EVALUATION CLEARANCE</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 home-app">
         <i class="fas fa-certificate"></i>
         <h3>FSIC - Occupancy</h3>
         <p>FIRE SAFETY INSPECTION CERTIFICATE FOR OCCUPANCY</p>
      </div>
      <div class="col-sm-12 col-md-4 home-app">
         <i class="fas fa-certificate"></i>
         <h3>FSIC - Business </h3>
         <p>FIRE SAFETY INSPECTION CERTIFICATE FOR BUSINESS</p>
      </div>
   </div>
   <hr class="my-4">
</div>

<div class="container-fluid padding">
   <div class="row padding">
      <div class="col-lg-6 text-center">
         <img src="assets/img/bfp-cptn.jpg" alt="cptn" class="img-fluid" id="captain">
      </div>
      <div class="col-lg-6">
         <h2>Regional Director, CSUPT LEONARDO R. BAÑAGO</h2>
         <p>The Bureau of Fire Protection National Capital Region (BFP-NCR) is consistent with its prime goal of promoting public awareness and effective education campaign on fire prevention and supresion and its initiatives. The bureau recognize the power of social media as effective means to reach the thousand people considering it's great speed and economic usage to bring valuable and updated in formation relative to bureau's day to concerns. Using this tools (website), the BFP-NCR expects active involvement from public by reading our information daily, raise suggestions, inquiries, and eventually apply in your own live the knowledege you may acquire out of this tool. Hence, we encourage the public to become a partner by means of this interactive medium towards the attainment of fire safe community</p>
      </div>
   </div>
</div>

<footer>
   <div class="container-fluid padding">
      <div class="row text-center">
         <div class="col-md-4 my-auto">
            <img src="assets/img/bfp-header.png" alt="bfp-header" id="logo">
         </div>
         <div class="col-md-4">
            <hr class="light">
            <h5>Contact Us</h5>
            <hr class="light">
            <p><i class="fas fa-phone"></i> &nbsp; 02-410-5254/02-410-6319</p>
            <p><i class="fas fa-map-marker-alt"></i> &nbsp; Erminta Garcia St, Brgy. Pinagkaisahan Cubao Quezon City</p>
            <p><i class="fas fa-envelope"></i> &nbsp; admbfpncr@yahoo.com</p>
         </div>
         <div class="col-md-4">
            <hr class="light">
            <h5>Navigation</h5>
            <hr class="light">
            <a href="#"><p><i class="fas fa-home"></i> &nbsp; Home</p></a>
            <a href="#"><p><i class="fas fa-info-circle"></i> &nbsp; About</p></a>
            <a href="#"><p><i class="fas fa-hands-helping"></i> &nbsp; Services</p></a>
            <a href="#"><p><i class="fas fa-pen"></i> &nbsp; Application</p></a>
            <a href="#"><p><i class="fas fa-sign-in-alt"></i> &nbsp; Log in</p></a>
         </div>
         <div class="col-12">
            <hr class="light-100">
            <h5>&copy; Papagalitan tayo ni Mam; 2019.</h5>
         </div>
      </div>
   </div>
</footer>

<script>
   $('.home-app').click(function() {
      window.location = "http:application.php";
   })
</script>
<?php
   include 'templates/footer.php';