<?php
//session_start();
if(isset($_SESSION['log_in']))
{
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<title>Use Case Matrix</title>    
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
                                        <li><a class="active" href="http://ucr.nz">Home</a></li>
                                        <li><a class="active" href="http://ucr.nz/form/formpage.php">Contact</a></li>
<!--
                                        <li><a data-scroll-nav="0">How it works on site<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a data-scroll-nav="1">UCR Services</a></li>
                                            </ul>
                                        </li>
-->
                                        <li><a data-scroll-nav="2">Site Estimator<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a data-scroll-nav="3">Step 1: Personal Details</a></li>
                                                <li><a data-scroll-nav="4">Step 2: Use Case</a></li>
                                                <li><a data-scroll-nav="5">Step 3: Built Environment</a></li>
                                                <li><a data-scroll-nav="6">Step 4: Attach a picture</a></li>
                                                <li><a data-scroll-nav="7">Step 5: Confirm and Send</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="active" href="login.html">Logout</a></li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</header>
<!-- header-end -->
        
<!-- bradcam_area  -->
     <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <h3>Use Case Matrix</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /bradcam_area  -->
    
    <div class="how_we_work_area extra_margin_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div data-scroll-index="0" class="work_info">
                        <div class="section_title">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">How it works on site</h3>
                            <p class="mid_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Find out more information about how our system works on site.</p>
                            <p class="last_p wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">Advanced antennas, the Locators, measure the direction of a radio signal transmitted by a Tag. The Quuppa Positioning Engine then computes the Tag’s position using advanced algorithms.</p>
                        </div>
                        <div class="video_watch d-flex align-items-center">
                            <div class="play_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                <a href="https://www.youtube.com/watch?v=nKXXfshFllw&t=1s" target="_blank"> <i class="fa fa-play"></i> </a>
                            </div>
                           <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".7s"> Watch Video</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- case-form-start -->
        
<section data-scroll-index="1" class="contact-section section_padding">
    <div class="container">    
      <div class="row">
        <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
          <h2 class="wow fadeInUp">UCR Services</h2>
        </div>
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp">
                        <div class="panel panel-danger wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="panel-body wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                <div class="progress-table">
                                    <div class="table-head wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                                        <div class="visit"></div>
            <!--							<div class="country">Basic</div>-->
                                        <div class="visit1">Basic</div>
                                        <div class="visit2">PRO</div>
                                        <div class="visit3">PRO+</div>
                                        <div class="visit4">Ultra</div>
            <!--							<div class="percentage">Percentages</div>-->
                                    </div>
                                    <div class="table-row1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit6">Standard Services</div>
            <!--							<div class="country"> <img src="img/elements/f1.jpg" alt="flag">Canada</div>-->
                                        <div class="visit5"></div>
                                        <div class="visit5"></div>
                                        <div class="visit5"></div>
                                        <div class="visit5"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-1" role="progressbar" style="width: 80%"
                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit6">Behaviour Analysis</div>
            <!--							<div class="country"> <img src="img/elements/f2.jpg" alt="flag">Canada</div>-->
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-2" role="progressbar" style="width: 30%"
                                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit6">Asset Tracking</div>
            <!--							<div class="country"> <img src="img/elements/f3.jpg" alt="flag">Canada</div>-->
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-3" role="progressbar" style="width: 55%"
                                                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit6">Materials Handling Platforms</div>
            <!--							<div class="country"> <img src="img/elements/f3.jpg" alt="flag">Canada</div>-->
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5  tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-3" role="progressbar" style="width: 55%"
                                                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit6">Product inventory</div>
            <!--							<div class="country"> <img src="img/elements/f4.jpg" alt="flag">Canada</div>-->
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
                                        <div class="visit5 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-4" role="progressbar" style="width: 60%"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit">PRO Services</div>
            <!--							<div class="country"> <img src="img/elements/f5.jpg" alt="flag">Canada</div>-->
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-5" role="progressbar" style="width: 40%"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit">Indoor Navigation</div>
            <!--							<div class="country"> <img src="img/elements/f6.jpg" alt="flag">Canada</div>-->
                                        <div class="visit7"></div>
                                        <div class="visit7 tick-table"></div>
                                        <div class="visit7 tick-table"></div>
                                        <div class="visit7 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-6" role="progressbar" style="width: 70%"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit">Location Based Advertising</div>
            <!--							<div class="country"> <img src="img/elements/f7.jpg" alt="flag">Canada</div>-->
                                        <div class="visit7"></div>
                                        <div class="visit7 tick-table"></div>
                                        <div class="visit7 tick-table"></div>
                                        <div class="visit7 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-7" role="progressbar" style="width: 30%"
                                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit">Access Control</div>
            <!--							<div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>-->
                                        <div class="visit7"></div>
                                        <div class="visit7 tick-table"></div>
                                        <div class="visit7 tick-table"></div>
                                        <div class="visit7 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-8" role="progressbar" style="width: 60%"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit">Collision Avoidance</div>
            <!--							<div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>-->
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7 tick-table"></div>
                                        <div class="visit7 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-8" role="progressbar" style="width: 60%"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit">Athletes Sports Data</div>
            <!--							<div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>-->
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-8" role="progressbar" style="width: 60%"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit">Sports Media</div>
            <!--							<div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>-->
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-8" role="progressbar" style="width: 60%"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit">Real-time Video Augmenting</div>
            <!--							<div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>-->
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-8" role="progressbar" style="width: 60%"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                    <div class="table-row wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
                                        <div class="visit">Automated Camera Control</div>
            <!--							<div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>-->
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7"></div>
                                        <div class="visit7 tick-table"></div>
            <!--
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-8" role="progressbar" style="width: 60%"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
            -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
<!-- case-form-end -->
<hr data-scroll-index="2">
    
 <div class="how_we_work_area1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="work_info">
                        <div class="section_title">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Site Estimator</h3>
                            <p class="mid_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Find out more information about how our Site Estimator works.</p>
                        </div>
                        <div data-scroll-index="3" class="video_watch d-flex align-items-center">
                            <div class="play_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                <a href="https://www.youtube.com/watch?v=nKXXfshFllw&t=1s" target="_blank"> <i class="fa fa-play"></i> </a>
                            </div>
                           <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".7s">How our Site Estimator works</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
<!-- ================ contact section start ================= -->
<!--<section class="contact-section section_padding">-->
    <div class="container">    
      <div class="row">
        <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
<!--          <h2 class="wow fadeInUp">Site Estimator</h2>-->
        </div>
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp">
                        <div class="panel panel-danger wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="panel-body wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                <form action="makepdf.php" method="post" enctype = "multipart/form-data">
                                        <div class="col-md-12">
                                            <h3 class="mb-30">Step 1: Personal Details</h3>
<!--
                                            <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Summary Description</label>
                                                <textarea rows="3" name="message1" class="single-input" placeholder="Type Your Message"></textarea>
                                            </div>
-->
                                        </div>
                                            <div class="col-md-6 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >First Name</label>
                                                    <input type="text" name="fname" required class="single-input" placeholder="Enter your first name">
                                            </div>
                                            <div class="col-md-6 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Last Name</label>
                                                    <input data-scroll-index="4" type="text" name="lname" required class="single-input" placeholder="Enter your last name">
                                            </div>
                                            <div class="col-md-12 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Email</label>
                                                    <input type="email" name="email" required class="single-input" placeholder="Enter email">
                                            </div>
                                        <div class="col-md-12">
                                            <hr>
                                            <h3 class="mb-30">Step 2: Use Case</h3>
                                            <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Summary Description</label>
                                                <textarea rows="3" name="message1" class="single-input" placeholder="Type Your Message"></textarea>
                                            </div>
                                        </div>
                                            <div class="col-md-6 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Address</label>
                                                    <input type="search" name="address_line_1" required class="addy-line1 single-input" id="address_line_1" placeholder="Start typing site address.." auto-complete>
                                            </div>
                                            <div class="col-md-6 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Suburb</label>
                                                    <input type="text" name="suburb" class="addy-suburb single-input" id="suburb">
                                            </div>
                                            <div class="col-md-6 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >City</label>
                                                    <input type="text" name="city" class="addy-city single-input" id="city">
                                            </div>
                                            <div class="col-md-6 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Postcode</label>
                                                    <input type="text" name="postcode" class="addy-postcode single-input" id="postcode">
                                            </div>
                                        <div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                            <h4 class="mb-30">Network Performance</h4>
                                            <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Minimum Network Performance Setting</label>
<!--                                                <div class="input-group-icon mt-10">-->
                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Performance">
                                                            <option value="Default">Basic</option>
                                                                <option value="PRO">PRO</option>
                                                                <option value="PRO+">PRO+</option>
                                                                <option value="Ultra">Ultra</option>
                                                        </select>
                                                    </div>
<!--                                                </div>-->
                                            </div>
                                            <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Network Technical Performance - Latency</label>
                                                <button3 id="modal-btn03" class="button03"></button3>
                                                  <div id="my-modal03" class="modal03">
                                                    <div class="modal-content03">
                                                      <div class="modal-header03">
                                                        <span class="close03">&times;</span>
                                                        <h20>Network Performance</h20>
                                                      </div>
                                                      <div class="modal-image03">
                                                <!--
                                                        <p>This is my modal</p>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla repellendus nisi, sunt consectetur ipsa velit
                                                          repudiandae aperiam modi quisquam nihil nam asperiores doloremque mollitia dolor deleniti quibusdam nemo
                                                          commodi ab.</p>
                                                -->
                                                      </div>
                                                <!--
                                                      <div class="modal-footer">
                                                        <h3>Modal Footer</h3>
                                                      </div>
                                                -->
                                                    </div>
                                                  </div>
                                                <div class="form-select" id="default-select">
                                                    <select name="Network_Latency">
                                                        <option value="Default">60 sec</option>
                                                            <option value="1 sec">1 sec</option>
                                                            <option value="0.2 sec">0.2 sec</option>
                                                            <option value="0.1 sec">0.1 sec</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Network Technical Performance - Update Rate</label>
                                                <div class="form-select" id="default-select">
                                                    <select name="Network_Update_Rate">
                                                        <option value="Default">1 Hz</option>
                                                            <option value="5 Hz">5 Hz</option>
                                                            <option value="10 Hz">10 Hz</option>
                                                            <option value="50 Hz">50 Hz</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Re-Check Minimum Network Performance Setting</label>
                                                <div class="form-select" id="default-select">
                                                    <select name="Re_Check_Performance1">
                                                        <option value="Default">Basic</option>
                                                            <option value="PRO">PRO</option>
                                                            <option value="PRO+">PRO+</option>
                                                            <option value="Ultra">Ultra</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="mb-30">Tags</h4>
                                            <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <button2 id="modal-btn02" class="button02"></button2>
                                                  <div id="my-modal02" class="modal02">
                                                    <div class="modal-content02">
                                                      <div class="modal-header02">
                                                        <span class="close02">&times;</span>
                                                        <h20>Tag Performance - Tag power and Update rate</h20>
                                                      </div>
                                                      <div class="modal-image02">
                                                <!--
                                                        <p>This is my modal</p>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla repellendus nisi, sunt consectetur ipsa velit
                                                          repudiandae aperiam modi quisquam nihil nam asperiores doloremque mollitia dolor deleniti quibusdam nemo
                                                          commodi ab.</p>
                                                -->
                                                      </div>
                                                <!--
                                                      <div class="modal-footer">
                                                        <h3>Modal Footer</h3>
                                                      </div>
                                                -->
                                                    </div>
                                                  </div>
                                                <label >Tag Performance - Tag power</label>
                                                <div class="form-select" id="default-select">
                                                    <select name="Tag_Latency">
                                                        <option value="Default">60 sec</option>
                                                            <option value="1 sec">1 sec</option>
                                                            <option value="0.2 sec">0.2 sec</option>
                                                            <option value="0.1 sec">0.1 sec</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Tag Performance - Update rate</label>
                                                <div class="form-select" id="default-select">
                                                    <select name="Tag_Update_Rate">
                                                        <option value="Default">1 Hz</option>
                                                            <option value="5 Hz">5 Hz</option>
                                                            <option value="10 Hz">10 Hz</option>
                                                            <option value="50 Hz">50 Hz</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Re-Check Minimum Network Performance Setting</label>
                                                <div data-scroll-index="5" class="form-select" id="default-select">
                                                    <select name="Re_Check_Performance2">
                                                        <option value="Default">Basic</option>
                                                            <option value="PRO">PRO</option>
                                                            <option value="PRO+">PRO+</option>
                                                            <option value="Ultra">Ultra</option>
                                                    </select>
                                                </div>
                                            </div>
<!--                                            <h3 class="mb-30">Tags</h3>-->
                                            <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label >Number of Tags for all use cases</label>
                                                <div class="form-select" id="default-select">
                                                    <input type="text" name="Number_of_Tags" required class="single-input" placeholder="Enter number of tags">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <hr>
                                            <h3 class="mb-30 col-md-9">Step 3: Built Environment</h3>
                                            <div class="col-md-3 switch-wrap d-flex justify-content-end">
                                                        <p >Add More Areas</p>
                                                    <div class="primary-switch">
                                                        <input type="checkbox" id="primary-switch1" onclick="myFunction()">
                                                        <label for="primary-switch1"></label>
                                                    </div>
                                            </div>
<!--
                                            <div class="help-tip">
                                                <m>&#x2022 Open would be a devanning area
                                                    <br>&#x2022 Semi confined would be inventory stacked on top of each other
                                                    <br>&#x2022 Confined would be inventory stacked in racking
                                                </m>
                                            </div>
-->
                                        </div>
                                            <div class="col-md-12 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">      
                                                <label>Summary Description</label>
                                                <textarea rows="3" name="message2" class="single-input" placeholder="Type Your Message"></textarea>
                                            </div>
                                          <div id="myDIV1" class="form-section wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                              
                                                <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Name</label>
                                                    <input type="text" name="Area_Name1" required class="single-input" placeholder="Enter the open area name">
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Network Setup</label>

                                                    <button1 id="modal-btn01" class="button01"></button1>
                                                      <div id="my-modal01" class="modal01">
                                                        <div class="modal-content01">
                                                          <div class="modal-header01">
                                                            <span class="close01">&times;</span>
                                                            <h20>Network Setup</h20>
                                                          </div>
                                                          <div class="modal-body01 modal-image01"></div>
<!--
                                                          <div class="modal-footer">
                                                            <h3>Modal Footer</h3>
                                                          </div>
-->
                                                        </div>
                                                    </div>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Setup1">
                                                            <option value="Default">Presence</option>
                                                                <option value="Proximity">Proximity</option>
                                                                <option value="Positioning">Positioning</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Type</label>
                                                    
                                                    <button2 id="modal-btn04" class="button04"></button2>
                                                      <div id="my-modal04" class="modal04">
                                                        <div class="modal-content04">
                                                          <div class="modal-header04">
                                                            <span class="close04">&times;</span>
                                                            <h20>Area Type - Company Layout</h20>
                                                          </div>
                                                          <div class="modal-body04 modal-image04"></div>
<!--
                                                          <div class="modal-footer">
                                                            <h3>Modal Footer</h3>
                                                          </div>
-->
                                                        </div>
                                                    </div>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Area_Type1">
                                                            <option value="Default">Open Area</option>
                                                                <option value="Semi_Confined_Area">Semi Confined Area</option>
                                                                <option value="Confined">Confined</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Area m²</label>

                                                    <div class="help-tip2">
                                                    <m2>&#x2022 m x m = m²</m2>
                                                    </div>

                                                    <input type="text" name="Area1" required class="single-input" placeholder="Enter open area">
                                                </div>
                                              
                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Height</label>
                                                    <input type="text" name="Height1" required class="single-input" placeholder="Enter height">
                                                </div>
                                              
                                                <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <hr>
                                                    <label >Area Name</label>
                                                    <input type="text" onblur="checkRequired(this.value, 'Area2')" name="Area_Name2" id="Area_Name2" class="single-input" placeholder="Enter the open area name">
                                                </div>
                                              
<!--
                                                <div class="form-group col-md-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Attach a picture</label>
                                                    <input type="file" id="file" name="image2">
                                                </div>
-->

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Network Setup</label>
                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Setup2">
                                                            <option value="Default">Presence</option>
                                                                <option value="Proximity">Proximity</option>
                                                                <option value="Positioning">Positioning</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Type</label>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Area_Type2">
                                                            <option value="Default">Open Area</option>
                                                                <option value="Semi_Confined_Area">Semi Confined Area</option>
                                                                <option value="Confined">Confined</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Area m²</label>
                                                    <input type="text" name="Area2" id="Area2" class="single-input" placeholder="Enter open area" onblur="checkRequired(this.value, 'Area_Name2')">
                                                </div>
                                              
                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Height</label>
                                                    <input type="text" name="Height2" class="single-input" placeholder="Enter height">
                                                </div>
                                              
                                                <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <hr>
                                                    <label >Area Name</label>
                                                    <input type="text" name="Area_Name3" id="Area_Name3" class="single-input" placeholder="Enter the open area name" onblur="checkRequired(this.value, 'Area3')">
                                                </div>
                                              
<!--
                                                <div class="form-group col-md-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Attach a picture</label>
                                                    <input type="file" id="file" name="image">
                                                </div>
-->

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Network Setup</label>
                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Setup3">
                                                            <option value="Default">Presence</option>
                                                                <option value="Proximity">Proximity</option>
                                                                <option value="Positioning">Positioning</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Type</label>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Area_Type3">
                                                            <option value="Default">Open Area</option>
                                                                <option value="Semi_Confined_Area">Semi Confined Area</option>
                                                                <option value="Confined">Confined</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Area m²</label>
                                                    <input type="text" name="Area3" id="Area3" class="single-input" placeholder="Enter open area" onblur="checkRequired(this.value, 'Area_Name3')">
                                                </div>
                                              
                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Height</label>
                                                    <input type="text" name="Height3" class="single-input" placeholder="Enter height">
                                                </div>
                                              
                                                <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <hr>
                                                    <label >Area Name</label>
                                                    <input type="text" name="Area_Name4" id="Area_Name4" class="single-input" placeholder="Enter the open area name" onblur="checkRequired(this.value, 'Area4')">
                                                </div>
                                              
<!--
                                                <div class="form-group col-md-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Attach a picture</label>
                                                    <input type="file" id="file" name="image">
                                                </div>
-->

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Network Setup</label>
                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Setup4">
                                                            <option value="Default">Presence</option>
                                                                <option value="Proximity">Proximity</option>
                                                                <option value="Positioning">Positioning</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Type</label>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Area_Type4">
                                                            <option value="Default">Open Area</option>
                                                                <option value="Semi_Confined_Area">Semi Confined Area</option>
                                                                <option value="Confined">Confined</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Area m²</label>
                                                    <input type="text" name="Area4" id="Area4" class="single-input" placeholder="Enter open area" onblur="checkRequired(this.value, 'Area_Name4')">
                                                </div>
                                              
                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Height</label>
                                                    <input type="text" name="Height4" class="single-input" placeholder="Enter height">
                                                </div>
                                              
                                                <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <hr>
                                                    <label data-scroll-index="6">Area Name</label>
                                                    <input type="text" name="Area_Name5" id="Area_Name5" class="single-input" placeholder="Enter the open area name" onblur="checkRequired(this.value, 'Area5')">
                                                </div>
                                              
<!--
                                                <div class="form-group col-md-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Attach a picture</label>
                                                    <input type="file" id="file" name="image">
                                                </div>
-->

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Network Setup</label>
                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Setup5">
                                                            <option value="Default">Presence</option>
                                                                <option value="Proximity">Proximity</option>
                                                                <option value="Positioning">Positioning</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Type</label>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Area_Type5">
                                                            <option value="Default">Open Area</option>
                                                                <option value="Semi_Confined_Area">Semi Confined Area</option>
                                                                <option value="Confined">Confined</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Area m²</label>
                                                    <input type="text" name="Area5" id="Area5" class="single-input" placeholder="Enter open area" onblur="checkRequired(this.value, 'Area_Name5')">
                                                </div>
                                              
                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Height</label>
                                                    <input type="text" name="Height5" class="single-input" placeholder="Enter height">
                                                </div>
                                        </div>
                                        <div id="myDIV2" class="hidden form-section">
                                            
                                                <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <hr>
                                                    <label >Area Name</label>
                                                    <input type="text" name="Area_Name6" id="Area_Name6" class="single-input" placeholder="Enter the open area name" onblur="checkRequired(this.value, 'Area6')">
                                                </div>
                                            
<!--
                                                <div class="form-group col-md-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Attach a picture</label>
                                                    <input type="file" id="file" name="image">
                                                </div>
-->

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Network Setup</label>
                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Setup6">
                                                            <option value="Default">Presence</option>
                                                                <option value="Proximity">Proximity</option>
                                                                <option value="Positioning">Positioning</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Type</label>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Area_Type6">
                                                            <option value="Default">Open Area</option>
                                                                <option value="Semi_Confined_Area">Semi Confined Area</option>
                                                                <option value="Confined">Confined</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Area m²</label>
                                                    <input type="text" name="Area6" id="Area6" class="single-input" placeholder="Enter open area" onblur="checkRequired(this.value, 'Area_Name6')">
                                                </div>
                                            
                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Height</label>
                                                    <input type="text" name="Height6" class="single-input" placeholder="Enter height">
                                                </div>
                                            
                                                <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <hr>
                                                    <label >Area Name</label>
                                                    <input type="text" name="Area_Name7" id="Area_Name7" class="single-input" placeholder="Enter the open area name" onblur="checkRequired(this.value, 'Area7')">
                                                </div>
                                            
<!--
                                                <div class="form-group col-md-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Attach a picture</label>
                                                    <input type="file" id="file" name="image">
                                                </div>
-->

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Network Setup</label>
                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Setup7">
                                                            <option value="Default">Presence</option>
                                                                <option value="Proximity">Proximity</option>
                                                                <option value="Positioning">Positioning</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Type</label>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Area_Type7">
                                                            <option value="Default">Open Area</option>
                                                                <option value="Semi_Confined_Area">Semi Confined Area</option>
                                                                <option value="Confined">Confined</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Area m²</label>
                                                    <input type="text" name="Area7" id="Area7" class="single-input" placeholder="Enter open area" onblur="checkRequired(this.value, 'Area_Name7')">
                                                </div>
                                            
                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Height</label>
                                                    <input type="text" name="Height7" class="single-input" placeholder="Enter height">
                                                </div>
                                            
                                                <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <hr>
                                                    <label >Area Name</label>
                                                    <input type="text" name="Area_Name8" id="Area_Name8" class="single-input" placeholder="Enter the open area name" onblur="checkRequired(this.value, 'Area8')">
                                                </div>
                                                
<!--
                                                <div class="form-group col-md-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Attach a picture</label>
                                                    <input type="file" id="file" name="image">
                                                </div>
-->

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Network Setup</label>
                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Setup8">
                                                            <option value="Default">Presence</option>
                                                                <option value="Proximity">Proximity</option>
                                                                <option value="Positioning">Positioning</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Type</label>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Area_Type8">
                                                            <option value="Default">Open Area</option>
                                                                <option value="Semi_Confined_Area">Semi Confined Area</option>
                                                                <option value="Confined">Confined</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Area m²</label>
                                                    <input type="text" name="Area8" id="Area8" class="single-input" placeholder="Enter open area" onblur="checkRequired(this.value, 'Area_Name8')">
                                                </div>
                                            
                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Height</label>
                                                    <input type="text" name="Height8" class="single-input" placeholder="Enter height">
                                                </div>
                                            
                                                <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <hr>
                                                    <label >Area Name</label>
                                                    <input type="text" name="Area_Name9" id="Area_Name9" class="single-input" placeholder="Enter the open area name" onblur="checkRequired(this.value, 'Area9')">
                                                </div>
                                            
<!--
                                                <div class="form-group col-md-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Attach a picture</label>
                                                    <input type="file" id="file" name="image">
                                                </div>
-->

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Network Setup</label>
                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Setup9">
                                                            <option value="Default">Presence</option>
                                                                <option value="Proximity">Proximity</option>
                                                                <option value="Positioning">Positioning</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Type</label>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Area_Type9">
                                                            <option value="Default">Open Area</option>
                                                                <option value="Semi_Confined_Area">Semi Confined Area</option>
                                                                <option value="Confined">Confined</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Area m²</label>
                                                    <input type="text" name="Area9" id="Area9" class="single-input" placeholder="Enter open area" onblur="checkRequired(this.value, 'Area_Name9')">
                                                </div>
                                            
                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Height</label>
                                                    <input type="text" name="Height9" class="single-input" placeholder="Enter height">
                                                </div>
                                            
                                                <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <hr>
                                                    <label >Area Name</label>
                                                    <input type="text" name="Area_Name10" id="Area_Name10" class="single-input" placeholder="Enter the open area name" onblur="checkRequired(this.value, 'Area10')">
                                                </div>
                                            
<!--
                                                <div class="form-group col-md-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Attach a picture</label>
                                                    <input type="file" id="file" name="image">
                                                </div>
-->

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Network Setup</label>
                                                    <div class="form-select" id="default-select">
                                                        <select name="Network_Setup10">
                                                            <option value="Default">Presence</option>
                                                                <option value="Proximity">Proximity</option>
                                                                <option value="Positioning">Positioning</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label >Area Type</label>

                                                    <div class="form-select" id="default-select">
                                                        <select name="Area_Type10">
                                                            <option value="Default">Open Area</option>
                                                                <option value="Semi_Confined_Area">Semi Confined Area</option>
                                                                <option value="Confined">Confined</option>
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Area m²</label>
                                                    <input type="text" name="Area10" id="Area10" class="single-input" placeholder="Enter open area" onblur="checkRequired(this.value, 'Area_Name10')">
                                                </div>
                                            
                                                <div class="form-group col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                    <label>Height</label>
                                                    <input type="text" name="Height10" class="single-input" placeholder="Enter height">
                                                </div>
                                                
                                            </div>
                                        <div style="padding-bottom: 20px" class="col-md-12 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                            <hr>
                                            <h3 class="mb-30">Step 4: Attach a picture of each area</h3>
<!--
                                            <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                                <label><br>&#x2022 Name the file according to area
                                                    <br data-scroll-index="7">&#x2022 File size must  exceed 2 mb
                                                    <br>&#x2022 Choose a JPEG, JPG or PNG file
                                                </label>
                                                <input name="userfile[]" multiple="multiple" type="file" id="file">
                                            </div>
-->
<!--                                            <a class="genric-btn primary small wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".2s" href="dropzone/index.php" target="_blank">Resize Image Assistant</a>-->
                                            <?php
                                                //deleteing images
                                                if(isset($_REQUEST['img']) and $_REQUEST['img']!=""){
                                                    @unlink('uploads/'.$_REQUEST['img']);
                                                    @unlink('uploads/thumb/'.$_REQUEST['img']);
                                                    $msg	=	'<div class="alert alert-success">Image delete successfully.</div>';
                                                }
                                            ?>
                                            <div class="container">
                                                <div class="alert alert-warning my-2">
                                                    <i class="fa fa-2x fa-exclamation-circle float-right"></i>
                                                    <ol class="m-0">
                                                        <label>
                                                        <br>&#x2022 File size must  exceed 5 mb.
                                                        <br>&#x2022 Choose a JPEG, JPG or PNG file.
                                                        </label>
                                                    </ol>
                                                </div>
                                                <!-- Place this tag where you want the button to render. -->
                                                <div id="msg"><?php echo isset($msg)?$msg:''; ?></div>
                                                <div class="card">
                                                    <div class="card-header"><i class="glyphicon glyphicon-upload"></i> <label>Upload Multiple Files</label></div>
                                                    <div class="card-body">
<!--
                                                        <div class="form-group">
                                                            <label><strong>Resize Width</strong></label>
                                                            <input type="number" name="newWidth" id="newWidth" class="form-control">
                                                            <span class="text-danger"><i class="fa fa-exclamation-triangle"></i> Left empty for original image.</span>
                                                        </div>
-->
                                                        <div class="form-group">
                                                            <div class="dropzone dz-clickable" id="myDrop">
                                                                <div class="dz-default dz-message" data-dz-message="">
                                                                    <span>Drop files here to upload</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div data-scroll-index="7" class="form-group">
                                                            <button type="submit" id="add_file" class="btn btn-primary" name="submit"><i class="fa fa-upload"></i><label>Upload File(s)</label></button>        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
                                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
                                            <!--Only these JS files are necessary--> 
                                            <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
                                            <script src="dropzone/dropzone.js"></script>
                                            <script>
                                            //Dropzone script
                                            Dropzone.autoDiscover = false;
                                            var myDropzone = new Dropzone("div#myDrop", 
                                             { 
                                                 paramName: "files", // The name that will be used to transfer the file
                                                 addRemoveLinks: true,
                                                 uploadMultiple: true,
                                                 autoProcessQueue: false,
                                                 parallelUploads: 50,
                                                 maxFilesize: 30, // MB
                                                 acceptedFiles: ".png, .jpeg, .jpg, .gif",
                                                 url: "ajax/actions.ajax.php",
                                             });


                                             /* Add Files Script*/
                                             myDropzone.on("success", function(file, message){
                                                $("#msg").html(message);
                                             });

                                             myDropzone.on("error", function (data) {
                                                 $("#msg").html('<div class="alert alert-danger">There is some thing wrong, Please try again!</div>');
                                             });

                                             myDropzone.on("complete", function(file) {
                                                myDropzone.removeFile(file);
                                             });

                                             $("#add_file").on("click",function (){
                                                myDropzone.processQueue();
                                             });
                                            </script>
                                        </div>

                                        <div style="padding-bottom: 20px" class="col-md-12 form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                            <hr>
                                            <h3 class="mb-30">Step 5: Confirm and Send</h3>
                                            <div class="col-md-12 single-element-widget">
                                                <div class="primary-checkbox">
                                                    <input type="checkbox" name="checkbox" value="check" id="default-checkbox">
                                                    <label for="default-checkbox"></label>
                                                </div>
                                                <p>Check, all use cases and photos are included.</p>
                                            </div>
                                        </div>
                                    <div class="form-group col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                        <button class="boxed-btn3 justify-content-right btn-raised btn-lg btn-warning" type="submit" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}">Send</button>
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
<!--</section>-->
        
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
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".8s" href="https://ucr.nz/form/formpage.php">Contact</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.1s" href="login.html">Logout</a></li>
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
  <script src="https://www.addy.co.nz/scripts/addy.js?key=8af794a708494fedb97691afc72b2f68&loadcss=true" async defer></script>

</body>

</html>

<?php
}
else
{
	echo "Access Denied";
	header("refresh:2;url=login.html");
}

?>