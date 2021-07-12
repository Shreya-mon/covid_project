<?php  // userpanel 
include("connection.php");
session_start();
$email= $_SESSION['email'];
// $_SESSION['success'] ="FORM SUBMITTED!";
?>

<!DOCTYPE html>
<html>

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/styles.css" />

</head>
<style>
    body {
        background-color: rgb(238, 238, 238);
    }

    .card-img-top {
        max-height: 180px;
        color: #148496;
    }

    h1 {
        background-color: #19b6ceb4;
        color: white;
        text-decoration: black;
        padding: 1%;
    }

    h3 {
        background-color: #a4bfc4b4;
        border-left: 6px solid rgb(132, 0, 255);
        color: rgb(255, 255, 255);
        padding: 1%;
    }

    .nav-link {
        color: white !important;
    }

    .active {
        color: black;
        background-color: #148496;
    }
</style>

<body>
    <script src="sweetalert.min.js"></script>
    <!--Donor Modals -->
    <div class="modal fade" id="DonorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DONATE BLOOD</h5>
                    <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form class="row" action="#" method="POST" enctype="multipart/form-data">
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
                            Gender: &nbsp;Male <input type="radio" value="Male" name="gender"> Female <input
                                type="radio" value="Female" name="gender"> Other <input type="radio" value="Other"
                                name="gender" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="">Blood Group</label>
                            <select class="form-control" name="bgrp" required>
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
                            <select class="form-control" name="dist" id="dist" required>
                                <option value="">Select</option>
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
                            <select class="form-control" name="freq" required>
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
                    <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form class="row" action="#" method="POST" enctype="multipart/form-data">
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
                            Gender: &nbsp;Male <input type="radio" value="Male" name="gender"> Female <input
                                type="radio" value="Female" name="gender"> Other <input type="radio" value="Other"
                                name="gender" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="">Blood Group</label>
                            <select class="form-control" name="bgrp" required>
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
                            <select class="form-control" name="dist" id="dist" required>
                                <option value="">Select</option>
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
                            <button type="submit" class="btn btn-primary" value="Register" name="submit1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Oxygen Modals -->
    <div class="modal fade" id="oxygenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTER AS AN OXYGEN SUPPLIER</h5>
                    <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form class="row" action="#" method="POST" enctype="multipart/form-data">
                        <div class="col-12 mt-1 ">
                            <label for="Name" class="form-label">Name: </label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-12 mt-1">
                            Applying as a : &nbsp;Individual person <input type="radio"  value="Individual person"
                                name="person"> Organisation <input type="radio"  value="Organisation" name="person">
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="district">District</label>
                            <select class="form-control" name="dist" id="dist">
                                <option value="">Select</option>
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
                            <input type="text" class="form-control" name="phno" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
                            <input type="file" class="form-control" name="cert" id="formFile">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" value="Register" name="submit2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--modal close-->

    <!--Healthcare Modal-->
    <div class="modal fade" id="HealthcareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTER AS AN HEALTHCARE VOLUNTEER</h5>
                    <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form class="row" action="#" method="POST" enctype="multipart/form-data">
                        <div class="col-12 mt-1 ">
                            <label for="Name of volunteer" class="form-label">Name: </label>
                            <input type="text" class="form-control" name="nameOfvolunteer" required>
                        </div>
                        <div class="col-12 mt-1">
                            Applying as a: &nbsp;Individual person <input type="radio" name="person" value="Individual person"> Team <input
                                type="radio" name="person" value="Team">
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="addressOfvolunteer" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="district">District</label>
                            <select class="form-control" name="dist" id="dist" required>
                                <option value="">Select</option>
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
                            <input type="text" class="form-control" name="phoneOfvolunteer" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Certificate as a proof" class="form-label">Certificate as a proof</label>
                            <input type="file" class="form-control" name="certificateOfvolunteer" id="formFile">
                        </div>
                         <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    
                     <input type="submit" name="submit3" id="submit " class="btn btn-primary" value="Register">
                     </div>
                    </form>
               
               
                   
                </div>
            </div>
        </div>
    </div>
    <!--modal close-->
    <!--Meal Modals -->
    <div class="modal fade" id="MealModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTER FOR MEAL SERVICE</h5>
                    <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form class="row" action="#" method="POST" enctype="multipart/form-data">
                        <div class="col-12 mt-1 ">
                            <label for="Name of NGO" class="form-label">Name: </label>
                            <input type="text" class="form-control" name="nameOfNGO" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="addressOfNGO" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="district">District</label>
                            <select class="form-control" name="dist" id="dist" required>
                                <option value="">Select</option>
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
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    
                     <input type="submit" name="submit4" id="submit " class="btn btn-primary" value="Register">
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!--modal close-->
    <!--childcare Modals -->
    <div class="modal fade" id="ChildcareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTER FOR CHILDCARE SERVICE</h5>
                    <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form class="row" action="#" method="POST" enctype="multipart/form-data">
                        <div class="col-12 mt-1 ">
                            <label for="Name of NGO" class="form-label">Name</label>
                            <input type="text" class="form-control" name="nameOfNGO" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="addressOfNGO" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="district">District</label>
                            <select class="form-control" name="dist" id="dist" required>
                                <option value="">Select</option>
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
                         <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                   <input type="submit" name="submit5" id="submit " class="btn btn-primary" value="Register">
                </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
    <!--modal close-->
    <!-- COVID Warriors Modals -->
    <div class="modal fade" id="WarriorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTER AS COVID WARRIOR</h5>
                    <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form class="row" action="#" method="POST" enctype="multipart/form-data">
                        <div class="col-12 mt-1 ">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-12 mt-1 ">
                            <label for="Age" class="form-label">Age</label>
                            <input type="text" class="form-control" name="age" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Profession" class="form-label">Profession</label>
                            <input type="text" class="form-control" name="profession" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="City" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="District" class="form-label">District</label>
                            <input type="text" class="form-control" name="district" required>
                        </div>
                        
                        <div class="col-12 mt-1">
                            <label for="Share Your Experience" class="form-label">Share Your Experience</label><br>
                            <textarea name="experience" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Add A Title" class="form-label">Add A Title</label><br>
                            <textarea name="title" rows="5" class="form-control" required></textarea>
                        </div>

                        <div class="col-12 mt-1">
                            <label for="Upload Photo" class="form-label">Upload Photo</label>
                            <input type="file" class="form-control" name="photo" id="formFile">
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Upload Video" class="form-label">Upload Video</label>
                            <input type="file" class="form-control" name="video" id="formFile">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <input type="submit" name="submit6" id="submit6" class="btn btn-primary" value="Share">
                </div>
            </div>
        </div>
    </div>
