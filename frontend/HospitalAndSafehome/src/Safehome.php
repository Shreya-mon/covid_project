<?php
include("connection.php");
?>
<!DOCTYPE html><!--4th page or 3rd subpage-->
<html lang="en">
<head>
     <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Care</title>
    <link rel="icon" href="../../images/logo.jpg" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Safehome.css?V=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/SafehomeMobile.css?V=<?php echo time(); ?>">    
</head>
<body>
    <header>
        <a href="Hospital.php" class="previous" id="bed"><i class="arrow left"></i></a>
        <div class="container text-center">
            <div class="col-md-12 col-sm-12">
                <h1>Check Safe Home Availability</h1>
            </div>
        </div>
    </header>
    <main>
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel1"><!--1st panel-->
                            <h1>Safe Home Bed Availability Status</h1>
                              <p>
                                Safe home/Satellite Facility is a facility for asymptomatic patients who does not need specialized care. The person who does not have space at home for isolation or home quarantine may also avail the facility at the Safe Homes/Satellite Facility. The Safe Home/Satellite Facilities Authorities have been requested to update their vacancy status in the portal as frequently as possible and at least twice daily at 12 Noon and 6 PM. Safe Homes/Satellite Facilities also have provision of regular visits by medical officers to assess the patient???s condition and cause timely referral to specialized CoVID hospital facility, if required.

                                For applying for an admission in a government and government requisitioned hospitals, you may fill online form for the admission (by clicking on yellow coloured icon). For filling online forms for admission, you must have a CoVID positive report applicable as per recent protocol ordered by health department ready in your hand and the mobile number which was provided at the time of conducting RT PCR tests.
                               </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel text-left"><!--2nd panel-->
                            <form action="#table" method="post">
                                <label class="select">Select District:</label>
                                    <select name="choice">
                                        <option value="">Select</option>
                                        <option value="alipurduar">ALIPURDUAR</option>
                                        <option value="bankura">BANKURA</option>
                                        <option value="birbhum">BIRBHUM</option>
                                        <option value="coochbehar">COOCHBEHAR</option>
                                        <option value="dakshin 24 pargana">DAKSHIN 24 PARGANA</option>
                                        <option value="dakshin dinajpur">DAKSHIN DINAJPUR</option>
                                        <option value="darjeeling">DARJEELING</option>
                                        <option value="hooghly">HOOGHLY</option>
                                        <option value="howrah">HOWRAH</option>
                                        <option value="jalpaiguri">JALPAIGURI</option>
                                        <option value="jhargram">JHARGRAM</option>
                                        <option value="kalimpong">KALIMPONG</option>
                                        <option value="kolkata metropolitan area">KOLKATA METROPOLITAN AREA</option>
                                        <option value="malda">MALDA</option>
                                        <option value="murshidabad">MURSHIDABAD</option>
                                        <option value="nadia">NADIA</option>
                                        <option value="paschim bardhaman">PASCHIM BARDHAMAN</option>
                                        <option value="paschim medinipur">PASCHIM MEDINIPUR</option>
                                        <option value="purba bardhaman">PURBA BARDHAMAN</option>
                                        <option value="purba medinipur">PURBA MEDINIPUR</option>
                                        <option value="purulia">PURULIA</option>
                                        <option value="uttar 24 pargana">UTTAR 24 PARGANA</option>
                                        <option value="uttar dinajpur">UTTAR DINAJPUR</option>
                                    </select><br><br>
                                <input type="submit" name="submit" value="Submit" class="btn btn-dark px-5 py-2 mb-5">
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <?php 
            if(isset($_REQUEST['submit']) && ($_REQUEST['submit']=='Submit')){
                $district=$_POST['choice'];
            $sql="SELECT * FROM `safehome_db` WHERE `district`= '$district'";
            $result=mysqli_query($link,$sql);
        ?>
        <table id="table">
		 <tr id="header">
		    <th>Safehome name</th>
			<th>Bed Capacity</th>
			<th><strong>Bed Available</th>
		    <th><strong>Contact number</th>
		    <th><strong>Email</th>
		    <th><strong>Address</th>
		    <th><strong>District</th>
          </thead>
          <?php
                if(mysqli_num_rows($result)>0){

                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$row["shname"]."</td>";
						echo "<td>".$row["bed_capacity"]."</td>";
						echo "<td>".$row["bed_available"]."</td>";
                        echo "<td>".$row["phno"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["address"]."</td>";
                        echo "<td>".$row["district"]."</td>";
                        echo "</tr>";
                    }
           ?>
	        <?php }
                else {  echo '<tr><td colspan="7" style="color:red; text-align:center;">No record found</td></tr>'; }
            }
            ?>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</body>
</html>