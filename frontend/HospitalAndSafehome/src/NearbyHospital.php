<!DOCTYPE html> <!--2nd page or 1st subpage-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nearby COVID Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/NearbyHospital.css">
    <link rel="stylesheet" href="../CSS/NearbyHospitalMobile.css">
</head>
<body>
    <header>
        <a href="Hospital.php" class="previous" id="bed"><i class="arrow left"></i></a>
        <div class="container text-center">
            <div class="col-md-12 col-sm-12">
                <h1>Nearby COVID Hospital</h1>
            </div>
        </div>
    </header>
    <main>
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel1"> <!--1st panel-->
                            <h1>COVID Hospitals of West Bengal</h1>
                              <p>
                                This is the list the COVID-19 hospitals in West Bengal, that are treating coronavirus patients with the number of beds and ventilations.
                                These hospitals are designated specifically for dealing with coronavirus patients. However, any person is encouraged to contact other private hospitals if they are more comfortable with those options.
                              </p>
                              <p>
                                A person suffering from Severe Acute Respiratory Illness (SARI) not yet tested for COVID19 or A person who has tested positive for Covid19 (SARI or otherwise) with moderate to severe symptoms or a person with Covid19-like symptoms but who has not yet tested for COVID 19 or a person who has tested positive for COVID19 but is a low-risk case or
                                A person who has tested positive for COVID19 with significant morbidity may go for taking admission in these hospitals for treatment.
                              </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel text-left"> <!--2nd panel-->
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