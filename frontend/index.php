<?php  // Display service provider data 
include("connection.php");?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
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

  <link rel="stylesheet" href="css/styles.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<style>
  .nav-link {
    color: white !important;
  }

  .active {
    color: black;
    background-color: #148496;
  }

  .carousel-caption {
    background-color: rgba(0, 0, 0, .5);
    text-shadow: 1px 1px 2px #000, 0 0 25px #383a3a, 0 0 5px #fff;
  }

  .carousel-caption {
    position: absolute;
    right: 15%;
    top: 50%;
    left: 15%;
    height: 115px;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
  }


  .link{
    text-align: center;
    padding: 5px 10px;
    font-size: 1.1rem;
    border-radius: 20px;
    transition: .40s linear;
  }
  .link:hover{
    text-decoration: none;
    background-color: rgba(200, 239, 255, 0.5);
    transform: scale(1.02);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .myCard{
    font-size: 1.4rem;
    min-height: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .myCard:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transform: scale(1.02);
    transition: .40s linear;
  }
  .card-text-heading{
    font-weight: bold;
    font-size: 1.2rem;
  }
  .center-center{
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .delta-text{
    font-size: 1.1rem;
  }

</style>

<body>
  <header>
    <!-- Navbar -->

    <!-- Top Navbar -->
    <nav class="navbar navbar-light navbar-expand-lg pb-0" style="background-color: #17a2b8;">
      <a class="navbar-brand" href="index.php"><img class="logo w-100 rounded-circle" src="./images/logo.jpg" /></a>
      <span class="navbar-text w-100 d-none d-lg-inline"  style="font-family: Lobster, cursive; font-size: 1.6rem; color: #d6fffa;">
        Covid Care
      </span>
      <ul class="nav navbar-nav d-none d-lg-flex w-100 ">
        <li class="nav-item ml-auto">
          <a class="nav-link" aria-current="page" href="sign.php">Sign in/Sign up</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" aria-current="page" href="../admin.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="help.php">Help Desk</a>
        </li>
        <!-- <div class="d-flex ml-auto">
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="../admin.php">Admin Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="help.php">Help Desk</a>
          </li>
        </div> -->
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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="household.html">Household Precautions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="./Doctor/consult.php">Doctor Consultancy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="./HospitalAndSafehome/src/hospital.php">Hospital and Safe
              Home</a>
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
            <a class="nav-link " aria-current="page" href="./ReviewOfCovidSurvivorsAndWarriors/src/reviews.php">Review
              of covid survivors and warriors</a>
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
          <div class="carousel-caption">
            <h3>Covid Care</h3>
            <p>Stay Home, Raise Hope.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/desk2.jpg" class="d-block carousel-img" alt="image not found">
          <div class="carousel-caption">
            <h3>Covid Care</h3>
            <p>Stay Home, Raise Hope.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/desk3.jpg" class="d-block carousel-img" alt="image not found">
          <div class="carousel-caption">
            <h3>Covid Care</h3>
            <p>Stay Home, Raise Hope.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/desk4.png" class="d-block carousel-img" alt="image not found">
          <div class="carousel-caption">
            <h3>Covid Care</h3>
            <p>Stay Home, Raise Hope.</p>
          </div>
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
    <figure class="text-center mt-5 mb-5 p-2">
      <blockquote class="blockquote">
        <p class="h1 quote">“No matter how much falls on us, we keep plowing ahead. That’s the only way to keep the
          roads
          clear.”</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        Greg Kincaid
      </figcaption>
    </figure>
    <div class="container mt-5 mb-5">
      <h1 class="center" style="color: rgb(151, 28, 19); text-shadow: 3px 3px rgb(253, 221, 221);">Daily Updates Of
        Covid Cases</h1>
      <h2 class="text-left">West Bengal</h2>

      <div class="row mt-3 text-center">
        <div class="col-12 col-sm-6 col-md-3 p-2 mt-2" >
          <div class="p-2 myCard" style="color: rgb(255, 0, 0); border-radius: 12px;background-color: rgba(255, 200, 200, 0.5); border-radius: 12px">
            <div class="card-text-heading mb-2">Total Cases</div>
            <div id="deltatotalcases" class="delta-text mb-1"></div>
            <div id="totalcases"></div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 p-2 mt-2" >
          <div class="p-2 myCard" style="color: rgb(65, 65, 255); border-radius: 12px;background-color: rgba(200, 239, 255, 0.5); border-radius: 12px">
            <div class="card-text-heading">Active Cases</div>
            <div id="deltatotalactivecases" class="delta-text"></div>
            <div id="totalactivecases"></div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 p-2 mt-2" >
          <div class="p-2 myCard" style="color: rgb(0, 219, 0); border-radius: 12px;background-color: rgba(200, 255, 200, 0.788); border-radius: 12px">
            <div class="card-text-heading">Recovery</div>
            <div id="deltatotalrecovery" class="delta-text"></div>
            <div id="totalrecovery"></div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 p-2 mt-2" >
          <div class="p-2 myCard" style="color: rgb(80, 80, 80); border-radius: 12px;background-color: rgba(228, 228, 228, 0.5); border-radius: 12px">
            <div class="card-text-heading">Deaths</div>
            <div id="deltatotaldeaths" class="delta-text"></div>
            <div id="totaldeaths"></div>
          </div>
        </div>
        <div class="col-12 text-right">
          Last update on: <span id="last-update"></span>
        </div>
      </div>
      <div class="row" >
        <div class="col align-self-end">
          <a class="link" href="./district_data.html">Show Details</a>
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
          <h2 class="center" id="help">NOTICE BOARD</h2>
     <?php 
     include("connection.php");
     if(isset($_REQUEST['submit'])){
        $sql = "INSERT INTO `notice_board`(`id`,`notice`,`phno`, `date`)
						  VALUES('','".$_REQUEST['help']."','".$_REQUEST['phno']."','".date("Y-m-d")."')";
	      $result= mysqli_query($link, $sql);
     }
     ?>
          <form action="#help" class="row pt-3 pb-3 notice" method="POST">
            <div class="col">
              <label class="form-label" for="URGENT">ENTER ANY URGENT</label></br>
              <input type="text" class="form-control" placeholder="Help" name="help"><br>
              <input type="text" class="form-control" placeholder="Enter Phone Number" name="phno"><br>
              <input type="submit" name="submit" value="SUBMIT"><br><br>
              <?php
               $sql=mysqli_query($link,"SELECT * FROM `notice_board`");
               if(mysqli_num_rows($sql)>0){
                 $count=1;
                while($row = mysqli_fetch_assoc($sql))
                {
                  echo $count.". ";
                  echo "<b>".$row["notice"]."</b> ".$row["date"]."<br>";
                  $count++;
                }
               }

              ?>
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
          <h6 class="text-uppercase mb-4 font-weight-bold">Covid Care</h6>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function () {


      //getting api data
      $.ajax({
        url: "https://api.covid19india.org/data.json",
        method: 'GET',
        cache: false,
        success: function (response) {
          // console.log("RESPONSE => ", response);
          console.log("response.statewise[37] => ", response.statewise[37]);

        response.statewise[37].deltaconfirmed > 0 && 
          $('#deltatotalcases').html('<i class="fas fa-arrow-up"></i>  ' + response.statewise[37].deltaconfirmed)
        $('#totalcases').html(response.statewise[37].confirmed);
          
        response.statewise[37].deltaactive > 0 &&
          $('#deltatotalactivecases').html('<i class="fas fa-arrow-up"></i>  ' + response.statewise[37].deltaactive)
        $('#totalactivecases').html(response.statewise[37].active);
          
          response.statewise[37].deltarecovered > 0 &&
            $('#deltatotalrecovery').html('<i class="fas fa-arrow-up"></i>  ' + response.statewise[37].deltarecovered)
        $('#totalrecovery').html(response.statewise[37].recovered);
          
          response.statewise[37].deltadeaths > 0 &&
            $('#deltatotaldeaths').html('<i class="fas fa-arrow-up"></i>  ' + response.statewise[37].deltadeaths)
        $('#totaldeaths').html(response.statewise[37].deaths);
        
        $('#last-update').html(response.statewise[37].lastupdatedtime)

      }

      });

    });
  </script>
</body>


</html>