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
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

 <body>

    <!--------Main Nav------------>
    <?php include 'layout/mainnav.php'; ?>
  <!-----Mobile Nav------>
  <?php include 'layout/mobilenav.php'; ?>
   
  <!------------Banner for Car Attach------------>
   <div class="breadcumb-wrapper" style='background-image:url("assets/img/banner/banner.jpg")' data-overlay="title"
        data-opacity="4">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Join As a Driver</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.php">Home</a></li>
                <li>Join Driver</li>
            </ul>
        </div>
    </div>
    <!------------Attaching car's Form----------->
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h2>Earn More Money With Us</h2>
            <p class="txt">We are pleased to be India's largest <strong>driver on hire</strong> solution firm, despite the fact that there are more than 100 agencies in operation in this sector. In addition to ensuring thorough training, our name is a symbol of worth and discipline.</p>
        </div>
        <div class="row">
            <div class="position-relative col-md-7">
                <div class="w-100 bgColor px-5 py-1">
                    <h3 class="text-white text-capitalize my-1">application form</h3>
                </div>
                <?php
              if (isset($_POST['submit'])) {
                $to = "driver.chikucab@gmail.com";
                $subject = "New Join Request";
                  $message = "New application from " . $_POST['name'] . " and contact is " . $_POST['phone'] . " from " .$_POST['addresss'] . ", city:  " . $_POST['city'] . " State of: " . $_POST['state'] . " and Pincode is : " . $_POST['pin'];
                $headers = "From:". $_POST['email'] . "\r\n" ;
                mail($to,$subject,$message,$headers);
                // echo $message;
              }
              ?>
                <form  method="POST"class="booking-form4">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" required name="name" id="name" placeholder="Your Name" /> <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="number" required class="form-control" name="phone" id="phone" placeholder="Phone Number" /> <i class="fal fa-phone"></i>
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="email" required class="form-control" name="email" id="s-destination" placeholder="Your Email Id" /><i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" required class="form-control" name="city" id="city" placeholder="City" /> <i class="fal fa-building"></i>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" required class="form-control" name="state" id="state" placeholder="State" /> <i class="fal fa-building"></i>
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="text" required class="form-control" name="addresss" id="e-destination" placeholder="Your Address" /> <i class="fal fa-location-dot"></i>
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="text" required class="form-control" name="pin" id="pin" placeholder="Pincode" /> <i class="fal fa-location-dot"></i>
                        </div>
                        <div class="form-btn col-12">
                            <button type="submit" name="submit" class="as-btn">Join Now</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
            <div class="col-md-5">
                <div class="widget p-0">
                    <h3 class="widget_title p-4">Contact Our Team</h3>
                    <div class="recent-post-wrap px-4">
                        <div class="recent-post">
                            <div class="media-body">
                                <h4 class="post-title icn"><i class="fal fa-envelope"></i><a class="text-inherit"
                                        href="mailto:vendor@chikucab.com"> &nbsp;vendor@chikucab.com</a></h4>
                            </div>
                        </div>
                        <div class="recent-post ">
                            <div class="media-body">
                                <h4 class="post-title icn"><i class="fal fa-phone-volume"></i><a class="text-inherit"
                                        href="tel:09120124680"> &nbsp;+91-9120124680</a></h4>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="media-body">
                                <h4 class="post-title icn"><i class="fal fa-phone-volume"></i><a class="text-inherit"
                                        href="tel:09818022327"> &nbsp;+91-9818022327</a></h4>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="media-body">
                                <h4 class="post-title icn"><i class="fal fa-phone-volume"></i><a class="text-inherit"
                                        href="tel:09818022327"> &nbsp;+91-9818022327</a> / <a class="text-inherit"
                                        href="tel:09818022327"> &nbsp;+91-9818022327</a></h4>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="media-body">
                                <h4 class="post-title icn"><i class="fa-brands fa-whatsapp"></i>&nbsp; &nbsp;<a
                                        class="text-inherit"
                                        href="whatsapp://send?text=Hi!&amp;phone9818022327">9818022327</a> / <a
                                        class="text-inherit"
                                        href="whatsapp://send?text=Hi!&amp;phone9120124680">9120124680</a> / <a
                                        class="text-inherit"
                                        href="whatsapp://send?text=Hi!&amp;phone9120124680">9120124680</a></h4>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="txt table-responsive">
                        <p class="boldheading txt2 px-4">Bank Account Details</p>
                        <table class="common_table_cell">
                            <tbody>
                                <tr>
                                    <td><strong>Account Holder Name</strong></td>
                                    <td>CHIKU CAB LLP</td>
                                </tr>
                                <tr>
                                    <td><strong>Account Number</strong></td>
                                    <td>071605003657</td>
                                </tr>
                                <tr>
                                    <td><strong>IFSC Code</strong></td>
                                    <td>ICIC0000716</td>
                                </tr>

                                <tr>
                                    <td><strong>Instamojo Payment</strong></td>
                                    <td><a href="https://instamojo.com/@chikucab" target="_blank"
                                            style="color:red;">https://instamojo.com/@chikucab</a></td>
                                </tr>
                                <tr>
                                    <td><strong>Online Payment Options</strong></td>
                                    <td><a href="/payment" style="color:red;">https://chikucab.com/payment</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>GST Number</strong></td>
                                    <td>09AAPFC8312E1ZE</td>
                                </tr>
                                <tr>
                                    <td><strong>MSME Registration number</strong></td>
                                    <td>UDYAM-UP-75-0026093</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-md-9 txt">
                    <h4>Why Join As A Driver With Chiku Cab Drivers India?</h4>
                    <p class="txt"><strong>Driving jobs</strong> with Chiku Cab Drivers India provides a flexible way to make money. You may be sure of receiving a respectable daily or monthly salary when you sign up as a Driver with Chiku Cab Drivers India (the Pioneer & Leader in <strong>Driver Hire services in India.</strong> You can apply with us for a full- or part-time driving position and select your workdays and hours accordingly. We can match one of the many <strong>different types of driver jobs</strong> we have available (monthly fixed wage, on-demand hourly payments, payments based on the amount of tasks completed, valet parking, outstation responsibilities, corporate placements, etc.) to your needs and profile. All types of backgrounds and job profiles are represented among the drivers who join Chiku Cab Drivers India. Choose your own schedules so that work fits around your lives rather than the other way around. We provide <strong>driving jobs in all the leading cities in India.</strong></p>
                    <p class="txt"><strong>Advantages Of Driving With Chiku Cab Drivers India:</strong></p>
                    <ul>
                        <li>Driver recruiting process for your service is quick and simple</li>
                        <li>Uncomplicated procedure</li>
                        <li>Get a driver in the least booking time</li>
                        <li>Licensed and verified driver</li>
                        <li>Special Driver for expensive vehicles</li>
                        <li>Suitable driver in accordance with your needs</li>
                        <li>We even provide drivers on contractual basis</li>
                        <li>Just sit behind, unwind, and enjoy the journey</li>
                    </ul>
                </div>
                <div class="col-md-3 ">
                    <div class="widget widget_offer">
                        <div class="offer-banner">
                            <div class="banner-logo"><img src="assets/img/logo.png" alt="image not found"></div>
                            <h5 class="banner-title">Keep Calm And Travel On</h5>
                            <div class="offer">
                                <img src="assets/img/bkg.jpg" alt="image not found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------package Plan-------------->

    <section class="">
        <div class="container">
            <h2 class="text-center txt-theme-color">Driver Category</h2><br>
            <div class="row gy-30 filter-active">
                <div class="col-xl-4 col-md-6 filter-item cat4 cat3">
                    <div class="starterColor py-1 text-center">
                        <h3 class="text-white my-2">STARTER</h3>
                    </div>
                    <div class="taxi-box shdow p-0">
                        <h2 class="txt-theme-color mb-0">Rs.1250/-</h2>
                        <p class="taxi-box_rate border-0 pb-3 mb-0">REGISTRATION AMOUNT</p>
                        <table class="table table-striped mb-0">
                            <tr>
                                <td class="fnt"> <strong class="txt">Eligible for Booking Type</strong><br>Airport
                                    Transfer, Local(4hr/6hr/8hr/12hr), One-way & Round Trip</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>* Commission deduction not Applicable on</strong><br>Airport
                                    Transfer, Local (4hr/6hr/8hr/12hr)</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Bonus</strong><br>250 Chiku points on 5 successful rides with 5
                                    star customer rating on Chikucab website. (1 Chiku point is equal to Rs.1/-)</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Incentive</strong><br>5% Applicable on every booking with 5 star
                                    customer rating </td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Category up gradation by default</strong><br>After 15 bookings
                                    with 5 star rating</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Limit of business</strong><br>UPTO 50000</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Software support charge</strong><br>₹200/- for Compact | Sedan |
                                    SUV</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Validity</strong><br>2 Year</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item cat4 cat3">
                    <div class="premiumColor py-1 text-center">
                        <h3 class="text-white my-2">PREMIUM</h3>
                    </div>
                    <div class="taxi-box shdow p-0">
                        <h2 class="txt-theme-color mb-0">Rs.1800/-</h2>
                        <p class="taxi-box_rate border-0 pb-3 mb-0">REGISTRATION AMOUNT</p>
                        <table class="table table-striped mb-0">
                            <tr>
                                <td class="fnt"> <strong class="txt">Eligible for Booking Type</strong><br>Airport
                                    Transfer, Local(4hr/6hr/8hr/12hr), One-way & Round Trip</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>* Commission deduction not Applicable on</strong><br>One Way,
                                    Airport Transfer, Local (4hr/6hr/8hr/12hr)</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Bonus</strong><br>500 Chiku points on 5 successful rides with 5
                                    star customer rating on Chikucab website. (1 Chiku point is equal to Rs.1/-)</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Incentive</strong><br>5% Applicable on every booking with 5 star
                                    customer rating </td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Category up gradation by default</strong><br>After 15 bookings
                                    with 5 star rating</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Limit of business</strong><br>UPTO 70000</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Software support charge</strong><br>₹200/- for Compact | Sedan |
                                    SUV</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Validity</strong><br>3 Year</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item cat4 cat3">
                    <div class="eliteColor py-1 text-center">
                        <h3 class="text-white my-2">ELITE</h3>
                    </div>
                    <div class="taxi-box shdow p-0">
                        <h2 class="txt-theme-color mb-0">Rs.2500/-</h2>
                        <p class="taxi-box_rate border-0 pb-3 mb-0">REGISTRATION AMOUNT</p>
                        <table class="table table-striped mb-0">
                            <tr>
                                <td class="fnt"> <strong class="txt">Eligible for Booking Type</strong><br>Airport
                                    Transfer, Local(4hr/6hr/8hr/12hr), One-way & Round Trip, multicity Taxi
                                    Packages/Tour Packages</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>* Commission deduction not Applicable on</strong><br>One
                                    Way,Round Trip, Airport Transfer, Local (4hr/6hr/8hr/12hr)</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Bonus</strong><br>750 Chiku points on 5 successful rides with 5
                                    star customer rating on Chikucab website. (1 Chiku point is equal to Rs.1/-)</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Incentive</strong><br>5% Applicable on every booking with 5 star
                                    customer rating </td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Category up gradation by default</strong><br>After 15 bookings
                                    with 5 star rating</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Limit of business</strong><br>UPTO 90000</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Software support charge</strong><br>₹200/- for Compact | Sedan |
                                    SUV</td>
                            </tr>
                            <tr>
                                <td class="fnt"><strong>Validity</strong><br>4 Year</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------How To Attach Your Taxi---------->
    <div class="w-100">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-12 txt">
                    <h4>How To Join As A Driver With Chiku Cab Drivers India?</h4>
                    <p class="txt">Now, joining as a driver with Chiku Cab Drivers India is an extremely easy and hassle-free process. All you need to do is mail us your Aadhar Card and PAN Card copy to <strong>info@chikucab.com</strong>. While mailing the documents, also let us know what kind of driver job you are looking out for (full-time, part-time,contractual, corporate, etc.) Also, share your legit driving experience period. After verification of your documents, our team will get back to you for the further process.  </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-12 mb-5">
                    <div class="cardBorder rounded h-100">
                        <div class="service-feature_content py-3">
                            <h5 class="text-center">Driver Details</h5>
                            <ul class="txt tickall">
                                <li><i class="fas fa-check"></i>&nbsp; Passport Size Photo</li>
                                <li><i class="fas fa-check"></i>&nbsp; Adhaar Card</li>
                                <li><i class="fas fa-check"></i>&nbsp; PAN Card</li>
                                <li><i class="fas fa-check"></i>&nbsp; Driving Licence</li>
                                <li><i class="fas fa-check"></i>&nbsp; Refrence Person contact number(with adhaar card)
                                </li>
                                <li><i class="fas fa-check"></i>&nbsp; Phone number (at least two number)</li>
                                <li><i class="fas fa-check"></i>&nbsp; Bank Account Details (Account Holder name, IFSC
                                    code, Account Number and one cancel cheque copy)</li>
                                    <li><i class="fas fa-check"></i>&nbsp; Police Varification</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mb-50">
                    <div class="box-para p-3">
                        <p>Please fill Chikucab vendor Agreement copy properly with your signature.</p>
                        <p>Also you must share an agreement between Chikucab and vendor on Rs. 100/- stamp paper (Format
                            will be provided by Chikucab)</p>
                        <p class="mb-0">For Driver registration kindly fill the below form for driver application <u><a
                                    href="driver-application.php" style="color:blue;">Driver
                                    Application Form</a></u></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4>What All Do I Require To Be A Driver With Chiku Cab Drivers India?</h4>
                    <p>If you wish to <strong>work as an on-demand driver</strong> for Chiku Cab Drivers India, you must have the basic skills of driving safely and a considerable amount of driving experience. The paperwork needed to enroll is an Aadhar card and a valid driver's license. Enroll now to be a <strong>driver on hire</strong> with Chiku Cab Drivers India and open a whole new world of respectable and genuine earnings.</p>
                    <h4>
                        Commission Policy:
                    </h4>
                    <p>Company will charge only <strong>7% (Including 5% GST on Total Booking Amount)</strong>
                        commission on vendor amount for every assignedbooking. You have to recharge your driver
                        application wallet to get or acceptthe booking. Your driver wallet recharge amount varies
                        according to vendor/driver category (Silver/Gold/Diamond). You need to maintain a minimum lock
                        amount in your wallet that would be Rs.1200/-for Compact/Sedan and Rs.1500/- for SUV category
                        cab. It’s to be noted that Recharge amount is not a security amount and it is not refundable in
                        any case since our commission against each booking is deducted from this recharge wallet itself.
                    <h4>
                        Software Support Charge (It is Mandatory):
                    </h4>
                    <p>Software support charge is the Chikucab mobile application maintenance charge that is paid
                        monthly in first week of each month. If you do not pay monthly software support charge,your
                        application and censorship account will blocked for particular month and your whole wallet
                        amount will also be deducted on temporarily basis till than you pay that charge once you paid
                        the same amount will be added again. For more details kindly contact <a class="blink"
                            style="color: red;" href="tel:8448445504">+91-8448445504</a>.
                    <h4>
                        Trip type:
                    </h4>
                    <p>Company will provide outstation bookings like one way/Round trip/Taxi package/Tour Package /Local
                        trip (8hr, 12hr) and Airport Transfer. We broadcast the booking through SMS/E-mail at your
                        registered mobile number at regular basis and you have to accept that booking as soon as
                        possible. After acceptance, company will assign/dispatch that booking to you and it would be
                        visible in your vendor panel. Post dispatching, the vendor can assign that booking to his/her
                        driver over the panel only & that booking would be visible in Driver application. <strong>We
                            don’t commit to provide duties on daily basis or any fixed number of duties.</strong></p>
                    <p>Airport car attachment in Company, cab attachment in a company or taxi attachment in a company is
                        by far the easiest and lucrative method to make use of your idle car. If you attach a car in a
                        company, you can benefit from the popular app-based commerce platform which ensures lucrative
                        gains.</p>
                    <h4>Tell Us Your Cab Availability</h4>
                    <p>Driver can also share their cab availability on particular date & time with Chikucab to earn more
                        income. Please share your cab availability at <u><a
                                href="cab-availability.php" style="color:red;">Cabs Availability
                                Form</a></u></p></br>
                    <p>If you search that '<strong>I want to attach my car to company in India</strong>' you will get us
                        on top in google search in <strong>all places of India Like:-</strong></p>
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