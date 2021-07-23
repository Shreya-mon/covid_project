
<?php  // Display service provider data 
include("connection.php");?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Covid Care</title>
  <link rel="icon" href="./images/logo.jpg" type="image/png">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css"
    integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/styles.css?V=<?php echo time(); ?>">

  <style>
    .nav-link {
      color: white !important;
    }

    .active {
      color: black;
      background-color: #148496;
    }
  </style>
</head>

<body>
  <div type="button" class="btn btn-floating rounded" id="btn-back-to-top">
    <img src="./images/scroller.png" class="scroller w-100 " />
  </div>
  <header>
    <!-- Top Navbar -->
    <nav class="navbar navbar-light navbar-expand-lg pb-0" style="background-color: #17a2b8;">
      <a class="navbar-brand" href="index.php"><img class="logo w-100 rounded-circle" src="./images/logo.jpg" /></a>
      <span class="navbar-text w-100 d-none d-lg-inline"  style="font-family: Lobster, cursive; font-size: 1.6rem; color: #d6fffa;">
        Covid Care
      </span>
      <ul class="nav navbar-nav d-none d-lg-flex w-100">
        <li class="nav-item ml-auto">
          <a class="nav-link" aria-current="page" href="sign.php">Sign in/Sign up</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="../admin.php">Admin Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="help.php">Help Desk</a>
          </li>
      </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    <!-- Bottom Navbar -->
    <nav class="navbar navbar-light navbar-expand-lg pt-0" style="background-color: #17a2b8">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="household.html">Household Precautions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="./Doctor/consult.php">Doctor Consultancy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="./HospitalAndSafehome/src/hospital.php">Hospital and Safe Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="./BloodBank/blood_bank.php">Blood Bank</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="oxygen.php">Oxygen Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="vaccination.html">Covid Vaccination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="meal and childcare.php">Healthcare volunteers Meal and Child
              care Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="./ReviewOfCovidSurvivorsAndWarriors/src/reviews.php">Review of covid survivors and warriors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="ngo-charity.php">NGO and Charity</a>
          </li>
          <li class="nav-item d-sm-flex d-lg-none">
            <a class="nav-link" aria-current="page" href="help.php">Help Desk</a>
          </li>
          <li class="nav-item d-sm-flex d-lg-none">
            <a class="nav-link" aria-current="page" href="sign.php">Sign in/Sign up</a>
          </li>
          <li class="nav-item d-sm-flex d-lg-none">
            <a class="nav-link" aria-current="page" href="../admin.php">Admin Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

<!-- Modal -->
<div class="modal fade" id="userpanelmodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Alert</h5>
        <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
          aria-label="Close"><i class="fas fa-times"></i></button>
      </div>
      <div class="modal-body text-center">
        Please go to your user panel for this functionality.<br/>
        (You must sign in first)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a type="button" href="sign.php" class="btn btn-primary">Sign In</a>
      </div>
    </div>
  </div>
