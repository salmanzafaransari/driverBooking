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
  <!------Main Nav---->
 <?php include 'layout/mainnav.php'; ?>
  <!-----Mobile Nav------>
  <?php include 'layout/mobilenav.php'; ?>

    <!------------Driver Application Form----------->
    <section class="space">
    <div class="container">
        <h2 class="txt-theme-color">Driver Application</h2>
        <div class="row">
            <div class="position-relative col-md-8">
                <div class="w-100 bgColor px-5 py-1">
                    <h6 class="text-white text-capitalize my-1">leave your details here</h6>
                </div>
                <form action="#" method="POST"
                    class="booking-form4 ajax-contact">
                    <div class="row">
                        <div class="form-group col-sm-12"><input type="text" class="form-control" name="name" id="name"
                                placeholder="Your Name" />
                            </div>
                        <div class="form-group col-sm-6"><input type="number" class="form-control" name="phone"
                                id="phone" placeholder="Phone Number" />
                            </div>
                        <div class="form-group col-sm-6"><input type="number" class="form-control" name="phone"
                                id="phone" placeholder="Alternate Phone Number" />
                         </div>
                         <div class="form-group col-sm-12"><input type="text" class="form-control" name="address"
                                id="address" placeholder="Address" />
                         </div>
                         <div class="form-group col-sm-4"><input type="text" class="form-control" name="city"
                                id="city" placeholder="City Name" />
                         </div>
                         <div class="form-group col-sm-4"><input type="text" class="form-control" name="state"
                                id="state" placeholder="State Name" />
                         </div>
                         <div class="form-group col-sm-4"><input type="text" class="form-control" name="pinCode"
                                id="pincode" placeholder="Pin Code" />
                         </div>
                         <div class="form-group col-sm-6"><input type="text" class="form-control" name="FatherName"
                                id="FatherName" placeholder="Father Name" />
                         </div>
                         <div class="form-group col-sm-6"><input type="text" class="form-control" name="MotherName"
                         id="MotherName" placeholder="Mother Name" />
                        </div>
                        <div class="form-group col-sm-6"><input type="text" class="date-pick form-control" name="Bdate"
                               id="BirthDay" placeholder="Choose Date Of Birth" />
                        </div>
                         <div class="form-group col-sm-6"><input type="text" class="form-control" name="birthTown"
                                id="birthTown" placeholder="Town of birth" />
                         </div>
                         <div class="form-group col-sm-6">
                            <select class="form-select" name="maritalStatus" id="maritalStatus">
                                <option value=""  selected="selected" disabled="disabled">- Marital Status -</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                         </div>
                         <div class="form-group col-sm-6">
                         <select class="form-select" name="category" id="category">
                            <option value=""  selected="selected" disabled="disabled">- Category -</option>
                            <option value="GEN">GEN</option>
                            <option value="OBC">OBC</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                        </select>
                         </div>
                         <div class="form-group col-sm-6"><input type="text" class="form-control" name="bankAccount"
                                id="bankAccount" placeholder="Bank account number" />
                         </div>
                         <div class="form-group col-sm-6"><input type="text" class="form-control" name="bankName"
                                id="bankName" placeholder="Bank name" />
                         </div>
                         <div class="form-group col-sm-6"><input type="text" class="form-control" name="ifsc"
                                id="ifsc" placeholder="IFSC Code" />
                         </div>
                         <div class="form-group col-sm-6"><input type="text" class="form-control" name="bankBranch"
                                id="bankBranch" placeholder="Branch Address" />
                         </div>
                        <div class="form-group col-sm-4"><input type="text" class="form-control" name="AdhaarNumber"
                                id="AdhaarNumber" placeholder="Adhaar Number" />
                            </div>
                        <div class="form-group col-sm-4"><input type="text" class="form-control" name="DrivingLisenceNumber"
                                id="DrivingLisenceNumber" placeholder="Driving Lisence Number" />
                        
                            </div>
                        <div class="form-group col-sm-4"><input type="text" class="date-pick form-control" name="PanNumber"
                                id="PanNumber" placeholder="PAN Number" />
                            </div>
                            <div class="form-group col-sm-4"><input type="text" class="date-pick form-control" name="DrivingExperience"
                            id="DrivingExperience" placeholder="Driving Experience" />
                        </div>
                        <div class="form-group col-sm-4"><input type="text" class="date-pick form-control" name="ExpiryDate"
                            id="ExpiryDate" placeholder="Expiry Date" />
                        </div>
                        <div class="form-group col-sm-4"><input type="text" class="date-pick form-control" name="IssueDate"
                            id="IssueDate" placeholder="Issue Date" />
                        </div>
                        <div class="form-group col-sm-6"><input type="text" class="form-control" name="ReferenceName"
                                id="ReferenceName" placeholder="Reference Name" />
                            </div>
                        <div class="form-group col-sm-6"><input type="text" class="time-pick form-control" name="ReferenceNumber"
                                id="ReferenceNumber" placeholder="Reference Number" />
                            </div>
                        <div class="form-group col-sm-12"><input type="text" class="time-pick form-control" name="ReferenceAddress"
                            id="ReferenceAddress" placeholder="Reference Address" />
                        </div>
                        <div class="form-group col-sm-12"><input type="file" name="UploadSignatureOfDriver" size="50" class="enqbox_feild" accept="image/*">
                        <strong>Upload Signature Of Driver</strong>
                         </div>
                        <div class="form-btn col-12"><button class="as-btn">Book Your Car Now</button></div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
            <div class="col-md-4">
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
</section>
    <!----Footer----->
    <?php include 'layout/footer.php'; ?>
  </html>
 </body>
    <!-- jQuery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>