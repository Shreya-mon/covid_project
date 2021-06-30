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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>
    <script src="jqueryV3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

  <link rel="stylesheet" href="css/styles.css">
  <style type="text/css">
    #rating{
      margin-left:3vmin;
    }
  .nav-link{
    color: white !important;
  }
  .active{
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
      <a class="navbar-brand" href="index.html"><img class="logo w-100" src="./images/project_logo.png" /></a>
      <ul class="nav navbar-nav d-none d-lg-flex w-100">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="sign.php">Sign in/Sign up</a>
        </li>
        <div class="d-flex ml-auto">
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="../admin.html">Admin Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="help.php">Help Desk</a>
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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
            <a class="nav-link active" aria-current="page" href="index.php">Help Desk</a>
          </li>
          <li class="nav-item d-sm-flex d-lg-none">
            <a class="nav-link" aria-current="page" href="sign.php">Sign in/Sign up</a>
          </li>
          <li class="nav-item d-sm-flex d-lg-none">
            <a class="nav-link" aria-current="page" href="index.php">Admin Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Feedback Modals -->
  <div class="modal fade" id="FeedbackModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">SUBMIT YOUR FEEDBACK</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <form class="row" action="feedback_data_insert.php" method="post">
            <div class="col-12 mt-1 ">
              <label for="Name of NGO" class="form-label">Name: </label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" required>
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
              <label for="rating" class="form-label">Rate Our Website</label>
            </div>
            <div class="rateyo" id="rating" 
				          data-rateyo-rating="0"
				          data-rateyo-num-stars="5"
				          data-rateyo-score="3">
		        </div>
		        <br><br>
		        <input type="hidden" name="rating">

            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Description:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Give Your Valuable Suggestions Here"></textarea>           
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>
      </div>
    </div>
  </div>
  </form>
  <!--modal close-->
  <!--Fake information Modals -->
  <div class="modal fade" id="FakeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Report Fake Info</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <form class="row">
            <div class="col-12 mt-1 ">
              <label for="Name" class="form-label">Name: </label>
              <input type="text" class="form-control" name="nameOfoxygen" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="addressOfoxygen" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Email" class="form-label">Email</label>
              <input type="email" class="form-control" name="emailOfoxygen" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Phone Number" class="form-label">Phone Number</label>
              <input type="number" class="form-control" name="phoneNoOfoxygen" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Description:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe the problem you faced"></textarea>
            </div>
            <div class="col-12 mt-1">
              <label for="Certificate as a proof" class="form-label">Photo as a proof</label>
              <input type="file" class="form-control" name="certificateOfoxygen" id="formFile">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <!--modal close-->
  <!--Query Modals -->
  <div class="modal fade" id="QueryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">SUBMIT YOUR QUERY</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <form class="row">
            <div class="col-12 mt-1 ">
              <label for="Name of NGO" class="form-label">Name: </label>
              <input type="text" class="form-control" name="nameOfoxygen" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="addressOfoxygen" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Email" class="form-label">Email</label>
              <input type="email" class="form-control" name="emailOfoxygen" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Phone Number" class="form-label">Phone Number</label>
              <input type="number" class="form-control" name="phoneNoOfoxygen" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Description:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Quries here"></textarea>            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <!--modal close-->
  <div class="container mt-3 center">
    <div class="row center-center p-2">
      <div class="col-12 col-md-10">
       <h1 class="mt-2"><b>Help Desk</b> </h1>
      </div>
      
      <div class="center-center">
        <img src="images/help1.gif" style="width: 70%;">
      </div>
      <div>Thank you for using our website. We hope that this website helps you a little bit more and that is where we are successfull.
       We tried to help you as much we can and Yess! we are improving our website day by day. So if you have any kind of queries of if 
       there is some thing we can add to make our website more usefull, please give some suggestions.
      </div>
    </div>
    <br>
    <div class="row col-md-12 mb-3">
      <h3 class="mr-2">Please give us your valuable feedback here:</h3>
      <button type="button" class="btn btn-primary ml-4" data-bs-toggle="modal" data-bs-target="#FeedbackModal">
        Click
      </button>
    </div>
    <div class="row col-md-12">
      <div class="col-md-6">
        <p>We tried to help you with all the necessary things that are needed specially in this time. Although we know that 
        nothing is perfect in the world, mistakes are made by everyone. So we want review form you to know about the pros and cons 
        of our website. Feedback is the only thing from where we can connect with you. We would love to hear your experiences in 
        our website with us. If there is any kind of help you need or have any kind of complaint, tell us without any hesitation.
        So if you take some time out of your busy routine, it will be very helpful for us to improve.
        </p>
      </div>
      <div class="col-md-6 ">
        <img src="./images/help2.gif" class=" w-100">
      </div>
    </div>
    <div class="row col-md-12 mt-5 mb-3" id="fake">
      <h3 class="mr-2">Report Here if you find any kind of Fake information: </h3>
      <button type="button" class="btn btn-primary ml-4" data-bs-toggle="modal" data-bs-target="#FakeModal">
        Click
      </button>
    </div>
    <div class="row col-md-12">
      <div class="col-md-6 ">
        <img src="./images/help3.jpg" class=" w-100">
      </div>
      <div class="col-md-6 ">
        <p>In many of our pages we provides so many providers details whether a oxygen supplier or a donor or a ngo etc. 
        In this difficult time we all are trying to help everyone as much as we can, but at this hard time also there are some 
        bad people who are cheating others for their own benifit. We are strongly against of that. So if you find any kind of 
        fake informations or someone harrassed you by taking money and not giving services report here. Tell all the details that 
        happened to you in the description. We could try as much as we can. 
        </p>
      </div>
    </div>
    <div class="row col-md-12 mt-5 mb-3">
      <h3 class="mr-2" id="query">Submit Your Queries Here: </h3>
      <button type="button" class="btn btn-primary ml-4" data-bs-toggle="modal" data-bs-target="#QueryModal">
        Click
      </button>
    </div>
    <div class="row col-md-12">
      <div class="col-md-6">
        <p>We know there are plenty of questions you have in your head about Covid. We tried to solve all queries as much as we can,
         specially those most asked questions. If you still have some questions please let us know. We will try to solve all your 
         queries if we can. We will upload the answers in our website or sending you through mail. Please keep a look on our website
         frequently. 
        </p>
      </div>
      <div class="col-md-6 mb-5 ">
        <img src="./images/help4.jpg" style="width: 60%;">
      </div>
    </div>
  </div>
  </div>
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
<!--Rating using jquery-->
  <script>
	$(function(){
		$(".rateyo").rateYo().on("rateyo.change", function(e,data){
			//var starWidth = $(".rateyo").rateYo("option", "starWidth"); 
			//$(".rateyo").rateYo("option", "starWidth", "30px");

			var rating = data.rating;
			$(this).parent().find('.score').text('score:'+ $(this).attr('data-rateyo-score'));
			//$(this).parent().find('.result').text('rating:' + rating);
			$(this).parent().find('input[name=rating]').val(rating);
			
		});

	});
</script>
 
</body>

</html>
