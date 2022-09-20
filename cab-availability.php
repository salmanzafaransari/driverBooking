<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Online Driver Booking</title>
    <meta name="author" content="Driver Booking" />
    <meta name="description" content="Driver Booking - Online Taxi Service" />
    <meta name="keywords" content="cab availability, varansi" />
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
  <!------Main Nav---->
 <?php include 'layout/mainnav.php'; ?>
  <!-----Mobile Nav------>
  <?php include 'layout/mobilenav.php'; ?>

<section class="space">
    <div class="container">
        <h2 class="txt-theme-color">Cab Availability</h2>
         <div class="row">
            <div class="position-relative col-md-8">
                <div class="w-100 bgColor px-5 py-1">
                    <h6 class="text-white text-capitalize my-1">Leave Your Details Here</h6>
                </div>
                <form action="#" method="POST"
                    class="booking-form4 ajax-contact">
                    <div class="row">
                        <div class="form-group col-sm-12"><input type="text" class="form-control" name="name" id="name"
                                placeholder="Enter Driver Name" />
                            </div>
                        <div class="form-group col-sm-12"><input type="number" class="form-control" name="phone"
                                id="phone" placeholder="Enter Driver Number" />
                            </div>
                        <div class="form-group col-sm-12"><textarea placeholder="Enter City Pickup Address" name="pickupaddress" id="pickupaddress" class="form-control" style="min-height:100px;"></textarea>
                        </div>
                        <div class="form-group col-sm-12"><textarea placeholder="Enter City Drop Address" name="pickdropaddress" id="pickdropaddress" class="form-control" style="min-height:100px;"></textarea>
                        </div>
                        <div class="form-group col-sm-12"><input type="text" class="date-pick form-control" name="Bdate"
                               id="BirthDay" placeholder="dd/mm/yy" />
                        </div>
                        <div class="form-group col-sm-12"><input type="time" name="PickupTime" id="PickupTime" value="" placeholder="Choose Pickup Time">
                         </div>
                         <div class="form-group col-sm-12"><input type="text" class="form-control" name="raisedamount" id="raisedamount"
                                placeholder="Enter Your Desired Amount" />
                            </div>
                            <div class="form-group col-sm-12"><input type="text" class="form-control" name="CabNumber" id="CabNumber"
                                placeholder="Enter Your Cab Number" />
                            </div>

                        <div class="col-sm-12">
                            <div class="d-flex overflow-auto spc">
                                <span>
                                    <input type="radio" aria-lable="Radio" name="PreferredIn" value="COMPACT" checked="checked" class="rbtn">&nbsp; &nbsp;
                                       COMPACT 
                                </span>
                                <span>
                                    <input type="radio" name="PreferredIn" value="SEDAN" class="rbtn">
                                    SEDAN
                                </span>
                                <span>
                                    <input type="radio" name="PreferredIn" value="SUV" class="rbtn">
                                    SUV
                                </span>
                                <span>
                                    <input type="radio" name="PreferredIn" value="LUXURY" class="rbtn">
                                    LUXURY
                                </span>
                                <span>
                                    <input type="radio" name="PreferredIn" value="PRIME SEDAN" class="rbtn">
                                    PRIME- -SEDAN
                                </span>
                                <span>
                                    <input type="radio" name="PreferredIn" value="PRIME SUV" class="rbtn">
                                    PRIME- -SUV
                                </span>
                                <span>
                                    <input type="radio" name="PreferredIn" value="TEMPO TRAVELLER" class="rbtn">
                                    TEMPO- -TRAVELLER
                                </span>
                            </div>
                        </div>
                        <div class="form-btn col-12"><button class="as-btn mt-5">Book Your Car Now</button></div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
            <div class="col-md-4">
                <div class="widget widget_offer">
                    <div class="offer-banner">
                        <div class="banner-logo"><img src="assets/img/logo.png" alt="image not found"></div>
                        <h5 class="banner-title">TELL US YOUR CAB AVAILABILITY</h5>
                        <div class="offer">
                            <img src="assets/img/bkg.jpg" alt="image not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!----Footer----->
    <?php include 'layout/footer.php'; ?>
  </html>
 </body>
    <!-- jQuery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>