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

    <!--------Main Nav------------>
    <?php include 'layout/mainnav.php'; ?>
  <!-----Mobile Nav------>
  <?php include 'layout/mobilenav.php'; ?>
  
    <!------------Banner for Car Attach------------>
    <div class="breadcumb-wrapper" style='background-image:url("assets/img/banner/payment.jpg")' data-overlay="title"
        data-opacity="4">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Payment</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.php">Home</a></li>
                <li>Payment</li>
            </ul>
        </div>
    </div>
    <!------------Payment---------->
    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <h3 class="text-center txt-theme-color">Online Payment Option</h3>
                <div class="col-md-7 mt-5">
                    <div class="shadow-lg content-center">
                        <div class="trip_right p-5">
                            <hr>
                            <p></p>
                            <h5 class="text-black-50">For New Booking</h5>
                            <p></p>
                            <p>We are always happy to hear from you.</p>
                            <p><strong>Call us 24x7 at: </strong><a href="tel:8448445504">844-844-5504
                                </a>&nbsp;&nbsp;or&nbsp;&nbsp;<a href="tel:8471092441">847-109-2441 </a></p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p><strong>WhatsApp 24x7 at:</strong><a
                                            href="https://api.whatsapp.com/send?phone=+916280820037&amp;text=Hi!">
                                            6280820037</a><strong><br>Email:</strong> info@chikucab.com</p>
                                </div>
                                <div class="col-sm-6">
                                    <p><strong>Call us at:</strong> <a href="tel:‎9818022327">‎9818022327</a> (8:30A.M
                                        to 6:30P.M - Sunday Closed)
                                    </p>
                                </div>
                            </div>
                            <h5 class="text-black-50">Marketing and IT:</h5>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p><strong>Add: </strong>Lane Number 6 Ring Road nathanpur Chowk Dehradun</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-justify"><strong>Call us: </strong><a
                                            href="tel:8707306162">870-730-6162</a><strong>
                                            Email:</strong>&nbsp;info@chikucab.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-5">
                    <div class="widget p-0">
                        <div class="txt table-responsive">
                            <p class="boldheading txt2 px-4 m-0 py-2">Bank Account Details</p>
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
                                        <td><a href="#"
                                                style="color:red;">https://info@chikucab.com/payment</a>
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
                <h3 class="text-center text-muted">Payment Options</h3>
                <div class="col-md-4 col-sm-6">
                    <div class="hw mt-5 shadow-lg" onclick="showModal('assets/img/payment/googlepayqr.jpg','G Pay');"><img src="assets/img/payment/gpay.svg"></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="hw mt-5 shadow-lg" onclick="showModal('assets/img/payment/paytmqr.jpg','Paytm');"><img src="assets/img/payment/paytm.png"></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="hw mt-5 shadow-lg" onclick="showModal('assets/img/payment/phonepeqr.jpg','PhonePay');"><img src="assets/img/payment/phonepay.svg"></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="hw mt-5 shadow-lg" onclick="showModal('assets/img/payment/bharatqr.jpg','BharatPay');"><img src="assets/img/payment/bharatpay.png"></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="hw mt-5 shadow-lg" onclick="showModal('assets/img/payment/razorpayqr.jpg','RazorPay');"><img src="assets/img/payment/razorpay.svg"></div>
                </div>
                <div class="col-md-4 col-sm-6">
                <a href="https://instamojo.com/@chikucab" target="blank"><div class="hw mt-5 shadow-lg"><img src="assets/img/payment/instamojo.png"></div></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Button trigger modal -->
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-black-50" id="exampleModalLabel"><span id="ScanTitle"></span> Scan Code</h5>
        <button type="button" class="btn-close text-danger" style=" position:relative; top: -16px; right: 3px;" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-close" style="font-size:30px;"></i></button>
      </div>
      <div id="loader">dssdsdadsd</div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bgColor text-white" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
    
    function showModal(e,x){
        $('#loader').text('<h1>Loader.........</h1>');
        $.ajax({
            url:e,
            method:"GET",
            success:function(data){
                $('#loader').hide()
                 $('.modal-body').html('<img class="rounded" src='+e+' />');
        $('#ScanTitle').html(x);
        $('#exampleModal').modal('show');
            }
        });
        // console.log();
       
    }
</script>

    <!----Footer----->
    <?php include 'layout/footer.php'; ?>
  </html>
 </body>
    <!-- jQuery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>