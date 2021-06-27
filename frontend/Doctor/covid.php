<?php  // Display doctor's data 
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




  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="styles2.css">
</head>

<body>
  <header>
    <a href="consult.php" class="previous" id="covid"><i class="arrow left"></i></a>
    <div class="container text-center">
      <div class="col-md-12 col-sm-12">
        <h1>COVID Consultants</h1>
      </div>
    </div>
  </header>
  <br>
  <div class="container">
    <div class="row p-2">
      <div class="col-12 col-md-6 s6">
        <center><img src="doc5.png" alt="image" style="width:80%;"></center>
        <h5>Covid Consultation</h5>
        <p style="font-size:14px;">COVID-19 is a disease caused by SARS-CoV-2 that can trigger what doctors call a
          respiratory tract infection. It can affect your upper respiratory tract
          (sinuses, nose, and throat) or lower respiratory tract (windpipe and lungs). COVID-19 is caused by a new
          strain
          of coronavirus. ‘CO’ stands for corona,
          ‘VI’ for virus, and ‘D’ for disease. This disease was earlier referred to as ‘2019 novel coronavirus’. India
          is
          currently experiencing a second wave of
          COVID-19 cases. The death toll of COVID-19 in India is the second highest in the world. Consider an online
          COVID
          consultation with an expert Doctor
          if your symptoms persist.</p>
      </div>
      <div class="col-12 col-md-6 s6">
        <div id="grad1">
          <center>
            <form style="margin-top:55px;" action="#table" method="POST">
              <div style="padding-top:120px;">
                <label>Select district:</label>
                <select name="district_choice">
                  <option>Select</option>
                  <option>ALIPURDUAR</option>
                  <option>BANKURA</option>
                  <option>BIRBHUM</option>
                  <option>COOCHBEHAR</option>
                  <option>DAKSHIN 24 PARGANA</option>
                  <option>DAKSHIN DINAJPUR</option>
                  <option>DARJEELING</option>
                  <option>HOOGHLY</option>
                  <option>HOWRAH</option>
                  <option>JALPAIGURI</option>
                  <option>JHARGRAM</option>
                  <option>KALIMPONG</option>
                  <option>KOLKATA</option>
                  <option>MALDA</option>
                  <option>MURSHIDABAD</option>
                  <option>NADIA</option>
                  <option>PASCHIM BARDHAMAN</option>
                  <option>PASCHIM MEDINIPUR</option>
                  <option>PURBA BARDHAMAN</option>
                  <option>PURBA MEDINIPUR</option>
                  <option>PURULIA</option>
                  <option>UTTAR 24 PARGANA</option>
                  <option>UTTAR DINAJPUR</option>
                </select><br>
                <input type="submit" name="submit" class="btn" value="Submit">
              </div>
            </form>
          </center>
        </div>
        <br><br>
        <h5>You can consult a Covid Consultation if :</h5>
        <ul>
          <li>You have symptoms like fever, body ache, dry cough or shortness of breath.</li>
          <li>You are diabetic, have heart conditions or co-morbidities that may put you at a higher risk of developing
            severe COVID symptoms.</li>
          <li>You have unexplained fatigue, chills, nausea, diarrhea or loss of smell and taste.</li>
        </ul>
      </div>
    </div>
  </div>
  <br><br>
  <div class="container  mt-5">
        <div class="row mt-3 mytable">
              <table class="table" id="table">
                  <?php
                    if(isset($_REQUEST['submit']) && ($_REQUEST['submit']=='Submit'))
                    {
                      $dis = $_REQUEST['district_choice'];
                      $sql = "SELECT * FROM `doctor_db` WHERE `cat_id`= 1 and `district`='$dis'";
                      $result = mysqli_query($link,$sql);?>
                      <thead class="thead-light">
                      <tr style="text-align:center;">
                        <th scope="col">Serial No.</th>
                        <th scope="col">Doctor's Name</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">District</th>
                        <th scope="col">Additional information</th>
                      </tr>
                    </thead>
                    <tbody>
              <?php   if(mysqli_num_rows($result) > 0)
                      {
                          $count=1;
                          while($row = mysqli_fetch_assoc($result))
                          {
                            echo "<tr>";
                            echo "<td align = 'center'>".$count."</td>";
                            echo "<td align = 'center'>".$row["dname"]."</td>";
                            echo "<td align = 'center'>".$row["phno"]."</td>";
                            echo "<td align = 'center'>".$row["email"]."</td>";
                            echo "<td align = 'center'>".$row["address"]."</td>";
                            echo "<td align = 'center'>".$row["district"]."</td>";
                            echo "<td align = 'center'>".$row["doctors_additional_info"]."</td>";
                            echo "</tr>";
                            $count++;
                          }
                      }
                      else{echo '<tr><td colspan="7" style="color:red; text-align:center;">No record found</td></tr>';}
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>






</body>

</html>