</div>


 
   <div class="container  pt-2">
    <div class="row mt-5">
      <div class="col-12 col-md-7 row">
        <div class="h3 col-12 col-md-9 mt-1">
          <div class="h3 mt-5 mb-5 ml-3">Are you a Oxygen Supplier? Or do you know any verified oxygen supplier or
            oxygen parlour in your area? Then Register the details now!!</div>
          <button type="button" class="btn btn-primary ml-4" data-bs-toggle="modal" data-bs-target="#userpanelmodel">
            Register Here
          </button>
        </div>
        <form action="#table" method="post">
        <div class="h3 mt-5 p-2 ">
          Search Here for your nearby oxygen sources:</div>
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <div class="input-group md-form form-sm form-2 pl-0">
          <select class="form-control" name="district_choice">
              <option value="">Select District</option>
              <option value="Alipurduar">Alipurduar</option>
                <option value="Bankura">Bankura</option>
                <option value="Paschim Bardhaman">Paschim Bardhaman</option>
                <option value="Purba Bardhaman">Purba Bardhaman</option>
                <option value="Birbhum">Birbhum</option>
                <option value="Cooch Behar">Cooch Behar</option>
                <option value="Dakshin Dinajpu">Dakshin Dinajpur</option>
                <option value="Darjeeling">Darjeeling</option>
                <option value="Hooghly">Hooghly</option>
                <option value="Howrah">Howrah</option>
                <option value="Jalpaiguri">Jalpaiguri</option>
                <option value="Jhargram">Jhargram</option>
                <option value="Kalimpong">Kalimpong</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Maldah">Maldah</option>
                <option value="Murshidabad">Murshidabad</option>
                <option value="Nadia">Nadia</option>
                <option value="North 24 Parganas">North 24 Parganas</option>
                <option value="Paschim Medinipur">Paschim Medinipur</option>
                <option value="Purba Medinipur">Purba Medinipur</option>
                <option value="Purulia">Purulia</option>
                <option value="South 24 Parganas">South 24 Parganas</option>
                <option value="Uttar Dinajpur">Uttar Dinajpur</option>
              </select>
              <div class="input-group-append">
              <span class="input-group-text amber lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                  aria-hidden="true"></i></span>
            </div>
          </div>
        </div>
        <input type="submit" class="btn btn-primary ml-4 mb-5" value="Search" name="submit">
      </form>
        
      </div>

      <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
        <img src="./images/oxy1.jpg" class="w-100">
      </div>
    </div>
    <div class="container  mt-5">
      <div class="row" style="text-align: center; align-items: center; justify-content: center;">
        <h3 id="table">Oxygen Supplier List</h3>
      </div>
      <div class="row mt-3 mytable">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Serial No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">District</th>
                    <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody>
           <?php

            if(isset($_REQUEST['submit']) && ($_REQUEST['submit']=='Search')){
                        $district = $_REQUEST['district_choice'];
                        $sql="SELECT * FROM `service_providers` WHERE `service_id`=1 AND `district`= '$district'";}
                      else{
                        $sql = "SELECT * FROM `service_providers` WHERE `service_id`=1";}
                        $result = mysqli_query($link,$sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          $count=1;
                          while($row = mysqli_fetch_assoc($result))
                          {
                            echo "<tr>";
                            echo "<td align = 'center'>".$count."</td>";
                            echo "<td align = 'center'>".$row["name"]."</td>";
                            echo "<td align = 'center'>".$row["contact"]."</td>";
                            echo "<td align = 'center'>".$row["email"]."</td>";
                            echo "<td align = 'center'>".$row["address"]."</td>";
                            echo "<td align = 'center'>".$row["district"]."</td>";
                            echo "<td align = 'center'>".$row["description"]."</td>";
                            echo "</tr>";
                            $count++;
                          }
                        }
                        else {  echo '<tr><td colspan="7" style="color:red; text-align:center;">No record found</td></tr>'; }
                  ?>
   

          </tbody>
        </table>

      </div>
    </div>
    <div class="container">
      <div class="h3 mt-5 mb-5 ml-3">Found any fake data? Report here!! </div>

      <a href="help.php #fake"><button class="btn btn-primary ml-4 mb-5">Report Here</button></a>

    </div>
  </div>
  <!-- Footer -->
  <footer class="page-footer font-small mdb-color pt-4" style="background-color: #e3f2fd;">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Covid Care</h6>
          <p>Our team tried to do as much as they can to help you out in this pandemic situation. If this page
            is
            benifical for you at some point then we will be very thankfull. Give us a review if you like it.
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">About More information</h6>
          <p>
             <a href="https://www.seruminstitute.com/health_faq_covishield.php" target="_blank">Covishield®</a>
          </p>
          <p>
             <a href="https://www.bharatbiotech.com/covaxin.html" target="_blank">Covaxin®</a>
          </p>
          <p>
            <a href="https://www.cdc.gov/fungal/diseases/mucormycosis/index.html" target="_blank">Mucormycosis disease</a>
          </p>
          <p>
            <a href="https://www.who.int/" target="_blank">W.H.O</a>
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
          <p>
        <a href="sign.php" >Your Account</a>
      </p>
      <p>
        <a href="https://www.cowin.gov.in/" target="_blank">Cowin</a>
      </p>
      <p>
        <a href="https://www.aarogyasetu.gov.in/" target="_blank">Arogya Setu</a>
      </p>
      <p>
        <a href="help.php">Help</a>
      </p>
        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fas fa-home mr-3"></i> Kolkata, Vivekanada College, Thakurpukur
          </p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@gmail.com
          </p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88
          </p>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89
          </p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr>

      <!-- Grid row -->
      <div class="row d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
          <p class="text-center text-md-left">© 2021 Copyright:
            <a href="https://mdbootstrap.com/">
              <strong> Covid Care.com</strong>
            </a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>
  <!-- Footer -->
  <script src="./js/scroller.js"></script>
</body>

</html>