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
  <header>
    <nav class="navbar navbar-light   navbar-expand-lg" style="background-color: #e3f2fd;">
      <a class="navbar-brand" href="index.html"><img class="logo w-100" src="./images/project_logo.png" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

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
            <a class="nav-link " aria-current="page" href="oxygen.php">Oxygen Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="vaccination.html">Covid Vaccination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="meal and childcare.php">Healthcare volunteers Meal and
              Child
              care Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="./ReviewOfCovidSurvivorsAndWarriors/src/reviews.php">Review of covid survivors and warriors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="ngo-charity.php">NGO and Charity</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="help.php">Help Desk</a>
          </li>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--Healthcare Modal-->
   <div class="modal fade" id="HealthcareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTER AS AN HEALTHCARE VOLUNTEER</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <form class="row">
            <div class="col-12 mt-1 ">
              <label for="Name of volunteer" class="form-label">Name: </label>
              <input type="text" class="form-control" name="nameOfvolunteer" required>
            </div>
            <div class="col-12 mt-1">
              Applying as a: &nbsp;individual person <input type="radio" name="person"> Team <input type="radio" name="person">
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="addressOfvolunteer" required>
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
              <input type="email" class="form-control" name="emailOfvolunteer" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Phone Number" class="form-label">Phone Number</label>
              <input type="number" class="form-control" name="phoneOfvolunteer" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
              <input type="file" class="form-control" name="certificateOfvolunteer" id="formFile">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" type="submit" class="btn btn-primary">Register</button>
        </div>
      </div>
    </div>
  </div>
  <!--modal close-->
 <!--Meal Modals -->
 <div class="modal fade" id="MealModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTER FOR MEAL SERVICE</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <form class="row">
            <div class="col-12 mt-1 ">
              <label for="Name of NGO" class="form-label">Name: </label>
              <input type="text" class="form-control" name="nameOfNGO" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="addressOfNGO" required>
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
              <input type="email" class="form-control" name="emailOfvolunteer" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Phone Number" class="form-label">Phone Number</label>
              <input type="number" class="form-control" name="phoneNoOfNGO" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
              <input type="file" class="form-control" name="certificateOfNGO" id="formFile">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" type="submit" class="btn btn-primary">Register</button>
        </div>
      </div>
    </div>
  </div>
  <!--modal close-->
 <!--childcare Modals -->
 <div class="modal fade" id="ChildcareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTER FOR CHILDCARE SERVICE</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <form class="row">
            <div class="col-12 mt-1 ">
              <label for="Name of NGO" class="form-label">Name</label>
              <input type="text" class="form-control" name="nameOfNGO" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="addressOfNGO" required>
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
              <label for="Phone Number" class="form-label">Phone Number</label>
              <input type="number" class="form-control" name="phoneNoOfNGO" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
              <input type="file" class="form-control" name="certificateOfNGO" id="formFile">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" type="submit" class="btn btn-primary">Register</button>
        </div>
      </div>
    </div>
  </div>
  <!--modal close-->
  <!--Side navbar-->
  <div class="container  ml-md-4 pr-md-1 mt-5 pt-2 " style="min-width: 90%;">
    <div class="row mt-2 ">
      <div class="col-md-3 mb-5 sidebar">
        <div class="list-group">
          <a href="#healthcare" class="list-group-item list-group-item-action active">Healthcare volunteers Services</a>
          <a href="#meal" class="list-group-item list-group-item-action">Meal Services</a>
          <a href="#childcare" class="list-group-item list-group-item-action">Chilcare Services</a>
        </div>
      </div>
      <div class="col-md-8 ml-md-2 mb-5 ">
        <div class="container m-0 p-0 ">
          <h2 class="center" id="healthcare">Healthcare volunteers Services
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore provident veniam numquam deserunt porro
            aliquid autem corrupti! Magnam, mollitia aut voluptates facere ut maxime earum voluptatem vitae iusto vero
            expedita aperiam nisi modi quisquam quis delectus obcaecati voluptas? Recusandae, ab!</p>
          <img src="./images/health1.gif" class="setphoto w-100">
          <div class="h3 col-12 mt-1">
            <div class="h3 mt-5 mb-5 ml-3">Register as a Healthcare volunteer team/ an individual: </div>
            <button type="button" class="btn btn-primary ml-4" data-bs-toggle="modal" data-bs-target="#HealthcareModal">
            Register Here
           </button>
          </div>
 
          <form action="#table" method="POST">
        <div class="h3 mt-5 p-2">
          Search Here for your nearby healthcare volunteers:</div>
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <div class="input-group md-form form-sm form-2 pl-0">
          <select class="form-control" name="district_choice">
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

        </form>


        <?php

        $dis=$_POST['district_choice'];
        $sql = "SELECT * FROM `service_providers` WHERE `service_id`=6 and `district`='$dis'";
                    $result = mysqli_query($link,$sql);
        ?>


          <div class="container  mt-5">
            <div class="row" style="text-align: center; align-items: center; justify-content: center;">
              <h3>Healthcare volunteers list in different areas</h3>
            </div>
            <div class="row mt-3 mytable">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Description</th>
                     <th scope="col">District</th>
                     <th scope="col">Address</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    
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
                          echo "<td align = 'center'>".$row["district"]."</td>";
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

          <div class="container m-0 p-0 " id="meal">
            <h2 class="center" id="row1">Meal Services</h2>
            <p>The second wave of the pandemic is wreaking havoc on the nation, and after Mumbai and Delhi, now Kolkata
              is also bearing the brunt of it. Every day, India is witnessing a ‘new high’ in the number of coronavirus
              cases and hospitals are running out of beds, oxygen supply and medications. Amid the trying times, many
              good samaritans are coming forward to offer help in whatever ways they can. For all the infected
              quarantined patients, a hygienic, wholesome diet is very important. Therefore, several organisations and
              establishments have started offering tiffin services for COVID patients across the country. These services
              especially come to the aid of the patients with no help at home.
              If you’re living in Kolkata and are isolating at home or don’t have a caregiver and access to fresh, daily
              meals while you’re recovering from COVID-19, here’s a list of meal service providers that are delivering
              across the city. These have been independently verified.
              Here is a list of the various tiffin and meal services in Kolkata that are delivering home-style food to
              quarantined patients:</p>
            <img src="./images/health2.jpg" class="w-100">
            <div class="h3 col-12 mt-1">
              <div class="h3 mt-5 mb-5 ml-3">Register as a meal service Organisation/ an individual: </div>
              <button type="button" class="btn btn-primary ml-4" data-bs-toggle="modal" data-bs-target="#MealModal">
            Register Here
             </button>
            </div>

            <div class="h3 mt-5 p-2">
          Search Here for your nearby Meal Services:</div>
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




            <div class="container  mt-5">
              <div class="row" style="text-align: center; align-items: center; justify-content: center;">
                <h3>Meal services list in different areas</h3>
              </div>
              <div class="row mt-3 mytable">
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
    $sql = "SELECT * FROM `service_providers` WHERE `service_id`=7";
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
          </div>

          <div class="container m-0 p-0" id="childcare">
            <h2 class="center" id="row1">Childcare Services</h2>
            <p>Child care, otherwise known as day care, is the care and supervision
              of a child or multiple children at a time, whose ages range from two weeks to eighteen years. Early child
              care is an equally important and often overlooked component of child development.
              Professional caregivers work within the context of a center-based care (including crèches, daycare,
              preschools and schools) or a home-based care (nannies or family daycare). The majority of child care
              institutions available require child care providers to have extensive training in first aid and be CPR
              certified. In addition, background checks, drug testing at all centers, and reference verification are
              normally a requirement. Child care can consist of advanced learning environments that include early
              childhood education or elementary education. "The objective of the program of daily activities should be
              to foster incremental developmental progress in a healthy and safe environment and should be flexible to
              capture the interests of the children and the individual abilities of the children." In many cases the
              appropriate child care provider is a teacher or person with educational background in child development,
              which requires a more focused training aside from the common core skills typical of a child caregiver.

              As well as these licensed options, parents may also choose to find their own caregiver or arrange
              childcare exchanges/swaps with another family.
              India has a system of universal childcare which is free and provided
              by the state through the Integrated Child Development Services. It provides food, preschool education,
              primary healthcare, immunization, contraceptive counselling, health check-up and referral services to
              children under 6 years of age and their mothers.
              Additionally, private childcare services also exist in the country
              for wealthier families.</p>
            <img src="./images/health3.jpg" class="w-100">
            <div class="h3 col-12 mt-1">
              <div class="h3 mt-5 mb-5 ml-3">Register as a Childcare Organisation/ an individual:</div>
                 <button type="button" class="btn btn-primary ml-4" data-bs-toggle="modal" data-bs-target="#ChildcareModal">
                  Register Here
                 </button>
            </div>


            <div class="h3 mt-5 p-2">
          Search Here for your nearby Childcare Services:</div>
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




            <div class="container  mt-5">
              <div class="row" style="text-align: center; align-items: center; justify-content: center;">
                <h3>Childcare services list in different areas</h3>
              </div>
              <div class="row mt-3 mytable">
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
    $sql = "SELECT * FROM `service_providers` WHERE `service_id`=8";
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
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>

        </div>
      </div>

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
            benifical for you at some point then we will be very thankfull. Give us a review if you like it.</p>
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

  <script>
    $(".list-group-item").click(function () {

      // Select all list items
      var listItems = $(".list-group-item");

      // Remove 'active' tag for all list items
      for (let i = 0; i < listItems.length; i++) {
        listItems[i].classList.remove("active");
      }

      // Add 'active' tag for currently selected item
      this.classList.add("active");
    });
  </script>
  <script src="./js/scroller.js"></script>

</body>

</html>