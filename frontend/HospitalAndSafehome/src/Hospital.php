<!DOCTYPE html>
<!--main page or 1st page-->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../CSS/Hospital.css?V=<?php echo time(); ?>" />
  <link rel="stylesheet" href="../CSS/HospitalMobile.css?V=<?php echo time(); ?>" />
</head>

<body>
  <div type="button" class="btn btn-floating rounded" id="btn-back-to-top">
    <img src="../../images/scroller.png" class="scroller w-100 " />
  </div>
  <header>
    <nav class="navbar navbar-light   navbar-expand-lg" style="background-color: #e3f2fd;">
      <a class="navbar-brand" href="index.php"><img class="logo w-100" src="../../images/project_logo.png" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../../household.html">Household Precautions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../../Doctor/consult.php">Doctor Consultancy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"
              href="../../HospitalAndSafehome/src/Hospital.php">Hospital and Safe Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../../BloodBank/blood_bank.php">Blood Bank</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../../oxygen.php">Oxygen Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../../vaccination.html">Covid Vaccination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../../meal and childcare.php">Healthcare volunteers Meal and
              Child care Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../../ReviewOfCovidSurvivorsAndWarriors/src/reviews.php">Review of covid survivors and warriors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../../ngo-charity.php">NGO and Charity</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../../help.php">Help Desk</a>
          </li>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="container ml-md-5 mt-5">
    <div class="row">
      <div class="col-12 col-md-4 mb-2">
        <div class="list-group">
          <a href="#card1" class="list-group-item list-group-item-action active">
            Nearby Covid Hospital
          </a>
          <a href="#card2" class="list-group-item list-group-item-action">Check Bed Availability</a>
          <a href="#card3" class="list-group-item list-group-item-action">Check Safe Home Availability</a>
          <a href="#card4" class="list-group-item list-group-item-action">Contact details of Admission Cell Helpdesk</a>
        </div>
      </div>
      <div class="col-12 col-md-8 mt-2 text-center">
        <h2 class="text-dark">HOSPITAL AND SAFE HOME</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../asset/im17.jpg" alt="No image">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../asset/martin-sanchez-Tzoe6VCvQYg-unsplash.jpg" alt="No image">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../asset/pexels-pixabay-263402.jpg" alt="No image">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../asset/pexels-sals-5049242.jpg" alt="No image">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../asset/nick-fewings-4pZu15OeTXA-unsplash.jpg" alt="No image">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../asset/pexels-pixabay-236380.jpg" alt="No image">
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
      </div>
    </div>
  </div>
  </div>

  <main>
    <!--Count no. of hospital and bed-->
    <section class="section-2">
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
          <div class="rect">
            <h1>563</h1>
            <p>Total COVID Hospitals</p>
          </div>
          <div class="rect">
            <h1>36623</h1>
            <p>Total COVID Bed Capacity</p>
          </div>
          <div class="rect">
            <h1>14435</h1>
            <p>Total COVID Bed Avilable</p>
          </div>
        </div>
      </div>
    </section>
    <!--Cards for linking pages-->
    <section class="section-3">
      <div class="team row">
        <div class="col-md-3 col-12 text-center">
          <!--card 1-->
          <div class="card mr-2 d-inline-block shadow-lg">
            <div class="card-img-top">
              <!--link with image-->
              <a href="NearbyHospital.php"><img src="../asset/im4.jpg" alt="Member" class="img-fluid border-radius p-2"
                  id="card1" /></a>
            </div>
            <div class="card-body">
              <h3 class="card-title nearby">Nearby COVID Hospital</h3>
              <p class="card-text">Search Your Nearby COVID Hospital</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12 text-center">
          <!--card 2-->
          <div class="card mr-2 d-inline-block shadow-lg">
            <div class="card-img-top">
              <a href="BedAvailable.php"><img src="../asset/im6.jpg" alt="Member" class="img-fluid border-radius p-4"
                  id="card2" /></a>
            </div>
            <div class="card-body">
              <h3 class="card-title">Check Bed Availability</h3>
              <p class="card-text">Search for bed Availability</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12 text-center">
          <!--card 3-->
          <div class="card mr-2 d-inline-block shadow-lg">
            <div class="card-img-top">
              <a href="Safehome.php"><img src="../asset/im13.jpg" alt="Member" class="img-fluid border-radius p-4"
                  id="card3" /></a>
            </div>
            <div class="card-body">
              <h3 class="card-title">Check Safe Home Availability</h3>
              <p class="card-text safe">Search for Safe Home Availability</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12 text-center">
          <!--card 4-->
          <div class="card mr-2 d-inline-block shadow-lg">
            <div class="card-img-top">
              <a href="Contactdetails.php"><img src="../asset/im14.jpg" alt="Member" class="img-fluid w-50 p-2 pt-4"
                  id="card4" /></a>
            </div>
            <div class="card-body">
              <h3 class="card-title admission">
                Contact Details of Admission Cell Helpdesk
              </h3>
              <p class="card-text">
                Search for contact information of Admission Cell
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="page-footer font-small mdb-color pt-4 mt-3" style="background-color: #e3f2fd;">

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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">

    /**Counter animation */

    let nCount = function (selector) {
      $(selector).each(function () {
        $(this).animate(
          {
            counter: $(this).text(),
          },
          {
            duration: 4000,
            using: 'swing',
            step: function (value) {
              $(this).text(Math.ceil(value))
            },
          }
        )
      })
    }
    let a = 0
    $(window).scroll(function () {
      let oTop = $('.numbers').offset().top - window.innerHeight
      if (a == 0 && $(window).scrollTop() >= oTop) {
        a++
        nCount('.rect>h1')
      }
    })

    /**Sidebar toggle*/
    $(document).ready(function () {
      $('.menu').click(function () {
        $('.menu').toggleClass('active')
        $('.menu-bar').toggleClass('active')
      })
    })
  </script>
  <script src="../../js/scroller.js"></script>
</body>

</html>