</form>
    <!--modal close-->
<!-- COVID Survivors Modals -->
<div class="modal fade" id="SurvivorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTER AS COVID SURVIVOR</h5>
                <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                    aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <form class="row" action="#" method="POST" enctype="multipart/form-data">
                    <div class="col-12 mt-1 ">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    <div class="col-12 mt-1 ">
                        <label for="Age" class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" required>
                    </div>
                    <div class="col-12 mt-1">
                        <label for="Profession" class="form-label">Profession</label>
                        <input type="text" class="form-control" name="profession" required>
                    </div>
                    <div class="col-12 mt-1">
                        <label for="City" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" required>
                    </div>
                    <div class="col-12 mt-1">
                        <label for="District" class="form-label">District</label>
                        <input type="text" class="form-control" name="district" required>
                    </div>
                    <div class="col-12 mt-1">
                        <label for="Share Your Experience" class="form-label">Share Your Experience</label><br>
                        <textarea name="experience" rows="5" class="form-control" required></textarea>

                    </div>
                    <div class="col-12 mt-1">
                        <label for="Add A Title" class="form-label">Add A Title</label><br>
                        <textarea name="title" rows="5" class="form-control" required></textarea>

                    </div>
                    <div class="col-12 mt-1">
                        <label for="Upload Video" class="form-label">Upload Video</label>
                        <input type="file" class="form-control" name="video" id="formFile">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" name="submit7" class="btn btn-primary" value="Share">
            </div>
        </div>
    </div>
