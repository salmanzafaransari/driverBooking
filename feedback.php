<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Online Driver Booking</title>
    <meta name="author" content="Driver Booking" />
    <meta name="description" content="Driver Booking - Online Taxi Service" />
    <meta name="keywords" content="ride booking, varansi" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF
" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/favicon.ico" />
    <meta name="theme-color" content="#FFFFFF
" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/app.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

</head>
<body>
 <!---Main Nav---->
 <?php include 'layout/mainnav.php'; ?>

 <!-----Mobile Nav------>
 <?php include 'layout/mobilenav.php'; ?>

<!---------Image for feedback------------>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-sm-12">
            <!-----Single Card Start------>
            <div class="card shadow-lg mb-3" style="border:none;">
                <div class="card-header bg-white">
                    <h3>Send us your feedback</h3>
                    <p>Driver On Demand</p>
                </div>
                <div class="card-body">
                    <div style="background-image:url('assets/img/service/service_1_1.jpg'); height:500px; background-size:cover; repeat:no-repeat;">

                    </div>
                </div>
                <div class="card-footer">
                    <p style="font-size:25px;">Verified & Experienced Drivers</p>
                    <h4 style="margin-top:-20px;">Go anywhere at anytime</h4>
                    <p style="font-size:25px; margin-top:-15px;">Driver in 90 Minutes</p>
                </div>
            </div>
            <!------Single Card End-------->
        <!-- <form action="" method="POST"> -->
            <!------Single Card Start------->
            <div class="card shadow-lg mb-3" style="border:none;">
                <div class="card-body">
                    <p><b>Driver Punctuality</b></p>
                    <hr>
                    <div class="input-group" style="display:block;" name="checkbox">
                        <div style="display:flex">
                            <input type="checkbox" class="mr-3" name="checkbox" aria-label="Checkbox for following text input">
                            <p style="margin-top:-3px;">5 Star</p>
                        </div>
                        <div style="display:flex">
                            <input type="checkbox" class="mr-3" name="checkbox" aria-label="Checkbox for following text input">
                            <p style="margin-top:-3px;">4 star</p>
                        </div>
                        <div style="display:flex">
                            <input type="checkbox" class="mr-3" name="checkbox" aria-label="Checkbox for following text input">
                            <p style="margin-top:-3px;">3 star</p>
                        </div>
                        <div style="display:flex">
                            <input type="checkbox" class="mr-3" name="checkbox" aria-label="Checkbox for following text input">
                            <p style="margin-top:-3px;">2 star</p>
                        </div>
                        <div style="display:flex">
                            <input type="checkbox" class="mr-3" name="checkbox" aria-label="Checkbox for following text input">
                            <p style="margin-top:-3px;">1 star</p>
                        </div>
                    </div>
                </div>
            </div>
            <!------Single Card End------->
            <!------Single Card Start------->
            <div class="card shadow-lg mb-3">
                <div class="card-body">
                    <p><b>Driver Skills / Traffic Rules Adherence</b></p>
                    <hr>
                    <div class="input-group">
                        <div class="input-group-prepend" style="display:block;">
                            <div style="display:flex">
                                <input type="radio" class="" name="radio" value="v">
                                <p>Very Good</p>
                            </div>
                            <div style="display:flex">
                                <input type="radio" class="" name="radio" value="g">
                                <p>Good</p>
                            </div>
                            <div style="display:flex">
                                <input type="radio" class="" name="radio" value="a">
                                <p>Average</p>
                            </div>
                            <div style="display:flex">
                                <input type="radio" class="" name="radio" value="p">
                                <p>Poor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------Single Card End------->
        <!-- </form> -->
          </div>
        </div>
    </div>
<!---------Image for feedback end--------->

    <!-- <div class="position-relative space">
      <div class="text-center">
          <h2 class="">Enjoy Your Journey</h2>
        </div>
      <div class="container bg-0">
            <form action="" method="POST" class="booking-form4">
              <div class="row">
                <?php
                if (isset($_POST['city'])) {
                  $city = $_POST['city'];
                  $hours = $_POST['hours'];
                ?>
                 <input type="hidden" name="hours" value="<?php echo $hours ?>" id="hours" /> 
                 <input type="hidden" name="city" value="<?php echo $city ?>" id="city" /> 
                <?php } ?>
    
                <div class="form-group col-sm-6"><input type="text" required class="form-control" name="name" id="name" placeholder="Your Name" /> <i class="fal fa-user"></i></div>
                <div class="form-group col-sm-6"><input type="number" required class="form-control" name="phone" id="phone" placeholder="Phone Number" /> <i class="fal fa-phone"></i></div>
                <div class="form-group col-sm-6"><input type="text" required class="form-control" name="sDestination" id="s-destination" placeholder="Start Destination" /> <i class="fal fa-location-dot"></i></div>
                <div class="form-group col-sm-6"><input type="text" required class="form-control" name="eDestination" id="e-destination" placeholder="End Destination" /> <i class="fal fa-location-dot"></i></div>
                <div class="form-group col-sm-6"><input type="text" required class="form-control" name="passenger" id="passenger" placeholder="Passengers#" /> <i class="fal fa-user-group"></i></div>
                <div class="form-group col-sm-6"><input type="text" required class="date-pick form-control" name="date" id="date-pick" placeholder="Select Date"> <i class="fal fa-calendar-days"></i></div>
                <div class="form-group col-sm-6"><input type="text" required class="time-pick form-control" name="time" id="time-pick" placeholder="Select Time" /> <i class="fal fa-clock"></i></div>
                <div class="form-group col-sm-6">
                  <select class="form-select" name="vehicle" id="vehicle">
                    <option value="Normal" name="vehicle" selected="selected" disabled="disabled">Select Vehicle Class</option>
                    <option value="Normal" name="vehicle">Normal Car</option>
                    <option value="Business class" name="vehicle">Business Class</option>
                    <option value="vip service" name="vehicle">VIP Service</option>
                  </select>
                </div>
                <div class="form-group col-12"><textarea placeholder="Write a Massage...." name="message" id="message" class="form-control"></textarea> <i class="fal fa-message"></i></div>
                <div class="form-btn col-12"><button type="submit" name="submit" class="as-btn">Book A Ride</button></div>
                
              </div>
              <p class="form-messages mb-0 mt-3"></p>
            </form>
      </div>
    </div> -->
    <!----Footer----->
    <?php include 'layout/footer.php'; ?>
  </html>
 </body>
    <!-- jQuery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>