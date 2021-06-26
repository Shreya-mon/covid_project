<?php  // Display service provider data 
include("../connection.php");?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Covid-19</title>


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
  <link rel="stylesheet" href="styles1.css" />
</head>

<body>

  <header class="">
    <nav class="navbar navbar-light   navbar-expand-lg" style="background-color: #e3f2fd;">
      <a class="navbar-brand" href="index.html"><img class="logo w-100" src="../images/project_logo.png" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../household.html">Household Precautions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./consult.php">Doctor Consultancy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../HospitalAndSafehome/src/Hospital.php">Hospital and Safe Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../BloodBank/blood_bank.php">Blood Bank</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../oxygen.php">Oxygen Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../vaccination.html">Covid Vaccination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../meal and childcare.php">Healthcare volunteers Meal and
              Child care Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../ReviewOfCovidSurvivorsAndWarriors/src/reviews.php">Review
              of covid survivors and warriors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../ngo-charity.php">NGO and Charity</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../help.php">Help Desk</a>
          </li>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div type="button" class="btn btn-floating rounded" id="btn-back-to-top">
    <img src="../images/scroller.png" class="scroller w-100 " />
  </div>
  <div class="container-fluid text-center pt-2">
    <div class="row content mt-5">
      <div class="col-12 col-md-2 ml-md-4 ">

        <div class="list-group w-100 ">
          <a href="#online" class="list-group-item list-group-item-action active">Online Consultation</a>
          <a href="#covid" class="list-group-item list-group-item-action">COVID Consultation</a>
          <a href="#psy" class="list-group-item list-group-item-action">Counseling Consultation</a>
          <a href="#gal" class="list-group-item list-group-item-action">Gallery</a>
          <a href="#faq" class="list-group-item list-group-item-action">FAQs</a>
        </div>
      </div>
      <div class="col-12 col-md-9 text-left ">
        <div class="text-center">
          <h3 style="font-weight:bold;font-family:verdana;color:red;text-shadow:2px 2px 3px black;" id="online">Online
            Consultation</h3>
        </div>
        <ul>
          <li>
            <h5 style="font-weight:bold;">What is Online Doctor Consultation ?</h5>
            <p style="font-size:18px;">
              Online doctor consultation or online medical consultation is a method to connect patients and doctors
              virtually.
              It is a convenient and easy way to get online doctor advice using doctor apps or telemedicine apps or
              platforms, and the internet.</p>
          </li>
          <li>
            <h5 style="font-weight:bold;">Benefits of Online Consultation :</h5><br>
            <div class="row">
              <div class="column">
                <div class="card">
                  <h6 style="color:coral;">Consult Top Doctors 24x7</h6>
                  <p style="font-size:14px;">Connect instantly with a 24x7 specialist or choose to video visit a
                    particular doctor.</p>
                </div>
              </div>
              <div class="column">
                <div class="card">
                  <h6 style="color:coral;">Convenient and Easy</h6>
                  <p style="font-size:14px;">Start an instant consultation within 2 minutes or do video consultation at
                    the scheduled time.</p>
                </div>
              </div>
              <div class="column">
                <div class="card">
                  <h6 style="color:coral;">100% Safe Consultations</h6>
                  <p style="font-size:14px;">Be assured that your online consultation will be fully private and secured.
                  </p>
                </div>
              </div>
              <div class="column">
                <div class="card">
                  <h6 style="color:coral;">Similar Clinic Experience</h6>
                  <p style="font-size:14px;">Experience clinic-like consultation through a video call with the doctor.
                  </p>
                </div>
              </div>
            </div><br>
            <div class="row">
              <div class="column">
                <div class="card">
                  <h6 style="color:coral;">Cost-effective</h6>
                  <p style="font-size:14px;">Online healthcare is affordable. It is highly cost-effective for patients
                    who need regular doctor visits.</p>
                </div>
              </div>
              <div class="column">
                <div class="card">
                  <h6 style="color:coral;">Time-saving</h6>
                  <p style="font-size:14px;">Online healthcare saves a lot of time. Patients can get qualitative medical
                    advice, consultation, and second opinions under a single roof.</p>
                </div>
              </div>
              <div class="column">
                <div class="card">
                  <h6 style="color:coral;">Easy to check symptoms</h6>
                  <p style="font-size:14px;">With virtual doctors using intelligent symptom checkers, you stand a better
                    chance of identifying your symptoms and the causes.</p>
                </div>
              </div>
              <div class="column">
                <div class="card">
                  <h6 style="color:coral;">Free Follow-up</h6>
                  <p style="font-size:14px;">Get a valid digital prescription and a 7-day, free follow-up for further
                    clarifications.</p>
                </div>
              </div>
            </div>
          </li>
          <br><br>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="doc1.jpg" alt="image" style="width:100%">
              </div>
              <div class="carousel-item">
                <img src="doc3.jpg" alt="image" style="width:100%">
             </div>
              <div class="carousel-item">
                <img src="doc7.jpg" alt="image" style="width:100%">
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
          </div><br>
          <hr>
          <center>
            <h3 style="font-weight:bold;font-family:verdana;color:red;text-shadow:2px 2px 3px black;" id="con">
              Consultants</h3>
          </center><br>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="card" id="covid">
                <img src="doc8.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                  <h4><b>COVID Consultants</b></h4>
                  <p><a href="covid.html">Nearby COVID consultants</a></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="card" id="psy">
                <img src="doc9.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                  <h4><b>Counseling Consultants</b></h4>
                  <p><a href="counseling.html">Nearby Counseling consultants</a></p>
                </div>
              </div>
            </div>
          </div>
          <br>
          <hr>
          <center>
            <h3 style="font-weight:bold;font-family:verdana;color:red;text-shadow:2px 2px 3px black;" id="gal">Gallery
            </h3>
          </center>
            <div class="row">
              <div class="col-12 col-md-6">
                <img src="./for Gallery/i2.jfif" class="w-100">
              </div>
              <div class="col-12 col-md-6">
                <img src="./for Gallery/i3.jpg" class="w-100">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6">
                <video controls class="w-100"> <source src="./for Gallery/video1.mp4" class="w-100" type="video/mp4"></video>
              </div>
              <div class="col-12 col-md-6">
                <video controls class="w-100"> <source src="./for Gallery/video2.mp4" class="w-100" type="video/mp4"></video>
              </div>
              <div class="col-12 col-md-6">
                <video controls class="w-100"> <source src="./for Gallery/video3.mp4" class="w-100" type="video/mp4"></video>
              </div>
              <div class="col-12 col-md-6">
                <video controls class="w-100"> <source src="./for Gallery/video4.mp4" class="w-100" type="video/mp4"></video>
              </div>
              <div class="col-12 col-md-6">
                <video controls class="w-100"> <source src="./for Gallery/video5.mp4" class="w-100" type="video/mp4"></video>
              </div>
              <!-- <div class="col-12 col-md-6">
                <iframe class="w-100"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
              </div> -->
            </div>
          <br>
          <hr>
          <center>
            <h3 style="font-weight:bold;font-family:verdana;color:red;text-shadow:2px 2px 3px black;" id="faq">FAQs</h3>
          </center><br>
          <div class="row">
            <div class="col-12 col-md-6">
              <ul>
                <li>
                  <h5>During the online doctor consultation, the audio/video was not clear !</h5>
                </li>
                <p>This may happen due to poor internet connectivity or due to some technical glitch. In such cases,
                  please check your internet connection.</p>
                <li>
                  <h5>Where is my prescription for the online doctor consultation ?</h5>
                </li>
                <p>You'll get your prescription file via email to your email-id. Once you get the email, you'll be able
                  to view/download your prescription by clicking
                  on the file.</p>
                <li>
                  <h5>How do I pay for the online doctor consultations ?</h5>
                </li>
                <p>Online consultations are prepaid and the payment can be made by either of the given ways - Paytm,
                  Debit/Credit Card and Netbanking.</p>
                <li>
                  <h5>What happens if my call gets disconnected during the consultation ?</h5>
                </li>
                <p>If your audio/video call gets disconnected during the online consultation, you would receive another
                  call within a few minutes provided your internet
                  connection is stable.</p>
                <li>
                  <h5>Will my e-prescription be valid for offline pharmacies ?</h5>
                </li>
                <p>Yes. The e-prescription will be valid for offline pharmacies as well.</p>
              </ul>
            </div>
            <div class="col-12 col-md-6">
              <ul>
                <li>
                  <h5>Will I get a refund if I cancel the online doctor consultation ?</h5>
                </li>
                <p>Yes. If you cancel the online consultation, the refund for the same will reflect in your account
                  within 5 to 7 working days.</p>
                <li>
                  <h5>What is a specialist doctor ?</h5>
                </li>
                <p>A doctor who has done a specialization/training in a specific area of medicine after completing
                  his/her M.B.B.S degree is known as a Specialist
                  doctor. He/She can treat complex health issues which a primary doctor may be unable to.</p>
                <li>
                  <h5>For how longcan I speak to the doctor ?</h5>
                </li>
                <p>Once you book an appointment you will get 15 to 20 minutes (varies) to speak to the doctor.</p>
                <li>
                  <h5>Can I share prescriptions/test reports during my consultation ?</h5>
                </li>
                <p>Yes. You have an option to share your prescriptions and test reports with the doctor during an online
                  consultation.</p>
                <li>
                  <h5>I missed the consultation call from the doctor. What do I do ?</h5>
                </li>
                <p>If you've missed a call from the doctor, you can go the chat window and request a call by simply
                  chatting with the doctor. In case the doctor is
                  unavailable, you can reschedule the consultation.</p>
              </ul>
            </div>
          </div>
          <hr>
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


  <script src="../js/scroller.js"></script>


</body>

</html>