</div>
</form>
<!--modal close-->

    <!-- NGO Modals -->
    <div class="modal fade" id="ngoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTER AS AN NGO</h5>
                    <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">


                    <form class="row" action="#" method="post" name="insert_ngo_registraion_frm" 
                    enctype="multipart/form-data">
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
                            <select class="form-control" name="dist" id="dist" class="form-control" required>
                                <option value="">Select</option>
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
                            <input type="file" class="form-control" name="certificateOfNGO" id="formFile" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Helping Categories" class="form-label">Helping Categories</label>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfNGO[]" type="checkbox"
                                    value="food">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Food
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfNGO[]" type="checkbox"
                                    value="books">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Books
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfNGO[]" type="checkbox"
                                    value="medicine">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Medicine
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfNGO[]" type="checkbox"
                                    value="financially">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Financially
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfNGO[]" type="checkbox"
                                    value="other">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Other
                                </label>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <input type="submit" name="submit8" class="btn btn-primary" value="Register">
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
                    <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">

                    <form class="row" action="#" method="post"
                        name="insert_ngo_registraion_individual_frm" enctype="multipart/form-data">
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
                            <select class="form-control" name="dist" id="dist" class="form-control" required>
                                <option value="">Select</option>
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
                            <input type="file" class="form-control" name="certificateOfInd" id="formFile" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="Helping Categories" class="form-label">Helping Categories</label>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfInd[]" type="checkbox"
                                    value="food">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Food
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfInd[]" type="checkbox"
                                    value="books">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Books
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfInd[]" type="checkbox"
                                    value="medicine">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Medicine
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfInd[]" type="checkbox"
                                    value="financially">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Financially
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfInd[]" type="checkbox"
                                    value="other">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Other
                                </label>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <input type="submit" name="submit9" class="btn btn-primary" value="Register">
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
                    <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">


                    <form class="row" action="#" method="post" enctype="multipart/form-data">
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
                            <select class="form-control" name="dist" class="form-control" id="dist" required>
                                <option value="">Select</option>
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
                            <input type="file" class="form-control" name="certificateOfInd" id="formFile" required>
                        </div>
                        <div class="col-12 mt-1">
                            <label for="description" class="form-label">Description:</label><br>
                            <textarea name="description" rows="5" class="form-control"></textarea>

                        </div>
                        <div class="col-12 mt-1">
                            <label for="Helping Categories" class="form-label">What Kind Of Help You Need: </label>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfInd[]" type="checkbox"
                                    value="food" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Food
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfInd[]" type="checkbox"
                                    value="books">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Books
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfInd[]" type="checkbox"
                                    value="medicine">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Medicine
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfInd[]" type="checkbox"
                                    value="financially">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Financially
                                </label>
                            </div>
                            <div class="mt-1 ml-3 form-check">
                                <input class="form-check-input" name="helpingCategoriesOfInd[]" type="checkbox"
                                    value="other">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Other
                                </label>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <input type="submit" name="submit10" class="btn btn-primary" value="Register">
                </div>
            </div>
        </div>
    </div>
    </form>
    <!--modal close-->

    <div class="container pt-5">
        <div class="row pt-5 d-flex justify-content-center align-items-center">
            <div class="col-12 text-center">
                <h1>USER PANEL</h1>
            </div>
            <div class="col-6 mt-5">
                <h3>WELCOME <?php echo $_SESSION['name']; ?></h2>
            </div>
            <div class="col-3 mt-5 d-flex justify-content-between align-items-center">
                <a href="./usertable.php"><button class="btn btn-info">Your Submitted Data</button></a>
            </div>
            <div class="col-3 mt-5 d-flex justify-content-between align-items-center">
                <a href="logout.php"><button class="btn btn-info">Log out</button></a>
            </div>
        </div>

        <div class="row mt-3 pl-3">
            <?php if(isset($_SESSION['success'])) { 
                    echo ('<div class="alert alert-success w-100" role="alert">');
                    echo( $_SESSION['success']); 
                    echo('</div>');
                    unset($_SESSION['success']);
                } else if(isset($_SESSION['error'])) {
                    echo ('<div class="alert alert-danger w-100" role="alert">');
                    echo( $_SESSION['error']); 
                    echo('</div>');
                    unset($_SESSION['error']);
                }
            ?>
        </div>

        <div class="row d-flex justify-content-around mt-5">
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src="./images/card3.jpg" class="card-img-top" alt="blood donor">
                    <div class="card-body">
                        <h5 class="card-title">Donate blood</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#DonorModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src="./images/card4.jpg" class="card-img-top" alt="blood receiver">
                    <div class="card-body">
                        <h5 class="card-title">Request For Blood</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#ReceiverModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src="./images/card1.jpg" class="card-img-top" alt="blood donor">
                    <div class="card-body">
                        <h5 class="card-title">Oxygen Supply</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#oxygenModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-around mt-5">
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src=" ./images/card5.jpg" class="card-img-top" alt="blood donor">
                    <div class="card-body">
                        <h5 class="card-title">Healthcare Volunteer</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#HealthcareModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src="./images/card2.jpg" class="card-img-top" alt="blood receiver">
                    <div class="card-body">
                        <h5 class="card-title">Meal Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#MealModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src="./images/card6.jpg" class="card-img-top" alt="blood donor">
                    <div class="card-body">
                        <h5 class="card-title">Childcare Service</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#ChildcareModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-around mt-5">
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src="./images/card11.jfif" class="card-img-top" alt="blood donor">
                    <div class="card-body">
                        <h5 class="card-title">Share Experience As COVID Warrior</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#WarriorModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src="./images/card8.jpg" class="card-img-top" alt="blood donor">
                    <div class="card-body">
                        <h5 class="card-title">Share Experience As COVID Survivor</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#SurvivorModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src="./images/card9.jpg" class="card-img-top" alt="blood donor">
                    <div class="card-body">
                        <h5 class="card-title">NGO</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ngoModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row d-flex justify-content-around mt-5">
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src="./images/card7.jpg" class="card-img-top" alt="blood donor">
                    <div class="card-body">
                        <h5 class="card-title">Individual Helper</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#indModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card w-100">
                    <img src="./images/card10.jpg" class="card-img-top" alt="blood donor">
                    <div class="card-body">
                        <h5 class="card-title">Help Seeker</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#helpModal">
                            Click Here
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>








