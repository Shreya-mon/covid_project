<?php  // Display service provider data 
include("../connection.php");?>

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
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
  integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="styles1.css?V=<?php echo time(); ?>" />
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

  <header>
    <!-- Top Navbar -->
    <nav class="navbar navbar-light navbar-expand-lg pb-0" style="background-color: #17a2b8;">
      <a class="navbar-brand" href="index.html"><img class="logo w-100" src="../images/project_logo.png" /></a>
      <ul class="nav navbar-nav d-none d-lg-flex w-100">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../sign.html">Sign in/Sign up</a>
        </li>
        <div class="d-flex ml-auto">
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="../../admin.html">Admin Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../help.php">Help Desk</a>
          </li>
        </div>
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
            <a class="nav-link " aria-current="page" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../household.html">Household Precautions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../Doctor/consult.php">Doctor Consultancy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../HospitalAndSafehome/src/hospital.php">Hospital and Safe Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="blood_bank.php">Blood Bank</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../oxygen.php">Oxygen Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../vaccination.html">Covid Vaccination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../meal and childcare.php">Healthcare volunteers Meal and Child
              care Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../ReviewOfCovidSurvivorsAndWarriors/src/reviews.php">Review of covid survivors and warriors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../ngo-charity.php">NGO and Charity</a>
          </li>
          <li class="nav-item d-sm-flex d-lg-none">
            <a class="nav-link" aria-current="page" href="../index.php">Help Desk</a>
          </li>
          <li class="nav-item d-sm-flex d-lg-none">
            <a class="nav-link" aria-current="page" href="../sign.html">Sign in/Sign up</a>
          </li>
          <li class="nav-item d-sm-flex d-lg-none">
            <a class="nav-link" aria-current="page" href="../../admin.html">Admin Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>



  <!--Donor Modals -->
  <div class="modal fade" id="DonorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DONATE BLOOD</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <form class="row" action="donor_regt.php" method="POST">
            <div class="col-12 mt-1 ">
              <label for="Name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Phone Number" class="form-label">Phone Number</label>
              <input type="text" class="form-control" name="phno" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Date Of Birth" class="form-label">Date Of Birth</label>
              <input type="date" class="form-control" name="dob" required>
            </div>
            <div class="col-12 mt-1">
              Gender: &nbsp;Male <input type="radio" value="Male" name="gender"> Female <input type="radio" value="Female" name="gender"> Other <input type="radio" value="Other" name="gender">
            </div>
            <div class="col-12 mt-1">
              <label for="">Blood Group</label>
              <select name="bgrp">
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="O+">O+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
                <option value="O-">O-</option>
              </select>
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
              <label for="">Frequency of blood donation</label>
              <select name="freq">
                <option value="Regular Donor">Regular Donor</option>
                <option value="On need basis">On need basis</option>
                <option value="Yet to donate">Yet to donate</option>
              </select>
            </div>
            <div class="col-12 mt-1">
              <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
              <input type="file" class="form-control" name="cert" id="formFile">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" value="Register" name="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--Receiver MODEL -->
  <div class="modal fade" id="ReceiverModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REQUEST FOR BLOOD</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <form class="row" action="receiver_regt.php" method="POST">
            <div class="col-12 mt-1 ">
              <label for="Name of NGO" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Phone Number" class="form-label">Phone Number</label>
              <input type="text" class="form-control" name="phno" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Date Of Birth" class="form-label">Date Of Birth</label>
              <input type="date" class="form-control" name="dob" required>
            </div>
            <div class="col-12 mt-1">
              Gender: &nbsp;Male <input type="radio" value="Male" name="gender"> Female <input type="radio" value="Female" name="gender"> Other <input type="radio" value="Other" name="gender">
            </div>
            <div class="col-12 mt-1">
              <label for="">Blood Group</label>
              <select name="bgrp">
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="O+">O+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
                <option value="O-">O-</option>
              </select>
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
              <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
              <input type="file" class="form-control" name="cert" id="formFile">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" value="Register" name="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <div type="button" class="btn btn-floating rounded" id="btn-back-to-top">
    <img src="../images/scroller.png" class="scroller w-100 " />
  </div>

  <div class="container-fluid text-center pt-2">
    <div class="row content mt-5">
      <div class="col-12 col-md-2 ml-md-4 ">

        <div class="list-group w-100 ">
          <a href="#how" class="list-group-item list-group-item-action active">How to donate blood ?</a>
          <a href="#become" class="list-group-item list-group-item-action">Become Donor / Request Blood</a>
          <a href="#bank" class="list-group-item list-group-item-action">Blood Banks</a>
          <a href="#cell" class="list-group-item list-group-item-action">Blood Cell Disorders</a>
          <a href="#about" class="list-group-item list-group-item-action">About Blood Groups</a>
          <a href="#why" class="list-group-item list-group-item-action">Why donate blood ?</a>
          <a href="#tips" class="list-group-item list-group-item-action">Tips on blood donation</a>
          <a href="#faq" class="list-group-item list-group-item-action">FAQs</a>
        </div>
      </div>
      <div class="col-md-9 text-left ">
        <div class="text-center">
          <h3 style="font-weight:bold;font-family:verdana;color:red;text-shadow:2px 2px 3px black;" id="how">
            How to donate blood ?</h3>
        </div>
        <p style="font-size:15px;">Blood donations in India are conducted by several organizations and hospitals
          by organizing blood donation camps.
          Donors can also visit blood banks in hospitals to donate blood or directly to a receiver. Despite
          the shortage of
          donated blood, efforts by the government and various organizations have led to a decrease in the
          demand and supply
          gap over the years. The number of voluntary blood donors increased from 54.4% in 2006–2007 to 83.1%
          in 2011–2012,
          with the number of blood units increasing from 4.4 million units in 2006–2007 to 9.3 million units
          in 2012–2013. In
          2016, the Ministry of Health and Family Welfare reported a donation of 10.9 million units against a
          requirement of 12
          million units.<br> &emsp; &emsp; Blood donors in India donate around 350 millilitres of blood. After
          a donation, the donors are provided
          with refreshments, which usually include a glucose drink, biscuits and fruits. Some organizations
          offer transportation
          facilities, apart from providing certificates or badges as a gratitude.<br>
        <h5 style="font-weight:bold;">Requirements by blood donation
          type :</h5>These are some of the requirements donors must meet to be eligible to donate blood based
        on their donation type :</p>
        <ul>
          <li> Donation Frequency : Every 56 days* </li>
          <li> You must be in good health and feeling well** </li>
          <li> You must be at least 16 years old in most states </li>
          <li> You must weight at least 110 lbs </li>
        </ul>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img4.jpg" alt="image" style="width:100%">
              <div class="carousel-caption d-none d-md-block">
                <p style="font-weight:bold;font-size:18px;text-shadow:2px 2px 8px black;">The blood you
                  donate gives someone another chance at life...</p>
                <h1 style="font-weight:bold;font-size:22px;text-shadow:2px 2px 8px red;">“You Are Not
                  Useless;<br>Know Your Worth By Donating Blood!”</h1>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img8.jpg" alt="image" style="width:100%">
              <div class="carousel-caption d-none d-md-block">
                <p style="font-weight:bold;font-size:22px;text-shadow:2px 2px 8px black;">A SINGLE PINT
                  CAN SAVE THREE LIVES<br>A SINGLE GESTURE CAN CREATE A MILLION SMILES</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="donate3.jpg" alt="image" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="img5.jpg" alt="image" style="width:100%">
              <div class="carousel-caption d-none d-md-block">
                <h3 style="font-weight:bold;font-size:30px;text-shadow:2px 2px 8px darkgreen;">“Blood
                  Donation Costs You Nothing, But It Can Mean The World To Someone In Need.”</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="donate4.jpg" alt="image" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="donate1.jpg" alt="image" style="width:100%">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>
        <h5 style="font-weight:bold;">The Blood Donation Process</h5>
        <ul>
          <li style="font-weight:bold;">Registration</li>
          <ul>
            <p> <img src="im16.jpeg" alt="register" style="float:right;width:180px;height:150px;border-radius:50%;">
              > We'll sign you in and go over basic eligibility.<br>
              > You'll be asked to show ID, such as your AADHAAR CARD, VOTER CARD etc.<br>
              > You'll read some information about donating blood.<br>
              > We'll ask you for your complete address. Your adress needs to be complete (including PO
              Box, <br>&emsp;Street/Apartment No.) and the
              place where you'll receive your mail 8 weeks from donation.</p>
          </ul>
          <br>
          <li style="font-weight:bold;">Health History</li>
          <ul>
            <p> <img src="im14.jpg" alt="health history"
                style="float:right;width:180px;height:150px;border-radius:50%;">
              > You'll answer a few questions about your health history and places you've traveled, during
              a private <br>&emsp;& confidential interview.<br>
              > You'll tell us about any prescription and/or over the counter medications that may be in
              your <br>&emsp;system.<br>
              > We'll check your temparature, pulse, blood pressure and hemoglobin level.</p>
          </ul>
          <br>
          <li style="font-weight:bold;">Your Blood Donation</li>
          <ul>
            <p> > If you're donating whole blood, we'll cleanse an area on your arm and insert a brand new
              sterile needle for the blood draw
              <br>&emsp;(This feels like a quick pinch and is over in seconds).<br>
              <img src="im13.jpg" alt="donation" style="float:right;width:180px;height:150px;border-radius:50%;">
              > Other types of donations, such as platelets, are made using an apheresis machine which
              will be <br>&emsp;connected to both arms.<br>
              > A whole blood donatio takes about 8-10 minutes, during which you'll be seated comfortably
              or <br>&emsp;lying down.<br>
              > When approximately a pint of whole blood has been collected, the duration is complete and
              a staff <br>&emsp;person will place a bandage
              on your arm.<br>
              > For platelets, the apheresis machine will collect a small amount of blood, remove the
              platelets, and <br>&emsp;return the rest of the
              blood through your other arm; this cycle will be repeated several times over about 2 hours.
            </p>
          </ul>
          <br>
          <li style="font-weight:bold;">Refreshment & Recovery</li>
          <ul>
            <p> <img src="im15.jpg" alt="refreshment" style="float:right;width:180px;height:150px;border-radius:50%;">
              > After donating blood, you’ll have a snack and something to drink in the refreshment
              area.<br>
              > You’ll leave after 10-15 minutes and continue your normal routine.<br>
              > Enjoy the feeling of accomplishment knowing you are helping to save lives.<br>
              > Take a selfie, or simply share your good deed with friends. It may inspire them to become
              blood <br>&emsp;donors. </p>
          </ul>
          <br>
        </ul>
        <hr>
        <center>
          <h3 style="font-weight:bold;font-family:verdana;color:red;text-shadow:2px 2px 3px black;" id="become">Become
            Donor / Request Blood</h3>
        </center><br>
        <h4 style="font-weight:bold;">How Often Can You Donate Blood?</h4>
        <h5>Whole Blood</h5>
        <p>You must wait a minimum of 56 days between whole blood donations. You must wait at least 7 days after
          donating blood before you can donate platelets.
          After an automated double red cell collection, you must wait 112 days before donating again.</p>
        <h5>Platelets</h5>
        <p>You can donate platelets once in a seven day period and up to 24 times a year. You must wait at least
          7 days after donating platelets before donating whole blood.
          After an automated double red cell collection, you must wait 112 days before donating again.<br>In
          any eight (8) week period, you can make one blood donation and one
          platelet donation or six (6) platelet donations.</p><br>




    <div class="container mt-2 " style="border: 1px solid gray">
      <div class="row text-center p-2" style="background-color:rgb(174, 219, 236);"><h2 class="col-12">Registration Forms</h2></div>
      <div class="row">
        <div class="col-6 text-center pt-2"  >
            <h4>DONATE BLOOD</h4>
            <button type="button" class="btn btn-success btn-block mt-4 mb-2" data-bs-toggle="modal" data-bs-target="#DonorModal" >
            Click Here
          </button>
        </div>
        <div class="col-6 text-center pt-2"  >
            <h4>REQUEST FOR BLOOD</h4>
            <button type="button" class="btn btn-success btn-block mt-4 mb-2" data-bs-toggle="modal" data-bs-target="#ReceiverModal">
            Click Here
          </button>
        </div>

      </div>

    </div>




        <h4 class="mt-5" style="font-weight:bold;">Support for Urgent Cases</h4>
        <p>We provide fast, competent support for urgent cases. We organize direct on-site support when
          necessary. We personally monitor all repairs.Your little giving can be very
          important for a person who needs.</p>
        <hr>
        <center>
          <h3 style="font-weight:bold;font-family:verdana;color:red;text-shadow:2px 2px 3px black;" id="bank">
            Blood Banks</h3>
            <form action="#bank" method="POST">
            <div class="col-12 col-md-7 row">
        <div class="h3  ">
          Search Here for your nearby blood bank:</div>
        <!--Grid column-->
        <div class="col-12 mb-4">
          <div class="input-group md-form form-sm form-2 pl-0">
            <!-- <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search"> -->
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
      </div>
      <input type="submit" name="submit" value="Search" class="btn btn-primary">
      </form>
      <div class="container  mt-5">
      <div class="row" style="text-align: center; align-items: center; justify-content: center;">
        <h3>Blood Bank List</h3>
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
                    $sql="SELECT * FROM `service_providers` WHERE `service_id`=9 AND `district`= '$district'";}
                else{
                    $sql = "SELECT * FROM `service_providers` WHERE `service_id`=9";}
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

        </center>

        <hr>
        <center>
          <h3 style="font-weight:bold;font-family:verdana;color:red;text-shadow:2px 2px 3px black;" id="cell">
            Blood Cell Disorders</h3>
        </center>
        <h5 style="font-weight:bold;">What are blood cell disorders?</h5>
        <p><img src="blood5.jpeg" alt="disorder" style="float:right;width:180px;height:150px;">
          A blood cell disorder is a condition in which there’s a problem with your red blood cells, white
          blood cells, or the smaller circulating
          cells called platelets, which are critical for clot formation. All three cell types form in the bone
          marrow, which is the soft tissue inside
          your bones. Red blood cells transport oxygen to your body’s organs and tissues. White blood cells
          help your body fight infections. Platelets
          help your blood to clot. Blood cell disorders impair the formation and function of one or more of
          these types of blood cells.</p><br>
        <h5 style="font-weight:bold;">What are the symptoms of blood cell disorders?</h5>
        <p>Symptoms will vary depending on the type of blood cell disorder. Common symptoms of red blood cell
          disorders are :
          <img src="col1.png" alt="disorder" style="float:right;width:200px;height:180px;">
        </p>
        <ul>
          <li>fatigue</li>
          <li>shortness of breath</li>
          <li>trouble concentrating from lack of oxygenated blood in the brain</li>
          <li>muscle weakness</li>
          <li>a fast heartbeat</li>
        </ul><br>
        <p>Common symptoms of white blood cell disorders are :
          <img src="col2.png" alt="disorder" style="float:right;width:200px;height:180px;">
        </p>
        <ul>
          <li>chronic infections</li>
          <li>fatigue</li>
          <li>unexplained weight loss</li>
          <li>malaise, or a general feeling of being unwell</li>
        </ul><br>
        <p>Common symptoms of platelet disorders are :
          <img src="col3.png" alt="disorder" style="float:right;width:200px;height:180px;">
        </p>
        <ul>
          <li>cuts or sores that don’t heal or are slow to heal</li>
          <li>blood that doesn’t clot after an injury or cut</li>
          <li>skin that bruises easily</li>
          <li>unexplained nosebleeds or bleeding from the gums</li>
        </ul><br><br><br>
        <h5 style="font-weight:bold;">Blood Diseases : White and Red Blood Cells, Platelets and Plasma</h5>
        <p>There are many types of blood cell disorders that can greatly affect your overall health.</p>
        <h5 style="font-weight:bold;">Red blood cell disorders</h5>
        <p>Red blood cell disorders affect the body’s red blood cells. These are cells in your blood that carry
          oxygen from your lungs to the
          rest of your body. There are a variety of these disorders, which can affect both children and
          adults.</p>
        <h6 style="font-weight:bold;">Anemia</h6>
        <p>Anemia is one type of red blood cell disorder. A lack of the mineral iron in your blood commonly
          causes this disorder.
          Your body needs iron to produce the protein hemoglobin, which helps your red blood cells (RBCs)
          carry oxygen from your
          lungs to the rest of your body. There are many types of anemia.</p>
        <ul>
          <li><b>Iron deficiency anemia :</b> Iron deficiency anemia occurs when your body does not have
            enough iron. You may feel tired and short of breath
            because your RBCs are not carrying enough oxygen to your lungs. Iron supplementation usually
            cures this type of anemia.
            <img src="im9.jpeg" alt="anemia" style="float:right;width:320px;height:200px;">
          </li>
          <li><b>Pernicious anemia :</b> Pernicious anemia is an autoimmune condition in which your body is
            unable to absorb sufficient amounts of vitamin B-12.
            This results in a low number of RBCs. It is called “pernicious,” meaning dangerous, because it
            used to be untreatable and often fatal.
            Now, B-12 injections usually cure this type of anemia.</li>
          <li><b>Aplastic anemia :</b> Aplastic anemia is a rare but serious condition in which your bone
            marrow stops making enough new blood cells.
            It can occur suddenly or slowly, and at any age. It can leave you feeling tired and unable to
            fight off infections or uncontrolled bleeding.</li>
          <li><b>Autoimmune hemolytic anemia (AHA) :</b> Autoimmune hemolytic anemia (AHA) causes your immune
            system to destroy your red blood cells faster than
            your body can replace them. This results in you having too few RBCs.</li>
          <li><b>Sickle cell anemia :</b> Sickle cell anemia (SCA) is a type of anemia that draws its name
            from the unusual sickle shape of the affected red blood cells.
            Due to a genetic mutation, the red blood cells of people with sickle cell anemia contain
            abnormal hemoglobin molecules, which leave them rigid and
            curved. The sickle-shaped red blood cells can’t carry as much oxygen to your tissues as normal
            red blood cells can. They may also become stuck in
            your blood vessels, blocking blood flow to your organs.</li>
        </ul>
        <h6 style="font-weight:bold;">Thalassemia</h6>
        <p>Thalassemia is a group of inherited blood disorders. These disorders are caused by genetic mutations
          that prevent the normal production of hemoglobin.
          When red blood cells do not have enough hemoglobin, oxygen doesn’t get to all parts of the body.
          Organs then do not function properly. These disorders
          can result in :
          <img src="im8.jpeg" alt="thalassemia" style="float:right;width:320px;height:200px;">
        </p>
        <ul>
          <li>bone deformities</li>
          <li>enlarged spleen</li>
          <li>heart problems</li>
          <li>growth and developmental delays in children</li>
        </ul><br><br>
        <h6 style="font-weight:bold;">Polycythemia vera</h6>
        <p><img src="im7.jpg" alt="polycythemia vera" style="float:right;width:220px;height:120px;">
          Polycythemia is a blood cancer caused by a gene mutation. If you have polycythemia, your bone marrow
          makes too many red blood cells.
          This causes your blood to thicken and flow more slowly, putting you at risk for blood clots that can
          cause heart attacks or strokes.
          There is no known cure. Treatment involves phlebotomy, or removing blood from your veins, and
          medication.</p><br>
        <h5 style="font-weight:bold;">White blood cell disorders</h5>
        <p>White blood cells (leukocytes) help defend the body against infection and foreign substances. White
          blood cell disorders can affect your
          body’s immune response and your body’s ability to fight off infection. These disorders can affect
          both adults and children.</p>
        <h6 style="font-weight:bold;">Lymphoma</h6>
        <p><img src="im17.png" alt="lymphoma" style="float:right;width:150px;height:150px;">
          Lymphoma is a blood cancer that occurs in the body’s lymphatic system. Your white blood cells change
          and grow out of control. Hodgkin’s
          lymphoma and non-Hodgkin’s lymphoma are the two major types of lymphoma.</p><br><br>
        <h6 style="font-weight:bold;">Leukemia</h6>
        <p><img src="im11.jfif" alt="leukemia" style="float:right;width:220px;height:120px;">
          Leukemia is blood cancer in which malignant white blood cells multiply inside your body’s bone
          marrow. Leukemia may be either acute or chronic.
          Chronic leukemia advances more slowly.</p><br>
        <h6 style="font-weight:bold;">Myelodysplastic syndrome (MDS)</h6>
        <p><img src="im1.jpg" alt="mds" style="float:right;width:200px;height:120px;">
          Myelodysplastic syndrome (MDS) is a condition affecting the white blood cells in your bone marrow.
          The body produces too many immature cells,
          called blasts. The blasts multiply and crowd out the mature and healthy cells. Myelodysplastic
          syndrome may progress either slowly or quite fast.
          It sometimes leads to leukemia.</p><br>
        <h5 style="font-weight:bold;">Platelet disorders</h5>
        <p>Blood platelets are the first responders when you have a cut or other injury. They gather at the site
          of the injury, creating a temporary plug to
          stop blood loss. If you have a platelet disorder, your blood has one of three abnormalities :</p>
        <ul>
          <li><b>Not enough platelets.</b> Having too few platelets is quite dangerous because even a small
            injury can cause serious blood loss.</li>
          <li><b>Too many platelets.</b> If you have too many platelets in your blood, blood clots can form
            and block a major artery, causing a stroke or heart attack.</li>
          <li><b>Platelets that don’t clot correctly.</b> Sometimes, deformed platelets can’t stick to other
            blood cells or the walls of your blood vessels, and so can’t
            clot properly. This can also lead to a dangerous loss of blood.</li>
        </ul>
        <p>Platelet disorders are primarily genetic, meaning they are inherited. Some of these disorders include
          :</p>
        <h6 style="font-weight:bold;">Von Willebrand disease</h6>
        <p><img src="im12.jpg" alt="vwd" style="float:right;width:240px;height:125px;">
          Von Willebrand disease is the most common inheritedbleeding disorder. It is caused by a deficiency
          of a protein that helps your blood clot, called
          von Willebrand factor (VWF).</p><br><br>
        <h6 style="font-weight:bold;">Hemophilia</h6>
        <p><img src="im10.jpeg" alt="hemophilia" style="float:right;width:220px;height:125px;">
          Hemophilia is probably the best-known blood clotting disorder. It occurs almost always in males. The
          most serious complication of hemophilia is excessive
          and prolonged bleeding. This bleeding can be either inside or outside your body. The bleeding can
          start for no apparent reason. Treatment involves a
          hormone called desmopressin for mild type A, which can promote release of more of the reduced
          clotting factor, and infusions of blood or plasma for
          types B and C.</p>
        <h6 style="font-weight:bold;">Primary thrombocythemia</h6>
        <p><img src="blood4.jpeg" alt="thrombocythemia" style="float:right;width:180px;height:125px;">
          Primary thrombocythemia is a rare disorder that can lead to increased blood clotting. This puts you
          at higher risk for stroke or heart attack.
          The disorder occurs when your bone marrow produces too many platelets.</p><br><br>
        <h6 style="font-weight:bold;">Acquired platelet function disorders</h6>
        <p>Certain drugs and medical conditions can also affect the functioning of platelets. Be sure to
          coordinate all your medications with your doctor,
          even over-the-counter ones you choose yourself. The Canadian Hemophilia Association (CHA) warns that
          the following common drugs may affect platelets,
          especially if taken long-term.</p>
        <ul>
          <li>aspirin</li>
          <li>nonsteroidal anti-inflammatory (NSAIDs)</li>
          <li>some antibiotics</li>
          <li>heart drugs</li>
          <li>blood thinners</li>
          <li>antidepressants</li>
          <li>anesthetics</li>
          <li>antihistamines</li>
        </ul>
        <h5 style="font-weight:bold;">Plasma cell disorders</h5>
        <p>There are a large variety of disorders that affect the plasma cells, the type of white blood cells in
          your body that make antibodies.
          These cells are very important to your body’s ability to ward off infection and disease.</p>
        <h6 style="font-weight:bold;">Plasma cell myeloma</h6>
        <p><img src="im2.jpg" alt="myeloma" style="float:right;width:200px;height:140px;">
          Plasma cell myeloma is a rare blood cancer that develops in the plasma cells in the bone marrow.
          Malignant plasma cells accumulate in the bone
          marrow and form tumors called plasmacytomas, generally in bones such as the spine, hips, or ribs.
          The abnormal plasma cells produce abnormal
          antibodies called monoclonal (M) proteins. These proteins build up in the bone marrow, crowding out
          the healthy proteins. This can lead to thickened
          blood and kidney damage. The cause of plasma cell myeloma is unknown.</p>
        <h5 style="font-weight:bold;">How are blood cell disorders diagnosed?</h5>
        <p>Your doctor may order several tests, including a complete blood count (CBC) to see how many of each
          type of blood cell you have. Your doctor may also
          order a bone marrow biopsy to see if there are any abnormal cells developing in your marrow. This
          will involve removing a small amount of bone marrow
          for testing.</p>
        <h5 style="font-weight:bold;">What are the treatment options for blood cell disorders?</h5>
        <p>Your treatment plan depends on the cause of your illness, your age, and your overall health status.
          Your doctor may use a combination of treatments
          to help correct your blood cell disorder.</p>
        <h6 style="font-weight:bold;">Medication</h6>
        <p><img src="im6.jpg" alt="medicine" style="float:right;width:200px;height:140px;border-radius:50px;">
          Some pharmacotherapy options include medications such as Nplate (romiplostim) to stimulate the bone
          marrow to produce more platelets in a platelet
          disorder. For white blood cell disorders, antibiotics can help fight infections. Dietary supplements
          such as iron and vitamin B-9 or B-12 can treat
          anemia due to deficiencies. Vitamin B-9 is also called folate, and vitamin B-12 is also known as
          cobalamin.</p>
        <h6 style="font-weight:bold;">Surgery</h6>
        <p><img src="im5.jpg" alt="surgery" style="float:right;width:200px;height:140px;border-radius:50px;">
          Bone marrow transplants may repair or replace damaged marrow. These involve transferring stem cells,
          usually from a donor, to your body to help your bone
          marrow begin producing normal blood cells. A blood transfusion is another option to help you replace
          lost or damaged blood cells. During a blood
          transfusion, you receive an infusion of healthy blood from a donor. Both procedures require specific
          criteria to succeed. Bone marrow donors must match or
          be as close as possible to your genetic profile. Blood transfusions require a donor with a
          compatible blood type.</p>
        <h5 style="font-weight:bold;">What is the long-term outlook?</h5>
        <p>The variety of blood cell disorders means that your experience of living with one of these conditions
          may vary greatly from someone else. Early diagnosis
          and treatment are the best ways to ensure that you live a healthy and full life with a blood cell
          disorder.</p>
        <p>Different side effects of treatments vary depending on the person. Research your options, and speak
          with your doctor to find the right treatment for you.</p>
        <p>Finding a support group or counselor to help you deal with any emotional stress about having a blood
          cell disorder is also helpful.</p>
        <hr>
        <center>
          <h3 style="font-weight:bold;font-family:verdana;color:red;text-shadow:2px 2px 3px black;" id="about">About
            Blood Groups</h3>
        </center>
        <h4 style="font-weight:bold;">Blood Type Matching</h4>
        <p><img src="blood6.jpeg" alt="bgrp" style="float:right;width:200px;height:200px;border-radius:50%;">
          On their surface, red cells have inherited chemical structures called antigens that can cause a
          person’s immune system to make antibodies against them.
          Humans have 35 major groups or families of these antigens, as well as other minor groups, but
          consideration of two, the ABO group and the RhD group, is
          very important to ensure that a transfusion recipient receives compatible blood. The presence of
          antigens within these groups is what determines a person’s
          blood type. Blood types are referred to as Type A, Type B, Type AB (which has both A and B
          antigens), or Type O (which has neither A or B antigens)
          followed by positive or negative, which indicates the presence of the RhD antigen. Persons who are
          RhD negative have no RhD antigen.</p><br>
        <center>
          <h5><b>Blood Types</b></h5>
          <table style="width:50%">
            <tr>
              <th>
                <center>ABO Antigen Group</center>
              </th>
              <th>
                <center>RhD Antigen Group</center>
              </th>
            </tr>
            <tr>
              <td>
                <center>A</center>
              </td>
              <td>
                <center>Positive</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>A</center>
              </td>
              <td>
                <center>Negative</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>B</center>
              </td>
              <td>
                <center>Positive</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>B</center>
              </td>
              <td>
                <center>Negative</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>AB</center>
              </td>
              <td>
                <center>Positive</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>AB</center>
              </td>
              <td>
                <center>Negative</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>O</center>
              </td>
              <td>
                <center>Positive</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>O</center>
              </td>
              <td>
                <center>Negative</center>
              </td>
            </tr>
          </table>
        </center><br>
        <p>Persons with a given antigen do not make antibodies against their own antigen, but will against the
          other antigens in that group. For example,
          if a person has type A blood, he (or she) will make antibodies against the B antigen, but not
          against the A antigen. That means that if this person
          is given either type B red blood cells or type AB red blood cells, his or her antibodies will attack
          and destroy the foreign red cells possessing the
          B antigen, causing a transfusion reaction. Similarly, a person having the RhD antigen will not make
          antibodies against RhD antigen, but the RhD negative
          person will make antibodies against blood with RhD positive red cells.</p>
        <div>
          <center class="w-100">
            <video  style="max-height: 300px " autoplay controls muted>
              <source src="video.mp4" type="video/mp4" >
              Your browser doesn't support the video tag
            </video>
          </center>
        </div>
          <br>
        <center>
          <table style="width:70%">
            <tr>
              <th>
                <center>Recipient Blood Type</center>
              </th>
              <th>
                <center>Matching Donor Blood Type</center>
              </th>
            </tr>
            <tr>
              <td>
                <center>A+</center>
              </td>
              <td>
                <center>A+, A-, O+, O-</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>A-</center>
              </td>
              <td>
                <center>A-, O-</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>B+</center>
              </td>
              <td>
                <center>B+, B-, O+, O-</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>B-</center>
              </td>
              <td>
                <center>B-, O-</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>AB+</center>
              </td>
              <td>
                <center>Compatible with all blood types</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>AB-</center>
              </td>
              <td>
                <center>AB-, A-, B-, O-</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>O+</center>
              </td>
              <td>
                <center>O+, O-</center>
              </td>
            </tr>
            <tr>
              <td>
                <center>O-</center>
              </td>
              <td>
                <center>O-</center>
              </td>
            </tr>
          </table>
        </center><br>
        <p>Antibodies in the plasma of donors with different blood types cause a reverse situation. For example,
          since a person with Type AB blood makes no
          antibodies against Type A or Type B cells, his or her plasma can be given to a person with Type A,
          Type B, Type AB, or Type O blood.</p>
        <p>In emergency situations, when the recipient’s blood type is unknown, the person can receive type O
          negative red cells without producing an ABO or RhD
          incompatibility reaction. In other situations, even non-emergent, where the recipient’s specific
          blood type is known but there is no type-specific blood
          available, a compatible type may be used if determined to be compatible by cross-matching.
          Cross-matching is a simple and commonly practiced laboratory
          test that verifies blood compatibility. In the latter instance, for example, if an AB positive
          recipient needs blood and there are no AB positive donors,
          they could receive blood from a Type A positive donor after a proper cross match.</p>
        <hr>
        <div class="how-section1">
          <div class="row">
            <div class="col-md-6 how-img">
              <img src="img7.jpg" style="width:100%">
            </div>
            <div class="col-md-6" id="why">
              <h4>Why donate blood ?</h4>
              <h4 class="subheading">>> Here are 13 reasons ! ! ! </h4>
              <p class="text-muted">Donating blood regularly has proved beneficial not only for the
                recipient but also the donor.
                It is helpful for the vital organs, and it reduces risk for chronic diseases such as
                cancer and stroke.</p>
              <button class="bt bt2"><a href="read1.html" target="_parent" id="why">Read More
                  ...</a></button>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6 how-img">
              <img src="tipslogo.jpg" style="width:100%">
            </div>
            <div class="col-md-6" id="tips">
              <h4>Tips for Blood Donation</h4>
              <h4 class="subheading">>> Before and After Donating Blood : What to eat & benefits</h4>
              <p class="text-muted">
                > Additional tips for the day of your donation <br>
                > Dos And Don’ts Before Donating Blood
              </p>
              <button class="bt bt2"><a href="read2.html" target="_parent" id="tips">Read More
                  ...</a></button>
            </div>
          </div>
        </div>
        <hr>
        <center>
          <h3 style="font-weight:bold;font-family:verdana;color:red;text-shadow:2px 2px 3px black;" id="faq">
            FAQs</h3>
        </center>
        <p>Here are some of the most commonly asked questions on blood donation. In case of specific queries,
          you can get in touch with a blood bank or your regular physician.</p>
        <h6 style="font-weight:bold;">1. Is there a minimum age and weight requirement for donating blood ?</h6>
        <p><b>=></b> Yes, as per the National Blood Transfusion Council of India, ideally a person should be
          between 18 and 65 years of age. The body weight should be more than 45 kgs and
          haemoglobin levels should be more than 12.5 gms/hundred ml. The donor should have ideal parameters
          related to health conditions.</p>
        <h6 style="font-weight:bold;">2. How much blood will be drawn if I donate blood ?</h6>
        <p><b>=></b> Usually, 500ml of blood is drawn for a full blood donation. However, if you are donating a
          specific product of blood like plasma or platelets then the amount of blood taken
          will depend upon your age and physical dimensions.</p>
        <h6 style="font-weight:bold;">3. How much time does it take for blood donation ?</h6>
        <p><b>=></b> Depending upon the purpose of donation (full donation or blood product), the time taken
          will be 45 minutes to 2 hours.</p>
        <h6 style="font-weight:bold;">4. Is blood donation painful ?</h6>
        <p><b>=></b> No, usually you will not feel high levels of pain. It is a simple prick of the needle that
          will hurt for a little while at the time of insertion. You won’t even feel
          anything after a few minutes or at the time of removing the needle. The blood donation process is
          mostly pain-free.</p>
        <h6 style="font-weight:bold;">5. Are There Any Side Effects Of Donating Blood ?</h6>
        <p><b>=></b> As mentioned earlier, there are minor side effects of giving blood the next day. It is not
          necessary that every donor experiences these side effects. Here is a list of side
          effects of blood donation :</p>
        <ul>
          <li>Dizziness</li>
          <li>Weakness</li>
          <li>Light-headedness</li>
          <li>Nausea</li>
          <li>Bleeding</li>
          <li>Bruising</li>
          <li>Pain</li>
        </ul>
        <h6 style="font-weight:bold;">6. I am on regular medication for controlling my blood pressure. Can I
          become a blood donor ?</h6>
        <p><b>=></b> Probably yes, because most over-the-counter medications do not meddle with blood donation.
          However, it is a good idea to speak to your physician before donating blood.</p>
        <h6 style="font-weight:bold;">7. Are the history questions necessary every time I donate ?</h6>
        <p><b>=></b> Yes, since this helps to ensure the safest possible blood supply. All donors must be asked
          all the screening questions at each donation. Both AABB and FDA regulations
          specifically require that all blood donors complete the donor history questionnaire on the day of
          donation and prior to donating.</p>
        <h6 style="font-weight:bold;">8. Can I still donate if I have high blood pressure ?</h6>
        <p><b>=></b> Yes, if your blood pressure falls within the limits set by FDA regulations.</p>
        <h6 style="font-weight:bold;">9. Can I donate if I've tested positive for coronavirus disease 2019
          (COVID-19) ?</h6>
        <p><b>=></b> The Food and Drug Administration suggests waiting to donate blood for at least 14 days
          after a positive diagnostic test for COVID-19 without symptoms or for at least 14
          days after symptoms of COVID-19 have completely cleared up. Those who have tested positive for
          COIVD-19 antibodies but didn't have a diagnostic test and never developed
          symptoms can donate without a waiting period or having a diagnostic test done before donation.</p>
        <h6 style="font-weight:bold;">10. What do I get in return for my blood donation?</h6>
        <p><b>=></b> Yes, if your blood pressure falls within the limits set by FDA regulations.</p>
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
          <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
          <p>
            <a href="#!">MDBootstrap</a>
          </p>
          <p>
            <a href="#!">MDWordPress</a>
          </p>
          <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
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
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Shipping Rates</a>
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
            <i class="fas fa-home mr-3"></i> New York, NY 10012, US
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
          <p class="text-center text-md-left">© 2020 Copyright:
            <a href="https://mdbootstrap.com/">
              <strong> MDBootstrap.com</strong>
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
  <script>
    var card = document.getElementById("card");
    function openRegister() {
      card.style.transform = "rotateY(-180deg)";
    }
    function openLogin() {
      card.style.transform = "rotateY(0deg)";
    }
  </script>
  <script src="../js/scroller.js"></script>
</body>

</html>