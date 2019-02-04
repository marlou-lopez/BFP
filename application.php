
<?php
   require_once 'core/init.php';
   include 'templates/header.php';
?>

<div class="container-fluid">
   <div class="row">
      <div class="col-12 text-center">
         <h1 class="my-auto">FSEC</h1>
      </div>
      <hr class="red">  
   </div>
   <form action="" method="post" class="jumbotron mx-auto" id="appForm" enctype="multipart/form-data">
      <h4>Business Information:</h4>
      <hr class="my-4">
      <div class="form-group row">
         <label for="business_name" class="col-sm-2 col-form-label">Business Name:</label>
         <div class="col-sm-10">
            <input type="text" name="business_name" id="business_name" class="form-control" placeholder="Enter Business Name:"
               required>
         </div>
      </div>
      <div class="form-group row">
         <label for="business_address" class="col-sm-2 col-form-label">Business Address:</label>
         <div class="col-sm-10">
            <input type="text" name="business_address" id="business_address" class="form-control" placeholder="Enter Business Address:"
               required>
         </div>
      </div>
      <div class="form-group row">
         <label for="city" class="col-sm-2 col-form-label">City:</label>
         <div class="col-sm-10">
            <select class="form-control" name="city" id="city">
               <option value="Caloocan">Caloocan</option>
               <option value="Las Pinas">Las Pinas</option>
               <option value="Navotas">Navotas</option>
               <option value="Manila">Manila</option>
               <option value="Makati">Makati</option>
               <option value="Malabon">Malabon</option>
               <option value="Mandaluyong">Mandaluyong</option>
               <option value="Marikina">Marikina</option>
               <option value="Muntinlupa">Muntinlupa</option>
               <option value="Pasay">Pasay</option>
               <option value="Pasig">Pasig</option>
               <option value="Paranaque">Paranaque</option>
               <option value="Pateros">Pateros</option>
               <option value="Valenzuela">Valenzuela</option>
               <option value="Taguig">Taguig</option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label for="landmark" class="col-sm-2 col-form-label">Landmark:</label>
         <div class="col-sm-10">
            <input type="text" name="landmark" id="landmark" class="form-control" placeholder="Enter Landmark:"
               required>
         </div>
      </div>
      <div class="form-group row">
         <label for="business_ntr" class="col-sm-2 col-form-label">Nature of Business:</label>
         <div class="col-sm-10">
            <input type="text" name="business_ntr" id="business_ntr" class="form-control" placeholder="Enter Nature of Business"
               required>
         </div>
      </div>
      <div class="form-group row">
         <label for="tel_no" class="col-sm-2 col-form-label">Tel. No:</label>
         <div class="col-sm-10">
            <input type="text" name="tel_no" id="tel_no" class="form-control" placeholder="Enter Tel. No:" maxlength="7">
         </div>
      </div>
      <div class="form-group row">
         <label for="mobile_no" class="col-sm-2 col-form-label">Mobile Number:</label>
         <div class="col-sm-10">
            <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="Enter Mobile Number"
               maxlength="11" required>
         </div>
      </div>
      <div class="form-group row">
         <label for="occupancy_type" class="col-sm-2">Occupancy Type:</label>
         <div class="col-sm-10">
            <select class="form-control" name="occupancy_type" id="occupancy_type">
               <option value="1">Assembly</option>
               <option value="2">Educational</option>
               <option value="3">Health Care</option>
               <option value="4">Detention and Correctional</option>
               <option value="5">Hotel</option>
               <option value="6">Dormitories</option>
               <option value="7">Apartment Building</option>
               <option value="8">Loding and Rooming House</option>
               <option value="9">Single and Two Family Dwelling Unit</option>
               <option value="10">Mercantile</option>
               <option value="11">Business</option>
               <option value="12">Industrial</option>
               <option value="13">Storage</option>
               <option value="14">Miscellaneous Structures</option>
            </select>
         </div>
      </div>
      <div class="form-group row">
         <label for="no_of_floors" class="col-sm-2 col-form-label">No. of floors:</label>
         <div class="col-sm-10">
            <input type="text" name="no_of_floors" id="no_of_floors" class="form-control" placeholder="Enter No. of floors"
               required>
         </div>
      </div>
      <div class="form-group row">
         <label for="floor_area" class="col-sm-2 col-form-label">Floor area (sqm.):</label>
         <div class="col-sm-10">
            <input type="text" name="floor_area" id="floor_area" class="form-control" placeholder="Enter Floor area (sqm.)"
               required>
         </div>
      </div>
      <h4>Applicant's Information:</h4>
      <hr class="my-4">
      <div class="form-group row">
         <label for="first_name" class="col-sm-2 col-form-label">First Name:</label>
         <div class="col-sm-10">
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name"
               required>
         </div>
      </div>
      <div class="form-group row">
         <label for="middle_name" class="col-sm-2 col-form-label">Middle Name:</label>
         <div class="col-sm-10">
            <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Enter Middle Name"
               required>
         </div>
      </div>
      <div class="form-group row">
         <label for="last_name" class="col-sm-2 col-form-label">Last Name:</label>
         <div class="col-sm-10">
            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name"
               required>
         </div>
      </div>
      <div class="form-group row">
         <label for="bday" class="col-sm-2 col-form-label">Birthday:</label>
         <div class="col-sm-10">
            <input type="date" name="bday" id="bday" class="form-control" required>
         </div>
      </div>
      <div class="form-group row">
         <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
         <div class="col-sm-10">
            <input type="radio" name="gender" id="gender" value="Male" checked> Male
            <input type="radio" name="gender" id="gender" value="Female"> Female
         </div>
      </div>
      <div class="form-group row">
         <label for="email" class="col-sm-2 col-form-label">Email:</label>
         <div class="col-sm-10">
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
         </div>
      </div>

      <h4>Please attached the following requirements:</h4>
      <hr class="my-4">
      <div class="form-group row">
         <label for="owner_id" class="col-sm-2 col-form-label">Photocopy of Owner's ID:</label>
         <div class="col-sm-10">
            <input type="file" name="owner_id" id="owner_id" class="form-control-file" required>
         </div>
      </div>
      <div class="form-group row">
         <label for="building_plan" class="col-sm-2 col-form-label">Building Plan:</label>
         <div class="col-sm-10">
            <input type="file" name="building_plan" id="building_plan" class="form-control-file" required>
         </div>
      </div>
      <div class="form-group row">
         <label for="specifications" class="col-sm-2 col-form-label">Specifications:</label>
         <div class="col-sm-10">
            <input type="file" name="specifications" id="specifications" class="form-control-file" required>
         </div>
      </div>
      <div class="form-group row">
         <label for="bill_quantities" class="col-sm-2 col-form-label">Bill of Quantities:</label>
         <div class="col-sm-10">
            <input type="file" name="bill_quantities" id="bill_quantities" class="form-control-file" required>
         </div>
      </div>
      <div class="form-group row">
         <label for="bill_grand_total" class="col-sm-2 col-form-label">Bill of Quantities Grand Total:</label>
         <div class="col-sm-10">
            <input type="text" name="bill_grand_total" id="bill_grand_total" class="form-control" required>
         </div>
      </div>
      <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
   </form>
</div>

<script>
   $.validator.setDefaults({
      submitHandler: function () {
         alert("submitted!");
      }
   });

   $(document).ready(function () {
      $('#appForm').validate({
         rules: {
            mobile_no: {
               digits: true
            },
            tel_no: {
               digits: true
            },
            bill_grand_total: {
               number: true
            },
            no_of_floors: {
               digits: true
            },
            floor_area: {
               number: true
            }
         }
      });
   });
</script>
<?php
   include 'templates/footer.php';