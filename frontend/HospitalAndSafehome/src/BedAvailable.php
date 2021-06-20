<!DOCTYPE html><!--3rd page or 2nd subpage-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Bed Availability</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/BedAvailable.css">
    <link rel="stylesheet" href="../CSS/BedAvailableMobile.css">
</head>
<body>
    <header>
        <a href="Hospital.php" class="previous" id="bed"><i class="arrow left"></i></a>
        <div class="container text-center">
            <div class="col-md-12 col-sm-12">
                <h1>Check Bed Availability</h1>
            </div>
        </div>
    </header>
    <main>
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel1"> <!--1st panel-->
                            <h1>Hospital bed availability status</h1>
                              <p>
                                It is an effort to capture the Status of Bed availability as frequently as possible. The Hospitals have been requested to update their vacancy status in the portal as frequently as possible and at least twice daily at 12 Noon and 6 PM. However, it is advised that you may call the hospital at the contact number of the hospital to get further details.
                                For applying for an admission in a government and government requisitioned hospitals, you may fill online form for the admission (by clicking on yellow coloured icon). For filling online forms for admission, you must have a CoVID positive report applicable as per recent protocol ordered by health department ready in your hand and the mobile number which was provided at the time of conducting RT PCR tests.
                              </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel text-left"><!--2nd panel-->
                            <form>
                                <label class="select">Select district:</label>
                                    <select>
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
                                    </select><br><br>
                                <label class="select">Select Hospital type: </label><br><br>
                                <label class="container">
                                <input type="radio" name="hospitaltype" checked="checked">Government Hospital
                                <span class="checkmark"></span>
                                 </label><br>
                                 <label class="container">
                                <input type="radio" name="hospitaltype">Govt. Requisitioned Pvt. Hospital<br>
                                <span class="checkmark"></span>
                                </label><br>
                                <label class="container">
                                <input type="radio" name="hospitaltype">Private Hospital<br><br><br>
                                <span class="checkmark"></span>
                                </label><br>
                                <input type="submit" name="submit" class="btn btn-dark px-5 py-2 mb-5">
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</body>
</html>