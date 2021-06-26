<?php  // Display service provider data 
include("connection.php");?>

<!DOCTYPE html>
<html>
<title>Covid-19</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css"
  integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
  integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/styles.css">

</style>

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
            <a class="nav-link active" aria-current="page" href="ngo-charity.php">NGO and Charity</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="help.php">Help Desk</a>
          </li>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container mt-3 center">
      <div class="row center-center ">
        <h2><b>NGO AND CHARITY</b></h2>
      </div>
      <div class="row center-center">
        <h6>"Service to others is the rent you pay for " <span>your room here on earth.</span></h6>
      </div>
    </div>
  </header>
  <!--picture-->
  <div class="container mt-2">
    <div class="row">
      <div class="col-12 col-md-7 mt-1">
        <img src="./images/ngo1.png" class="w-100">
      </div>
      <div class="col-12 col-md-4 mt-1">Charity is the act of extending love and kindness to others unconditionally,
        which is a conscious act but the decision is made by the heart, without expecting a reward. When Charity is
        carried out selflessly, it is a one-way act where a person gives but asks for nothing in return.Charity play an
        essential role in society. A charity helps people realize that
        it is possible to bless others in a world full of uncertainities and chaos. The primary objective of NGOs is to
        provide social justice, development and
        human rights.</div>
    </div>
  </div>
  <!-- NGO Modals -->
  <div class="modal fade" id="ngoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTER AS AN NGO</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">


          <form class="row" action="insert_ngo_registration_form_data.php" method="post" name="insert_ngo_registraion_frm" enctype="multipart/form-data">
            <div class="col-12 mt-1 ">
              <label for="Name of NGO" class="form-label">Name of NGO</label>
              <input type="text" class="form-control" name="nameOfNGO" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="addressOfNGO" required>
            </div>
            <div class="col-12 mt-1">
              <label for="district">District</label>
              <select name="dist" id="dist" class="form-control">
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
              <input type="text" class="form-control" name="phoneNoOfNGO" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
              <input type="file" class="form-control" name="certificateOfNGO" id="formFile">
            </div>
            <div class="col-12 mt-1">
              <label for="Helping Categories" class="form-label">Helping Categories</label>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfNGO" type="checkbox" value="food">
                <label class="form-check-label" for="flexCheckDefault">
                  Food
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfNGO" type="checkbox" value="books">
                <label class="form-check-label" for="flexCheckChecked">
                  Books
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfNGO" type="checkbox" value="medicine">
                <label class="form-check-label" for="flexCheckChecked">
                  Medicine
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfNGO" type="checkbox" value="financially">
                <label class="form-check-label" for="flexCheckChecked">
                  Financially
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfNGO" type="checkbox" value="other">
                <label class="form-check-label" for="flexCheckChecked">
                  Other
                </label>
              </div>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <input type="submit" name="submit" class="btn btn-primary" value="Register">
        </div>
      </div>
    </div>
  </div>
   </form>




  <!-- INDIVIDUAL MODEL -->
  <div class="modal fade" id="indModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTER AS AN INDIVIDUAL</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">

          <form class="row" action="insert_ngo_registration_form_individual_data.php" method="post" name="insert_ngo_registraion_individual_frm">
            <div class="col-12 mt-1 ">
              <label for="First Name" class="form-label">First Name</label>
              <input type="text" class="form-control" name="firstNameOfInd" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="addressOfInd" required>
            </div>
            <div class="col-12 mt-1">
              <label for="district">District</label>
              <select name="dist" id="dist" class="form-control">
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
              <input type="text" class="form-control" name="phoneNoOfInd" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
              <input type="file" class="form-control" name="certificateOfInd" id="formFile">
            </div>
            <div class="col-12 mt-1">
              <label for="Helping Categories" class="form-label">Helping Categories</label>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfInd" type="checkbox" value="food">
                <label class="form-check-label" for="flexCheckDefault">
                  Food
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfInd" type="checkbox" value="books">
                <label class="form-check-label" for="flexCheckChecked">
                  Books
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfInd" type="checkbox" value="medicine">
                <label class="form-check-label" for="flexCheckChecked">
                  Medicine
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfInd" type="checkbox" value="financially">
                <label class="form-check-label" for="flexCheckChecked">
                  Financially
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfInd" type="checkbox" value="other">
                <label class="form-check-label" for="flexCheckChecked">
                  Other
                </label>
              </div>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <input type="submit" name="submit" class="btn btn-primary" value="Register">
        </div>
      </div>
    </div>
  </div>