<?php
//Donor data insertion
if(isset($_POST['submit'])){
    $sql="SELECT * FROM `donor_db` WHERE `email`='$email'";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){?>
        <script>
            swal({
            title: "You have already submitted data",
            icon: "warning",
            button: "Ok!",
          });
        </script>
  <?php  }
    else{
    $sql = "INSERT INTO `donor_db`(`id`,`email`,`name`,`address`,`phone number`,`date of birth`,`gender`,`blood group`,`district`,`frequency`,`proof`) VALUES('','".$email."',
'".$_REQUEST['name']."','".$_REQUEST['address']."','".$_REQUEST['phno']."','".$_REQUEST['dob']."','".$_REQUEST['gender']."',
'".$_REQUEST['bgrp']."','".$_REQUEST['dist']."','".$_REQUEST['freq']."','".$_FILES['cert']['name']."')";
     $path = "upload/".$_FILES["cert"]["name"];
                                $tmp = $_FILES["cert"]["tmp_name"];
                                move_uploaded_file($tmp, $path);
    if (mysqli_query($link, $sql)) {
        ?>
        <script>
            swal({
               title: "Your data is submitted!",
               text: "One time submission",
            text: " As a Blood Donor",
            icon: "success",
            button: "Ok!",
          });
        </script>
        <?php
        
      } else {
        $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
        
      }
    }
}
//Receiver data insertion
if(isset($_POST['submit1'])){
    $sql="SELECT * FROM `receiver_db` WHERE `email`='$email'";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){?>
        <script>
            swal({
            title: "You have already submitted data",
            text: "One time submission",
            icon: "warning",
            button: "Ok!",
          });
        </script>
  <?php  }
    else{
    $sql = "INSERT INTO `receiver_db`(`id`,`email`,`name`,`address`,`phone number`,`date of birth`,`gender`,`blood group`,`district`,`proof`) VALUES('','".$email."','".$_REQUEST['name']."',
                                 '".$_REQUEST['address']."','".$_REQUEST['phno']."','".$_REQUEST['dob']."','".$_REQUEST['gender']."','".$_REQUEST['bgrp']."','".$_REQUEST['dist']."',
                                 '".$_FILES["cert"]["name"]."')";

                                  $path = "upload/".$_FILES["cert"]["name"];
                                $tmp = $_FILES["cert"]["tmp_name"];
                                move_uploaded_file($tmp, $path);
    
    if (mysqli_query($link, $sql)) {
        ?>
        <script>
            swal({
               title: "Your data is submitted!",
            text: " For request of Blood ",
            icon: "success",
            button: "Ok!",
          });
        </script>
        <?php
        
      } else {
        $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
        
      }
    }
}
//Oxygen data insertion
if(isset($_POST['submit2'])){
    $sql="SELECT * FROM `oxygen_db` WHERE `email`='$email'";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){?>
        <script>
            swal({
            title: "You have already submitted data",
            text: "One time submission",
            icon: "warning",
            button: "Ok!",
          });
        </script>
  <?php  }
    else{
    $sql = "INSERT INTO `oxygen_db`(`id`,`name`,`application type`,`address`,`district`,`email`,`phone number`,`proof`) VALUES('','".$_REQUEST['name']."',
                                 '".$_REQUEST['person']."','".$_REQUEST['address']."','".$_REQUEST['dist']."','".$email."','".$_REQUEST['phno']."',
                                 '".$_FILES["cert"]["name"]."')";

                                   $path = "upload/".$_FILES["cert"]["name"];
                                $tmp = $_FILES["cert"]["tmp_name"];
                                move_uploaded_file($tmp, $path);
    if (mysqli_query($link, $sql)) {
      
                  ?>
        <script>
            swal({
               title: "Your data is submitted!",
            text: "for oxygen suuply",
            icon: "success",
            button: "Ok!",
          });
        </script>
<?php
        
      } else {
        $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
        
      }
    }
}


