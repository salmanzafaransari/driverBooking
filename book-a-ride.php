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
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.ico" />
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
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
 <!---Main Nav---->
 <?php include 'layout/mainnav.php'; ?>

 <!-----Mobile Nav------>
 <?php include 'layout/mobilenav.php'; ?>

    <div class="position-relative space">
      <div class="text-center">
          <h2 class="">Enjoy Your Journey</h2>
        </div>
      <div class="container">
            <?php
              if (isset($_POST['submit'])) {
                $to = "driver.chikucab@gmail.com";
                $subject = "New Booking";
                if(isset($_POST['city'])){
                  $message = "Here Is a new Booking of " . $_POST['name'] . " for " . $_POST['vehicle'] . " from " . $_POST['sDestination'] . " to " . $_POST['eDestination'] . " on " . $_POST['date'] . " at " . $_POST['time'] . " for " . $_POST['hours'] .  " hours " . $_POST['city'];
                }
                else{
                  $message = "Here Is a new Booking of " .$_POST['name']. " for " .$_POST['vehicle']. " from " .$_POST['sDestination']. " to " .$_POST['eDestination']. " on " .$_POST['date']. " at " .$_POST['time'] ;
                }
                $headers = "From: info@chikucab.com" . "\r\n" ;
                mail($to,$subject,$message,$headers);
              }
              ?> 
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
    </div>
    <!----Footer----->
    <?php include 'layout/footer.php'; ?>
  </html>
 </body>
    <!-- jQuery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>