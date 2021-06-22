
<?php  // Display service provider data 
include("connection.php");?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Covid-19</title>

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

  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <div type="button" class="btn btn-floating rounded" id="btn-back-to-top">
    <img src="./images/scroller.png" class="scroller w-100 " />
  </div>
  <header class="">
    <nav class="navbar navbar-light   navbar-expand-lg" style="background-color: #e3f2fd;">
      <a class="navbar-brand" href="index.html"><img class="logo w-100" src="./images/project_logo.png" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="household.html">Household Precautions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">Doctor Consultancy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="./HospitalAndSafehome/src/hospital.php">Hospital</a>
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
            <a class="nav-link  " aria-current="page" href="meal and childcare.php">Healthcare volenteers Meal and
              Child
              care
              Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="./ReviewOfCovidSurvivorsAndWarriors/src/reviews.php">Review of covid survivors and warriors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="ngo-charity.php">NGO and Charity</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="help.php">Help Desk</a>
          </li>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Oxygen Modals -->
  <div class="modal fade" id="oxygenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTER AS AN OXYGEN SUPPLIER</h5>
          <!-- ATA CHILO Nicher ta new.. <button type="button" class=" btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <form class="row" action="oxygen_regt.php" method="POST">
            <div class="col-12 mt-1 ">
              <label for="Name" class="form-label">Name: </label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-12 mt-1">
              Applying as a : &nbsp;Individual person <input type="radio" value="Individual person" name="person"> Organisation <input type="radio" value="Organisation" name="person">
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" required>
            </div>
            <div class="col-12 mt-1">
              <label for="district">District</label>
              <select name="dist" id="dist">
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
            </div>
            <div class="col-12 mt-1">
              <label for="Email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Phone Number" class="form-label">Phone Number</label>
              <input type="text" class="form-control" name="phno" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
              <input type="file" class="form-control" name="cert" id="formFile">
            </div>
			<input type="submit" value="Register" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--modal close-->

  <div class="container  pt-2">
    <div class="row mt-5">
      <div class="col-12 col-md-7 row">
        <div class="h3 mt-5 p-2 ">
          Search Here for your nearby oxygen sources:</div>
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <div class="input-group md-form form-sm form-2 pl-0">
          <select class="form-control">
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
        <div class="h3 col-12 col-md-9 mt-1">
          <div class="h3 mt-5 mb-5 ml-3">Are you a Oxygen Supplier? Or do you know any verified oxygen supplier or
            oxygen parlour in your area? Then Register the details now!!</div>
          <button type="button" class="btn btn-primary ml-4" data-bs-toggle="modal" data-bs-target="#oxygenModal">
            Register Here
          </button>
        </div>
      </div>

      <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
        <img src="./images/oxy1.jpg" class="w-100">
      </div>
    </div>
    <div class="container  mt-5">
      <div class="row" style="text-align: center; align-items: center; justify-content: center;">
        <h3>Oxygen Supplier List</h3>
      </div>
      <div class="row mt-3">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Serial No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Description</th>
                     <th scope="col">Address</th>
            </tr>
          </thead>
          <tbody>
           <?php
    $sql = "SELECT * FROM `service_providers` WHERE `service_id`=1";
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
        echo "<td align = 'center'>".$row["description"]."</td>";
        echo "<td align = 'center'>".$row["address"]."</td>";
        
       
        echo "</tr>";
        $count++;
      }
    }
     ?>
          </tbody>
        </table>

      </div>
    </div>
    <div class="container">
      <div class="h3 mt-5 mb-5 ml-3">Found any fake data? Report here!! </div>

      <a href="help.php #fake"><button class="btn btn-primary ml-4 mb-5">Register Here</button></a>

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
          <h6 class="text-uppercase mb-4 font-weight-bold">Covid-19</h6>
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
            <a href="#!">Covishield®</a>
          </p>
          <p>
            <a href="#!">Covaxin®</a>
          </p>
          <p>
            <a href="#!">Mucormycosis disease</a>
          </p>
          <p>
            <a href="#!">W.H.O</a>
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Cowin</a>
          </p>
          <p>
            <a href="#!">Arogya Setu</a>
          </p>
          <p>
            <a href="#!">Help</a>
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
              <strong> Covid-19.com</strong>
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