//Warrior data insertion
if(isset($_POST['submit6'])){
    $sql="SELECT * FROM `warrior_db` WHERE `email`='$email'";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){?>
        <script>
            swal({
            title: "You have already submitted data",
            text: "One time submission",
            icon: "warning",
            button: "Ok!",
          });
        </script>
    <?php  }
    else{
        if(mysqli_query($link,"INSERT INTO `warrior_db`(`id`,`name`,`email`,`age`,`profession`,`city`,`district`,`experience`,`title`,`photo`,`video`) VALUES('','".$_REQUEST['name']."','".$email."','".$_REQUEST['age']."',
        '".$_REQUEST['profession']."','".$_REQUEST['city']."','".$_REQUEST['district']."','".$_REQUEST['experience']."','".$_REQUEST['title']."','".$_FILES["photo"]["name"]."','".$_FILES["video"]["name"]."')"))
        {
            $path = "upload/".$_FILES["photo"]["name"];
                                $tmp = $_FILES["photo"]["tmp_name"];
                                move_uploaded_file($tmp, $path); 
                                      $path = "upload/".$_FILES["video"]["name"];
                                $tmp = $_FILES["video"]["tmp_name"];
                                move_uploaded_file($tmp, $path); ?>
       
                
             <script>
                swal({
                 title: "Your data is submitted!",
                 text: "for covid worrior",
                icon: "success",
                button: "Ok!",
                });
            </script><?php
 }
        else {
      $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
      }
    }
}
//Survivor data insertion
if(isset($_POST['submit7'])){
    $sql="SELECT * FROM `survivor_db` WHERE `email`='$email'";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){?>
        <script>
            swal({
            title: "You have already submitted data",
            text: "One time submission",
            icon: "warning",
            button: "Ok!",
          });
        </script>
  <?php  }
    else{
    if(mysqli_query($link,"INSERT INTO `survivor_db`(`id`,`name`,`email`,`age`,`profession`,`city`,`district`,`experience`,`title`,`video`) VALUES('','".$_REQUEST['name']."','".$email."','".$_REQUEST['age']."',
        '".$_REQUEST['profession']."','".$_REQUEST['city']."','".$_REQUEST['district']."','".$_REQUEST['experience']."','".$_REQUEST['title']."','".$_FILES["video"]["name"]."')"))
    {
         $path = "upload/".$_FILES["video"]["name"];
                                $tmp = $_FILES["video"]["tmp_name"];
                                move_uploaded_file($tmp, $path); 
       
              ?>
        <script>
            swal({
               title: "Your data is submitted!",
            text: "for covid survivor",
            icon: "success",
            button: "Ok!",
          });
        </script>
<?php
    }
         
    else {
        $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
        
      }
    }
}

