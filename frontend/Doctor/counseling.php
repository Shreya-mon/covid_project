<?php  // Display doctor data 
include("../connection.php");?>
<!DOCTYPE html>
<html>

<head>
	 <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Covid Care</title>
	<link rel="icon" href="../images/logo.jpg" type="image/png">
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
	<link rel="stylesheet" href="styles3.css?V=<?php echo time(); ?>">
</head>

<body>
	<header>
		<a href="consult.php" class="previous" id="covid"><i class="arrow left"></i></a>
		<div class="container text-center">
			<div class="col-md-12 col-sm-12">
				<h1>Counseling Consultants</h1>
			</div>
		</div>
	</header>
	<br>
	<div class="container">
		<div class="row p-2">
			<div class="col-12 col-md-6 s6">
				<center><img src="doc6.jpg" alt="image" style="width:80%;"></center>
				<h5>What is counselling ?</h5>
				<p style="font-size:14px;">Counselling falls under the umbrella term ‘talking therapies’ and allows
					people
					to discuss their problems and any difficult feelings
					they encounter in a safe, confidential environment. The term can mean different things to different
					people, but in general, it is a process people seek when
					they want to change something in their lives, or simply explore their thoughts and feelings in more
					depth.</p>
				<h5>What are the signs where Depression Counselling is indicated ?</h5>
				<p style="font-size:14px;">Few of the signs of an individual who requires Depression Counselling are:
				<ul>
					<li>Lack of interest in things an individual was interested in</li>
					<li>Crying or tearful for no reason</li>
					<li>Feeling restless or irritated</li>
					<li>A feeling of being worthless</li>
					<li>Confused or hard to concentrate or recall things</li>
					<li>Tiredness</li>
					<li>Headaches, back pains, digestive disorders, etc.</li>
					<li>Broken sleep or desire to sleep all-day</li>
					<li>Suicidal thoughts</li>
				</ul>
				</p>
				<h5>What causes depression ?</h5>
				<p style="font-size:14px;">A human body is controlled by hormones and these hormones determine the mood
					of
					an individual. Depression can be caused due to a
					lack of production or the body’s ability to act according to the hormone.<br>> Depression can also
					be
					genetic.<br>> Drug abuse, alcoholism, etc, can also lead to
					depression.<br>> Prolonged illness, hospital stay, retirement, losing a loved one can cause
					depression.
				</p>
			</div>
			<div class="col-12 col-md-6 s6">
				<div id="grad1">
					<center>
						<form style="margin-top:55px;"  action="#table" method="POST">
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
				<h5>How much does Depression Counselling cost ?</h5>
				<p style="font-size:14px;">Depression Counselling cost depends upon the following factors:
				<ol>
					<li>Age of the patient</li>
					<li>Experience of the specialist</li>
					<li>Number sessions to be taken</li>
				</ol>
				</p>
				<p style="font-size:14px;">However, the cost of Depression Counselling per session is around Rs.500 to
					Rs.5,000</p>
				<h5>What can counselling help with ?</h5>
				<p style="font-size:14px;">Counselling can be useful for anyone who wants to explore the way they're
					thinking or feeling further, as well as for anyone
					experiencing a problem or issue they are keen to resolve. People may choose to speak to a counsellor
					because they feel they cannot speak to their other
					half/friends/family about such personal issues, or they may simply wish to speak to a professional
					with
					an objective viewpoint.</p>
				<h5>Who are the specialists to conduct Depression Counselling ?</h5>
				<p style="font-size:14px;">A certified and well-experienced Psychologist, Psychiatrist, counsellor,
					social
					worker or therapist can perform Depression Counselling.</p>
				<h5>What are the different types of Depression Treatments ?</h5>
				<p style="font-size:14px;">
					> Cognitive behavioural therapy<br>
					> Depression counselling<br>
					> Mindfulness-based cognitive therapy<br>
					> Interpersonal therapy<br>
					> Psychodynamic therapy<br>
					> Group therapy<br>
					> Art therapy<br>
					> Medication therapy<br>
				</p>
			</div>
		</div>
	</div><br><br>

    <?php
              if(isset($_REQUEST['submit']) && ($_REQUEST['submit']=='Submit')){
                    $district = $_REQUEST['district_choice'];
                    $sql="SELECT * FROM `doctor_db` WHERE `cat_id`=2 AND `district`= '$district'";
                    $result = mysqli_query($link,$sql);
            ?>
                <div class="container  mt-5">
                    <div class="row mt-3 mytable">
                            <table class="table" id="table">
                                <thead class="thead-light" style="text-align:center;">
                                    <tr>
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
                                    else {  echo '<tr><td colspan="7" style="color:red; text-align:center;">No record found</td></tr>'; }
                                }
                            ?>
                                </tbody>
                            </table>
                    </div>
                </div>
</body>

</html>