</form>



  <!-- HELP MODEL -->
  <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REQUEST FOR HELP</h5>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">


          <form class="row" action="insert_ngo_help_form_data.php" method="post">
            <div class="col-12 mt-1 ">
              <label for="First Name" class="form-label">Name</label>
              <input type="text" class="form-control" name="firstNameOfInd" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Address" class="form-label">Address</label>
              <input type="text" class="form-control" name="addressOfInd" required>
            </div>
            <div class="col-12 mt-1">
              <label for="district">District</label>
              <select name="dist" class="form-control" id="dist">
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
              <input type="text" class="form-control" name="phoneNoOfInd" required>
            </div>
            <div class="col-12 mt-1">
              <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
              <input type="file" class="form-control" name="certificateOfInd" id="formFile">
            </div>
            <div class="col-12 mt-1">
              <label for="description" class="form-label">Description:</label><br>
              <textarea name="description" rows="5" class="form-control"></textarea>
              
            </div>
            <div class="col-12 mt-1">
              <label for="Helping Categories" class="form-label">What Kind Of Help You Need: </label>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfInd" type="checkbox" value="food">
                <label class="form-check-label" for="flexCheckDefault">
                  Food
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfInd" type="checkbox" value="books">
                <label class="form-check-label" for="flexCheckChecked">
                  Books
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfInd" type="checkbox" value="medicine">
                <label class="form-check-label" for="flexCheckChecked">
                  Medicine
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfInd" type="checkbox" value="financially">
                <label class="form-check-label" for="flexCheckChecked">
                  Financially
                </label>
              </div>
              <div class="mt-1 ml-3 form-check">
                <input class="form-check-input" name="helpingCategoriesOfInd" type="checkbox" value="other">
                <label class="form-check-label" for="flexCheckChecked">
                  Other
                </label>
              </div>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <input type="submit" name="submit" class="btn btn-primary" value="Register"> 
        </div>
      </div>
    </div>
  </div>
   </form>

  <div class="container mt-3 mb-5 ">

    <div class="row mt-2 mb-5 d-flex justify-content-around" style="border: 1px solid gray">
      <h2 class="col-12 center p-2" style="background-color:rgb(174, 219, 236);">Registration Forms</h2>
      <button type="button" class="btn btn-success  mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#ngoModal">
        REGISTER AS AN NGO
      </button>

      <button type="button" class="btn btn-success  mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#indModal">
        REGISTER AS AN INDIVIDUAL
      </button>
    </div>
    <div class="row mt-4">
      <div class="container">
        <h1 class="center" id="row8">Details Of Some N.G.O</h1>
        <div class="row mt-3">
          <div class="col-md-7">
            <h2>Khaana Chahiye</h2>
            <p>Khaana Chahiye Foundation started as a citizen-led campaign in March 2020 to meet the immediate,
              lockdown-induced food demands of the homeless, migrant workers, daily wage laborers, and other vulnerable
              populations in the city of Mumbai</p>
            <p>Email: contact@khaanachahiye.com</p>
            For more Details:
            <a href="https://www.khaanachahiye.com/">www.khaanachahiye.com</a>
          </div>
          <div class="col-md-4 center-center">
            <img class="w-100" src="images/ngo2.jpg">
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-7">
            <h2>Uday Foundation</h2>
            <p>The Uday Foundation is a non-profit organization based in New Delhi, India. disaster relief. It is
              starting a campaign #StayWell to make and distribute at least 10,000 Wellness Kits – comprising some basic
              over the counter medicines, a tetra-pack of healthy drink such as ORS, oximeter, etc.
            </p>
            <p>Email: info@udayfoundation.org</p>
            For more Details:
            <a href="https://www.udayfoundation.org/">www.udayfoundation.org</a>
          </div>
          <div class="col-md-4 center-center">
            <img class="w-100" src="images/ngo4.jpg">
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-7">
            <h2>FINFID</h2>
            <p>FINFID has worked hard all through these years to address the largest social issues like EDUCATION,
              HEALTH
              & NATURE.On November 2014, they started the journey. Their work has drawn on a large number of people over
              time, especially
              students, and we are now a West Bengal Government registered SELF FUNDED Voluntary Social Welfare
              Organization ( S0016120 ) with 100+ members working in 5 districts of West Bengal in 2020.
              During these 6 years, few social issues were identified and projects were undertaken to overcome them.
              GYANPEETH-
              Provide proper educational opportunities to the students from indigent families.
              BOTOBHUMI-
              Create awareness to protect our environment.
              SANJEEVANI-
              Create a live blood bank.
              ABOSHAR-
              Taking care of elderly people staying Oldage Homes.
              SHAKTI RUPENA SANASTHITA-
              Empowering women for making decision through Capacity building
            </p>
            <p>Email: finfid2k14@gmail.com</p>
            For more Details:
            <a href="https://www.facebook.com/FINFIDians/">FINFID Official Page</a>
          </div>
          <div class="col-md-4 center-center">
            <img class="w-100" src="images/ngo5.jpg">
          </div>
        </div>
        <p>
        <h2>For More Detailed Information about NGOs: </h2>
        <a href="https://www.investindia.gov.in/bip/resources/list-ngos-providing-relief-during-covid-19" target="__blank"><button
            type="button" class="btn btn-primary ml-2">Click
            Here</button></a>
        </p>
      </div>
    </div>

    <div class="h3 mt-5 p-2">
          Search Here for your nearby NGO Services:</div>
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
        <h3>Some NGO List</h3>
      </div>
      <div class="row mt-3">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Name</th>
              <th scope="col">Address</th>
              <th scope="col">Contact Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>

    <div class="row mt-4">
      <div class="col-12 d-flex">
        <h3>REQUEST FOR HELP</h3>
        <button type="button" class="btn btn-primary ml-4" data-bs-toggle="modal" data-bs-target="#helpModal">
          REQUEST FORM
        </button>
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


  <script src="./js/scroller.js"></script>



</body>

</html>