//Child care data insertion
if(isset($_POST['submit5'])){
    $sql="SELECT * FROM `childcareprovider_db` WHERE `email`='$email'";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){?>
        <script>
            swal({
            title: "You have already submitted data",
            text: "One time submission",
            icon: "warning",
            button: "Ok!",
          });
        </script>
  <?php  }
    else{
   $sql = "INSERT INTO `childcareprovider_db`(`id`,`email`,`name`,`address`,`district`,`phno`,`proof`) VALUES('','".$email."',
                                 '".$_REQUEST['nameOfNGO']."','".$_REQUEST['addressOfNGO']."','".$_REQUEST['dist']."',
                                 '".$_REQUEST['phoneNoOfNGO']."','".$_FILES["certificateOfNGO"]["name"]."')";
                                   $path = "upload/".$_FILES["certificateOfNGO"]["name"];
                                $tmp = $_FILES["certificateOfNGO"]["tmp_name"];
                                move_uploaded_file($tmp, $path);
    
    if (mysqli_query($link, $sql)) {
        
        ?>
        <script>
            swal({
               title: "Your data is submitted!",
            text: "for child-care service",
            icon: "success",
            button: "Ok!",
          });
        </script>
<?php
        
      } else {
        $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
        
      }
    }
}
//Health care data insertion
    if(isset($_POST['submit3'])){
        $sql="SELECT * FROM `volunteer_db` WHERE `email`='$email'";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){?>
        <script>
            swal({
            title: "You have already submitted data",
            text: "One time submission",
            icon: "warning",
            button: "Ok!",
          });
        </script>
  <?php  }
    else{
       $sql = "INSERT INTO `volunteer_db`(`id`,`name`,`user_type`,`address`,`district`,`email`,`phno`,`proof`) VALUES('',
                                 '".$_REQUEST['nameOfvolunteer']."','".$_REQUEST['person']."','".$_REQUEST['addressOfvolunteer']."','".$_REQUEST['dist']."','".$email."',
                                 '".$_REQUEST['phoneOfvolunteer']."','".$_FILES["certificateOfvolunteer"]["name"]."')";

                                  $path = "upload/".$_FILES["certificateOfvolunteer"]["name"];
                                $tmp = $_FILES["certificateOfvolunteer"]["tmp_name"];
                                move_uploaded_file($tmp, $path);
   
     if (mysqli_query($link, $sql)) {
         ?>
        <script>
            swal({
               title: "Your data is submitted!",
            text: "for health-care service",
            icon: "success",
            button: "Ok!",
          });
        </script>
<?php
        
      } else {
        $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
        
      }
    }
    }
