<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Page</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/gijgo.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        
<!-- header-start -->
<header>
      <div class="header-area ">
          <div id="sticky-header" class="main-header-area">
              <div class="container-fluid p-0">
                  <div class="row align-items-center no-gutters">
                      <div class="col-xl-2 col-lg-2">
                          <div class="logo-img">
                              <a href="http://ucr.nz">
                                  <img src="img/logofinal.png" alt="">
                              </a>
                          </div>
                      </div>
                      <div class="col-xl-8 col-lg-8">
                          <div class="main-menu  d-none d-lg-block text-center">
                              <nav>
                                  <ul id="navigation">
                                        <li><a class="active" href="http://ucr.nz">home</a></li>
                                        <li><a href="formpage.php">Contact</a></li>
                                        <li><a href="http://ucr.nz/login/login.html">Login</a></li>
<!--
                                        <li><a href="formpage.php">Contact <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="http://ucr.nz/login/login.html">Login</a></li>
                                            </ul>
                                        </li>
-->
                                    </ul>
                              </nav>
                          </div>
                      </div>
<!--
                      <div class="col-lg-2 d-none d-lg-block">
                          <div class="log_chat_area d-flex align-items-end">
                              <a href="http://ucr.nz/login/login.html" target="_black" class="say_hi">Login</a>
                          </div>
                      </div>
-->
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
<!-- header-end -->

<!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">    
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
          <h2 class="wow fadeInUp">Get in Touch</h2>
        </div>
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 wow fadeInUp">
                        <div class="panel panel-danger wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="panel-body wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                <form action="makepdf.php" method="post">
                                    <div class="form-group col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        <label >First Name</label>
                                        <input type="text" name="fname" required class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        <label >Last Name</label>
                                        <input type="text" name="lname" required class="form-control" placeholder="Last Name">
                                    </div>
                                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                        <label >Subject</label>
                                        <input type="text" name="subject" required class="form-control" placeholder="Enter Subject">
                                    </div>
                                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <label >Email</label>
                                        <input type="email" name="email" required class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <label >Phone</label>
                                        <input type="text" name="phone" required class="form-control" placeholder="Enter Phone">
                                    </div>
                                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                        <label >Message</label>
                                        <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                        <button class="boxed-btn3 btn-raised btn-lg btn-warning" type="submit">Send</button>
                                    </div>
                                </form>
                                <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h4>
                                        Error
                                    </h4>
                                    Sorry there was an error sending your form. 
                                </div>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
<h2>Your message was sent successfully. Thank you for contacting UCR Location Services.</h2>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

        <!-- footer start -->
    <footer class="footer">
      <div class="footer_top">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-2 col-md-3">
                      <div class="footer_logo wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                          <a href="http://ucr.nz">
                              <img src="img/logofinal2.png" alt="">
                          </a>
                      </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-9">
                      <div class="menu_links">
                           <ul>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" href="http://ucr.nz">Home</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".8s" href="formpage.php">Contact</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.1s" href="http://ucr.nz/login/login.html">Login</a></li>
                            </ul>
                      </div>
                  </div>
<!--
                  <div class="col-lg-3 col-md-12">
                      <div class="socail_links">
                          <ul>
                              <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" href="#"> <i class="fa fa-facebook"></i> </a></li>
                              <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s" href="#"> <i class="fa fa-twitter"></i> </a></li>
                              <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" href="#"> <i class="fa fa-instagram"></i> </a></li>
                              <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" href="#"> <i class="fa fa-google-plus"></i> </a></li>
                          </ul>
                      </div>
                  </div>
-->
              </div>
          </div>
      </div>
      <div class="copy-right_text">
          <div class="container">
              <div class="footer_border"></div>
              <div class="row">
                  <div class="col-xl-12">
                      <p class="copy_right text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="#" target="_blank">Alexandre Viana</a>
                        </p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--/ footer end  -->

  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/gijgo.min.js"></script>

  <!--contact js-->
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>

  <script src="js/main.js"></script>
</body>

</html>