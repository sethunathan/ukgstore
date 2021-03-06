<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="UKG Store - Online Gerocery Tirupur">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>UKG Store - Online Gerocery Tirupur</title>
    <!-- Favicon-->
    <link rel="icon" href="img/icons/icon-72x72.png">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <div class="text-left px-4">
              <h5 class="mb-1 text-white">Verify Phone Number</h5>
              <p class="mb-4 text-white">Enter the OTP code sent to<strong class="ml-1">+91 {{ Auth::user()->mobile }}</strong></p>
            </div>
            <!-- OTP Verify Form-->
            <div class="otp-verify-form mt-5 px-4">
                <form method="POST" action="{{ url('enterotp') }}">
                  @csrf
                <div class="d-flex justify-content-between mb-5">
                  <input class="form-control" type="text" name="one" value="" placeholder="-" maxlength="1" required>
                  <input class="form-control" type="text" name="two" value="" placeholder="-" maxlength="1" required>
                  <input class="form-control" type="text" name="three" value="" placeholder="-" maxlength="1" required>
                  <input class="form-control" type="text" name="four" value="" placeholder="-" maxlength="1" required>
                </div>
                <button class="btn btn-warning btn-lg w-100" type="submit">Verify &amp; Proceed</button>
              </form>
            </div>
            <!-- Term & Privacy Info-->
            <div class="login-meta-data px-4">
              <p class="mt-3 mb-0">Don't received the OTP?<span class="otp-sec ml-1 text-white" id="resendOTP"></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/default/jquery.passwordstrength.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jarallax-video.min.js"></script>
    <script src="js/default/dark-mode-switch.js"></script>
    <script src="js/default/otp-timer.js"></script>
    <script src="js/default/active.js"></script>
    <script src="js/pwa.js"></script>
  </body>
</html>