//Meal Provider data insertion
    if(isset($_POST['submit4'])){
        $sql="SELECT * FROM `mealprovider_db` WHERE `email`='$email'";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){?>
        <script>
            swal({
            title: "You have already submitted data",
            text: "One time submission",
            icon: "warning",
            button: "Ok!",
          });
        </script>
  <?php  }
    else{
            $sql = "INSERT INTO `mealprovider_db`(`id`,`name`,`address`,`district`,`email`,`phno`,`proof`) VALUES('',
                                 '".$_REQUEST['nameOfNGO']."','".$_REQUEST['addressOfNGO']."','".$_REQUEST['dist']."','".$email."',
                                 '".$_REQUEST['phoneNoOfNGO']."','".$_FILES["certificateOfNGO"]["name"]."')";

                                        $path = "upload/".$_FILES["certificateOfNGO"]["name"];
                                $tmp = $_FILES["certificateOfNGO"]["tmp_name"];
                                move_uploaded_file($tmp, $path);
    if (mysqli_query($link, $sql)) {
              ?>
        <script>
            swal({
               title: "Your data is submitted!",
            text: " for meal service",
            icon: "success",
            button: "Ok!",
          });
        </script>
<?php
        
      } else {
        $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
        
      }
    }
    }
    //NGO registration
     if(isset($_POST['submit8'])){
        $sql="SELECT * FROM `ngo_registration` WHERE `email`='$email'";
        $result=mysqli_query($link, $sql);
        if(mysqli_num_rows($result) > 0){?>
            <script>
                swal({
                title: "You have already submitted data",
                text: "One time submission",
                icon: "warning",
                button: "Ok!",
              });
            </script>
      <?php  }
        else{
            $checkbox1 = $_POST['helpingCategoriesOfNGO'];
		    $chk = implode(", ",$checkbox1);
$sql = " INSERT INTO `ngo_registration`(`id`,`email`, `name`, `address`, `district`, `ph_no`, `file`, `category`)
                          VALUES('','".$email."','".$_REQUEST['nameOfNGO']."',
                                 '".$_REQUEST['addressOfNGO']."',
                                 '".$_REQUEST['dist']."',
                                 '".$_REQUEST['phoneNoOfNGO']."',
                                 '".$_FILES["certificateOfNGO"]["name"]."',
                                 
                                 '$chk')";

                                 $path = "upload/".$_FILES["certificateOfNGO"]["name"];
                                $tmp = $_FILES["certificateOfNGO"]["tmp_name"];
                                move_uploaded_file($tmp, $path);
    if (mysqli_query($link, $sql)) {
        
               ?>
        <script>
            swal({
               title: "Your data is submitted!",
            text: " for NGO service",
            icon: "success",
            button: "Ok!",
          });
        </script>
<?php
        
      } else {
        $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
        
      }
    }
    }
    //NGO individual registration
     if(isset($_POST['submit9'])){
        $sql="SELECT * FROM `ngo_registration_individual` WHERE `email`='$email'";
        $result=mysqli_query($link, $sql);
        if(mysqli_num_rows($result) > 0){?>
            <script>
                swal({
                title: "You have already submitted data",
                text: "One time submission",
                icon: "warning",
                button: "Ok!",
              });
            </script>
      <?php  }
        else{
            $checkbox1 = $_POST['helpingCategoriesOfInd'];
		    $chk = implode(", ",$checkbox1);
        $sql = " INSERT INTO `ngo_registration_individual`(`id`,`email`, `name`, `address`, `district`, `ph_no`, `file`, `category`)
                          VALUES('','".$email."','".$_REQUEST['firstNameOfInd']."',
                                 '".$_REQUEST['addressOfInd']."',
                                 '".$_REQUEST['dist']."',
                                 '".$_REQUEST['phoneNoOfInd']."',
                                 '".$_FILES["certificateOfInd"]["name"]."',
                                 
                                 '$chk')";
                                    $path = "upload/".$_FILES["certificateOfInd"]["name"];
                                $tmp = $_FILES["certificateOfInd"]["tmp_name"];
                                move_uploaded_file($tmp, $path);
    if (mysqli_query($link, $sql)) {
       
            ?>
        <script>
            swal({
               title: "Your data is submitted!",
            text: "for individual helper!",
            icon: "success",
            button: "Ok!",
          });
        </script>
<?php
        
      } else {
        $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
        
      }
    }
    }
//Help
     if(isset($_POST['submit10'])){
        $sql="SELECT * FROM `ngo_help_db` WHERE `email`='$email'";
        $result=mysqli_query($link, $sql);
        if(mysqli_num_rows($result) > 0){?>
            <script>
                swal({
                title: "You have already submitted data",
                text: "One time submission",
                icon: "warning",
                button: "Ok!",
              });
            </script>
      <?php  }
        else{
            $checkbox1 = $_POST['helpingCategoriesOfInd'];
		    $chk = implode(", ",$checkbox1);
        $sql = "INSERT INTO `ngo_help_db`(`id`,`email`, `name`, `address`, `district`, `ph_no`, `file`, `description`, `category`)
                          VALUES('','".$email."','".$_REQUEST['firstNameOfInd']."',
                                 '".$_REQUEST['addressOfInd']."',
                                 '".$_REQUEST['dist']."',
                                 '".$_REQUEST['phoneNoOfInd']."',
                                 '".$_FILES["certificateOfInd"]["name"]."',
                                 
                                 '".$_REQUEST['description']."',
                                 '$chk')";
                                      $path = "upload/".$_FILES["certificateOfInd"]["name"];
                                $tmp = $_FILES["certificateOfInd"]["tmp_name"];
                                move_uploaded_file($tmp, $path);
    if (mysqli_query($link, $sql)) {
        ?><script>
        swal("Your help request is submitted!")
        .then((value) => {
        swal(`You will be informed soon !!!`);
});</script><?php
        
      } else {
        $_SESSION['error'] = "Form submission failed " . mysqli_error($link);
        
      }
    }
    }

?>
</body>

</html>
