<?php  // Display service provider data 
include("connection.php");?>


<!DOCTYPE html>
<html lang="en">

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

  <link rel="stylesheet" href="css/styles.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
</head>

<body></body>
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="household.html">Household Precautions</a>
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
          <a class="nav-link " aria-current="page" href="oxygen.php">Oxygen Services</a>
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
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="help.php">Help Desk</a>
        </li>
        </li>
      </ul>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/desk1.jpg" class="d-block carousel-img" alt="image not found">

      </div>
      <div class="carousel-item">
        <img src="./images/desk2.jpg" class="d-block carousel-img" alt="image not found">
      </div>
      <div class="carousel-item">
        <img src="./images/desk3.jpg" class="d-block carousel-img" alt="image not found">
      </div>
      <div class="carousel-item">
        <img src="./images/desk4.png" class="d-block carousel-img" alt="image not found">
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


</header>
<main>
  <div type="button" class="btn btn-floating rounded" id="btn-back-to-top">
    <img src="./images/scroller.png" class="scroller w-100 " />
  </div>
  <figure class="text-center mt-5 mb-5">
    <blockquote class="blockquote">
      <p class="h1 quote">“No matter how much falls on us, we keep plowing ahead. That’s the only way to keep the roads
        clear.”</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      Greg Kincaid
    </figcaption>
  </figure>
  <div class="container mt-5 mb-5">
    <h1 class="center">Daily Updates</h1>
    <div class="row mt-2 center mb-5">
      <div class="col-3 p-2 mt-2  " style="border: 1px solid black;">
        Total Cases
      </div>
      <div class="col-3 p-2 mt-2" style="border: 1px solid black;">
        Active Cases
      </div>
      <div class="col-3 p-2 mt-2" style="border: 1px solid black;">
        Recovery
      </div>
      <div class="col-3 p-2 mt-2" style="border: 1px solid black;">
        Tested
      </div>
    </div>

    <div class="row mt-2 ">
      <div class="col-md-9">
        <h2 class="center">Awareness and Prevention</h2>
        <p>Everyday preventive actions to help prevent the spread of respiratory viruses should be
          followed, these include:</p>
        <div class="container w-100">
          <div class="row ">
            <div class="col-4 mt-2 p-2">
              <img class="w-100" src="images/pic1.jpg">
            </div>
            <div class="col">
              your hands often with soap and water for at least
              20 seconds. Use an alcohol-based hand sanitizer that contains at least 60% alcohol if soap
              and water are not available.
            </div>
          </div>
          <div class="row ">
            <div class="col-4 mt-2 p-2">
              <img class="w-100" src="images/pic2.jpg">
            </div>
            <div class="col">
              Avoid touching your eyes, nose, and mouth with
              unwashed hands.
            </div>
          </div>
          <div class="row ">
            <div class="col-4 mt-2 p-2">
              <img class="w-100" src="images/pic3.jpg">
            </div>
            <div class="col">
              Avoid close contact with people who are sick.
            </div>
          </div>
          <div class="row ">
            <div class="col-4 mt-2 p-2">
              <img class="w-100" src="images/pic4.jpg">
            </div>
            <div class="col">
              Cover your cough or sneeze with a tissue, then
              throw the tissue in the trash.
            </div>
          </div>
          <div class="row ">
            <div class="col-4 mt-2 p-2">
              <img class="w-100" src="images/pic5.jpg">
            </div>
            <div class="col">
              Clean and disinfect frequently touched objects and
              surfaces.
            </div>
          </div>
          <div class="row ">
            <div class="col-4 mt-2 p-2">
              <img class="w-100" src="images/pic6.jpg">
            </div>
            <div class="col">
              Maintain at least 1 meter (3 feet) distance
              between yourself and other people, particularly
              those who are coughing, sneezing and have a fever.
            </div>
          </div>
          <div class="row ">
            <div class="col-4 mt-2 p-2">
              <img class="w-100" src="images/pic7.jpg">
            </div>
            <div class="col">
              Wear cloth face coverings in public settings where
              other social distancing measures are
              difficult to maintain.
            </div>
          </div>
          <div class="row ">
            <div class="col-4 mt-2 p-2">
              <img class="w-100" src="images/pic8.png">
            </div>
            <div class="col">
              Stay home and self-isolate even with minor
              symptoms such as cough, headache, mild fever,
              until you recover.
            </div>
          </div>
        </div>
      </div>

      <div class="col mt-5 ">
        <h2 class="center">NOTICE BOARD</h2>

        <form action="post" class="row pt-3 pb-3 notice">
          <div class="col">
            <label class="form-label" for="URGENT">ENTER ANY URGENT</label></br>
            <input type="text" class="form-control" placeholder="Help">
            <button type="submit">SUBMIT</button>
          </div>
        </form>
      </div>
    </div>

  </div>
  </div>
</main>
<hr>

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4" style="background-color: #e3f2fd; z-index: 999;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Covid-19</h6>
        <p>Our team tried to do as much as they can to help you out in this pandemic situation. If this page is
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

<script src="./js/scroller.js"></script>

</body>


</html>