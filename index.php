<?php include_once 'components/top.php'; ?>

<body class="home3">
    <!-- Page loader -->
    <?php include_once 'components/header.php'; ?>

    <section class="hero-area">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/slider101.jpg" alt="Republic Hotel" style="width:100%;">
                </div>
                <div class="item">
                    <img src="images/slider102.jpg" alt="Republic Hotel" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/slider103.jpg" alt="Republic Hotel" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/slider104.jpg" alt="Republic Hotel" style="width:100%;">
                </div>
                <div class="item">
                    <img src="images/slider105.jpg" alt="Republic Hotel" style="width:100%;">
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section><!-- hero area end -->
    <div class="hero-area-content hidden-xs">

        <form action="https://www.republichotel.in/check-in?rooms" method="post">
            <div class="hero-area-form">
                <div class="single-form-box">

                    <input size="16" type="text" class="d1" placeholder="Arrival Date" id="datepicker1">
                </div>
                <div class="single-form-box">

                    <input size="16" type="text" class="d2" placeholder="Departure Date" id="datepicker2">
                </div>
                <div class="single-form-box">

                    <select id="adult">
                        <option value="0">ADULT</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="single-form-box">

                    <select id="children">
                        <option value="0">CHILDREN</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="single-form-box">
                    <!--<button class="theme-btn" type="submit">Check Availability</button>-->
                    <input type="submit" id="check" class="theme-btn" value="Check Availability">
                </div>
            </div>
        </form>
    </div>
    <!-- about section start -->
    <section class="pt-70 pb-100" style="padding-top:30px;">
        <div class="container">
            <div class="row flexbox-center">

                <div class="col-lg-7">
                    <div class="single-about-box">
                        <h3>We provide the most luxurious services.</h3>
                        <p align="justify">Republic Hotel is happy to welcome you! ,Located in the heart of the city Republic Hotel is considered to be one of the finest budget hotels in Patna. </p>
                        <h2>Welcome to Republic Hotel</h2>
                        <p align="justify">From excellent facilities to the best of comforts the Republic Hotel proves to be one of the ideal hotels in Patna for budget travellers and backpackers. Enjoy the comfort and luxury in Republic Hotel on your Tour to Patna in India. Business tourists can arrange their parties, events, conferences and seminars in Republic Hotel Patna. You casn avail the facilities of well-equipped conference halls and well-furnished banquet spaces. </p>
                        <a href="about-2.html" class="theme-btn">MORE ABOUT US</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="single-about-box text-lg-left text-center">
                        <img src="images/about.jpg" alt="about" style="border:1px solid #000" />
                    </div>
                </div>
            </div>
        </div>
    </section><!-- about section end -->


    <!-- available section start -->
    <section class="available-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title mb-50">
                        <h3>Find available</h3>
                        <h2>Awesome Rooms &amp; Suites</h2>
                        <p>Republic Hotel is happy to welcome you!, Located in the heart of the city Republic Hotel is considered to be one of the finest budget hotels in Patna.</p>
                    </div>
                </div>
            </div>
            <div class="available-slider">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="about-wrap">
                            <h2>Presidential Suite</h2>
                            <h3 style="margin-bottom:10px; color:#000">3 Bedrooms : <i class="fa fa-rupee"></i>20000/-</h3>
                            <h3 style="color:#000">Breakfast Included </h3>
                            <div class="available-icon">
                                <a style="color:#000" href="#"><i class="icofont icofont-laptop-alt"></i></a>
                                <a style="color:#000" href="#"><i class="icofont icofont-tea"></i></a>
                                <a style="color:#000" href="#"><i class="icofont icofont-users"></i></a>
                                <a style="color:#000" href="#"><i class="icofont icofont-wifi"></i></a>

                            </div>



                            <div class="row">
                                <!--div class="col-md-4 col-sm-6 col-12">
<div class="about-content">
<h4><span class="counter">15</span><span> + </span></h4>
<p style="color:#000">Experience Years</p>
</div>
</div-->
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="about-content">
                                        <h4><i class="fa fa-rupee"></i> <span class="counter"> 20000</span><span> </span></h4>
                                        <p style="color:#000">per night</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="">

                                        <h4>&nbsp;</h4>
                                        <h4>&nbsp;</h4>
                                        <a href="presidential-room-2.html" class="btn btn-info">Read More</a>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-md-none d-lg-block">
                        <div class="about-img">
                            <img src="images/rooms1.jpg" alt="Republic Hotel">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="about-wrap">
                            <h2>Club Deluxe Room</h2>
                            <h3 style="margin-bottom:10px; color:#000">Single Bedroom : <i class="fa fa-rupee"></i>4000/-</h3>
                            <h3 style="margin-bottom:10px; color:#000">Double Bedroom : <i class="fa fa-rupee"></i>4500/-</h3>
                            <h3 style="color:#000">Breakfast Included </h3>
                            <div class="available-icon">
                                <a style="color:#000" href="#"><i class="icofont icofont-laptop-alt"></i></a>
                                <a style="color:#000" href="#"><i class="icofont icofont-tea"></i></a>
                                <a style="color:#000" href="#"><i class="icofont icofont-users"></i></a>
                                <a style="color:#000" href="#"><i class="icofont icofont-wifi"></i></a>
                            </div>



                            <div class="row">
                                <!--div class="col-md-4 col-sm-6 col-12">
<div class="about-content">
<h4><span class="counter">15</span><span> + </span></h4>
<p style="color:#000">Experience Years</p>
</div>
</div-->
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="about-content">
                                        <h4><i class="fa fa-rupee"></i> <span class="counter"> 4000</span><span> </span></h4>
                                        <p style="color:#000">per night</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="">

                                        <h4>&nbsp;</h4>
                                        <h4>&nbsp;</h4>
                                        <a href="club-deluxe-room-2.html" class="btn btn-info">Read More</a>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-md-none d-lg-block">
                        <div class="about-img">
                            <img src="images/rooms2.jpg" alt="Republic Hotel">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="about-wrap">
                            <h2>Standard Delux Rooms</h2>
                            <h3 style="margin-bottom:10px; color:#000">Single Bedroom : <i class="fa fa-rupee"></i> 3500/-</h3>
                            <h3 style="margin-bottom:10px; color:#000">Double Bedroom : <i class="fa fa-rupee"></i> 4000/-</h3>
                            <h3 style="color:#000">Breakfast Included </h3>
                            <div class="available-icon">
                                <a style="color:#000" href="#"><i class="icofont icofont-laptop-alt"></i></a>
                                <a style="color:#000" href="#"><i class="icofont icofont-tea"></i></a>
                                <a style="color:#000" href="#"><i class="icofont icofont-users"></i></a>
                                <a style="color:#000" href="#"><i class="icofont icofont-wifi"></i></a>
                            </div>



                            <div class="row">
                                <!--div class="col-md-4 col-sm-6 col-12">
<div class="about-content">
<h4><span class="counter">15</span><span> + </span></h4>
<p style="color:#000">Experience Years</p>
</div>
</div-->
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="about-content">
                                        <h4><i class="fa fa-rupee"></i> <span class="counter"> 3500</span><span> </span></h4>
                                        <p style="color:#000">per night</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="">

                                        <h4>&nbsp;</h4>
                                        <h4>&nbsp;</h4>
                                        <a href="standard-deluxe-room-2.html" class="btn btn-info">Read More</a>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-md-none d-lg-block">
                        <div class="about-img">
                            <img src="images/rooms3.jpg" alt="Republic Hotel">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- available section end -->
    <!-- service section start -->
    <section class="service-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title mb-20">
                        <h3>Experience the best and luxurious</h3>
                        <h2>Events & Meetings</h2>
                        <p>If there is any place for corporate events, celebrating social events with quality of food & beverage then it's a Banquet which fulfill all this needs at a same venue, Republic Banquet are most ideal place for celebrating your own events.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li><a class="active show" data-target="#menu1" data-toggle="tab" href="#"><i class="icofont icofont-5-star-hotel"></i>REGAL - I</a></li>
                        <li><a data-toggle="tab" data-target="#menu2" href="#"><i class="icofont icofont-5-star-hotel"></i>REGAL - II</a></li>
                        <li><a data-toggle="tab" data-target="#menu3" href="#"><i class="icofont icofont-5-star-hotel"></i>REGAL - III</a></li>
                        <li><a data-toggle="tab" data-target="#menu4" href="#"><i class="icofont icofont-5-star-hotel"></i>BOARD ROOM - I & II</a></li>

                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade active show">
                    <div class="row flexbox-center">
                        <div class="col-lg-6">
                            <div class="single-service">
                                <h4>REGAL I</h4>
                                <p> An open and magnificently built banquet venue which is the preferred choice for events and business conferences.</p>

                                <div class="sidebar-widget">
                                    <br>
                                    <h4>Seating Arrangement with Dimension</h4>
                                    <ul>
                                        <li><a href="#">Cluster <span>(26 Pax)</span></a></li>
                                        <li><a href="#">U Shape <span>(36 Pax)</span></a></li>
                                        <li><a href="#">Theater <span>(40 Pax)</span></a></li>
                                        <li><a href="#">Class Room <span>(32 Pax)</span></a></li>
                                    </ul>


                                </div>
                                <a href="events-meetings-2.html" class="theme-btn">READ MORE</a>
                            </div>

                        </div>
                        <div class="col-md-2 col-sm-6"></div>
                        <div class="col-md-4 col-sm-6">
                            <div class="box">
                                <img src="images/regal1.jpg" style="border:2px solid #ffc107">
                                <div class="box-content">
                                    <h4 class="title">Regal I</h4>
                                    <span class="post">Events and Business Conferences.</span>
                                </div>
                                <ul class="icon">

                                    <li><a href="events-meetings-2.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3" style="padding-top:20px;"><a data-toggle="modal" data-target="#myModal" href="#"><img src="images/ml1.jpg"></a></div>
                        <div class="col-md-3" style="padding-top:20px;"><a data-toggle="modal" data-target="#youModal" href="#"><img src="images/ml2.jpg"></a></div>
                        <div class="col-md-3" style="padding-top:20px;"><a data-toggle="modal" data-target="#ssModal" href="#"><img src="images/ml3.jpg"></a></div>
                        <div class="col-md-3" style="padding-top:20px;"><a data-toggle="modal" data-target="#sssModal" href="#"><img src="images/ml4.jpg"></a></div>

                    </div>
                </div>
                <div id="menu2" class="tab-pane fade ">
                    <div class="row flexbox-center">
                        <div class="col-lg-6">
                            <div class="single-service">
                                <h4>REGAL II</h4>
                                <p> An open and magnificently built banquet venue which is the preferred choice for large events and business conferences with a well maintained partition.</p>

                                <div class="sidebar-widget">
                                    <br>
                                    <h4>Seating Arrangement with Dimension</h4>
                                    <ul>
                                        <li><a href="#">Cluster <span>(60 Pax)</span></a></li>
                                        <li><a href="#">U Shape <span>(50 Pax)</span></a></li>
                                        <li><a href="#">Theater <span>(80 Pax)</span></a></li>
                                        <li><a href="#">Class Room <span>(50 Pax)</span></a></li>
                                    </ul>
                                </div>
                                <a href="events-meetings-2.html" class="theme-btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6"></div>
                        <div class="col-md-4 col-sm-6">
                            <div class="box">
                                <img src="images/regal2.jpg" style="border:2px solid #ffc107">
                                <div class="box-content">
                                    <h4 class="title">Regal II</h4>
                                    <span class="post">Events and Business Conferences.</span>
                                </div>
                                <ul class="icon">

                                    <li><a href="events-meetings-2.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-top:20px;"><a data-toggle="modal" data-target="#myModal" href="#"><img src="images/tp1.jpg"></a></div>

                        <div class="col-md-6" style="padding-top:20px;"><a data-toggle="modal" data-target="#youModal" href="#"><img src="images/tp2.jpg"></a></div>
                    </div>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <div class="row flexbox-center">
                        <div class="col-lg-6">
                            <div class="single-service">
                                <h4>REGAL III</h4>
                                <p> An open and magnificently built banquet venue which is the preferred choice for large events and business conferences with a well maintained partition.</p>

                                <div class="sidebar-widget">
                                    <br>
                                    <h4>Seating Arrangement with Dimension</h4>
                                    <ul>
                                        <li><a href="#">Cluster <span>(50 Pax)</span></a></li>
                                        <li><a href="#">U Shape <span>(38 Pax)</span></a></li>
                                        <li><a href="#">Theater <span>(65 Pax)</span></a></li>
                                        <li><a href="#">Class Room <span>(45 Pax)</span></a></li>
                                    </ul>
                                </div>
                                <a href="events-meetings-2.html" class="theme-btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6"></div>
                        <div class="col-md-4 col-sm-6">
                            <div class="box">
                                <img src="images/regal3.jpg" style="border:2px solid #ffc107">
                                <div class="box-content">
                                    <h4 class="title">Regal III</h4>
                                    <span class="post">Events and Business Conferences.</span>
                                </div>
                                <ul class="icon">

                                    <li><a href="events-meetings-2.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-top:20px;"><a data-toggle="modal" data-target="#myModal" href="#"><img src="images/tp1.jpg"></a></div>

                        <div class="col-md-6" style="padding-top:20px;"><a data-toggle="modal" data-target="#youModal" href="#"><img src="images/tp2.jpg"></a></div>
                    </div>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <div class="row flexbox-center">
                        <div class="col-lg-6">
                            <div class="single-service">
                                <h4>BOARD ROOM I & II</h4>
                                <p> Work well for small metting and also booked for kitty Parties, Wedding Mandaps etc.</p>

                                <div class="sidebar-widget">
                                    <br>
                                    <h4>Seating Arrangement with Dimension</h4>
                                    <ul>
                                        <li><a href="#">Cluster <span>(18 Pax)</span></a></li>
                                        <li><a href="#">U Shape <span>(16 Pax)</span></a></li>
                                        <li><a href="#">Theater <span>(25 Pax)</span></a></li>
                                        <li><a href="#">Class Room <span>(18 Pax)</span></a></li>
                                    </ul>
                                </div>
                                <a href="events-meetings-2.html" class="theme-btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6"></div>
                        <div class="col-md-4 col-sm-6">
                            <div class="box">
                                <img src="images/board-room-img.jpg" style="border:2px solid #ffc107">
                                <div class="box-content">
                                    <h4 class="title">Board Room I & II</h4>
                                    <span class="post">Events and Business Conferences.</span>
                                </div>
                                <ul class="icon">

                                    <li><a href="events-meetings-2.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu5" class="tab-pane fade">
                    <div class="row flexbox-center">
                        <div class="col-lg-6">
                            <div class="single-service">
                                <h4>Conference Hall</h4>
                                <p> Work well for small metting and also booked for kitty Parties, Wedding Mandaps etc.</p>

                                <div class="sidebar-widget">
                                    <br>
                                    <h4>Seating Arrangement with Dimension</h4>
                                    <ul>
                                        <li><a href="#">Cluster <span>(18 Pax)</span></a></li>
                                        <li><a href="#">U Shape <span>(16 Pax)</span></a></li>
                                        <li><a href="#">Theater <span>(25 Pax)</span></a></li>
                                        <li><a href="#">Class Room <span>(18 Pax)</span></a></li>
                                    </ul>
                                </div>
                                <a href="events-meetings-2.html" class="theme-btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6"></div>
                        <div class="col-md-4 col-sm-6">
                            <div class="box">
                                <img src="images/regal1.jpg" style="border:2px solid #ffc107">
                                <div class="box-content">
                                    <h4 class="title">Conference Hall</h4>
                                    <span class="post">Events and Business Conferences.</span>
                                </div>
                                <ul class="icon">

                                    <li><a href="events-meetings-2.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- service section end -->
    <!-- counter section start -->
    <div class="video-area pt-30 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title mb-20">

                        <h2 style="color:#fff">HOTEL FACILITIES</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="counter-box">
                        <img src="images/icon1.png">
                        <p>Free WiFi</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="counter-box">
                        <img src="images/icon2.png">
                        <p>Parking</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="counter-box">
                        <img src="images/icon3.png">
                        <p>Breakfast</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="counter-box">
                        <img src="images/icon4.png">
                        <p>HD TV</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- counter section end -->
    <!-- offer section start -->
    <section class="offer-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title mb-20">

                        <h2>Our Special offer</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-offer">
                        <div class="special-offer-photo">
                            <img src="images/offer1.jpg" alt="offer" />
                        </div>
                        <div class="special-offer-caption">
                            <div class="display-table">
                                <div class="display-tablecell">
                                    <a href="#">Enjoy Your <br>Life Superbly</a>
                                    <div class="special-offer-caption-text">
                                        <p>Book your stay with exciting hotel offers, packages & holiday</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-offer">
                        <div class="special-offer-photo">
                            <img src="images/offer2.jpg" alt="offer" />
                        </div>
                        <div class="special-offer-caption">
                            <div class="display-table">
                                <div class="display-tablecell">
                                    <a href="#">Hotel<br> Special Offers</a>
                                    <div class="special-offer-caption-text">
                                        <p>Take a look at some of the exciting Hotel deals and offers </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- offer section end -->


    <section class="offer-area ptb-100" style="padding-bottom:10px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title mb-20">
                        <h4 style="padding-bottom:15px;">Testimonials</h4>
                        <h2>What Our Guests Say</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/img-1.png" alt="">
                            </div>
                            <p class="description">
                                Thank You very much for the warm Hospitality and for the excellent arrangements for our business events.<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </p>
                            <div class="testimonial-content">
                                <a href="#" class="title">Ramnik Mathur</a>
                                <span class="post">Apps Developer</span>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/img-1.png" alt="">
                            </div>
                            <p class="description">
                                My Stay in Republic Hotel during this weekend was comfortable. The hospitality as well as cleanliness is impressive. I also enjoyed the Food.
                            </p>
                            <div class="testimonial-content">
                                <a href="#" class="title">Kamlesh Sharma</a>
                                <span class="post">Tv9 Editor</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/img-1.png" alt="">
                            </div>
                            <p class="description">
                                The service here has just been fantastic; whatever we needed was brought to us right away. Our event coordinator was amazing, she has been most helpful.
                            </p>
                            <div class="testimonial-content">
                                <a href="#" class="title">Dr. Chandra Prakash</a>
                                <span class="post">Professor</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/img-1.png" alt="">
                            </div>
                            <p class="description">
                                It’s a beautiful property with great food and pleasant staff. Enjoyed my short stay which was made sweet by you all. God Bless.
                                <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </p>
                            <div class="testimonial-content">
                                <a href="#" class="title">Dr. Sujeet Mandal</a>
                                <span class="post">Doctor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- offer section end -->

    <hr>


    <!-- news section start -->
    <div class="news-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title mb-20">

                        <h2>Gallery</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="news-content">
                        <div class="single-news-box news-bg-1">
                            <div class="news-box-overlay">
                                <div class="display-table">
                                    <div class="display-tablecell">
                                        <a href="#">
                                            <h4>Republic Hotel</h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-news-box news-bg-2">
                            <div class="news-box-overlay">
                                <div class="display-table">
                                    <div class="display-tablecell">
                                        <a href="#">
                                            <h4>Republic Hotel</h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-news-box news-bg-3">
                            <div class="news-box-overlay">
                                <div class="display-table">
                                    <div class="display-tablecell">
                                        <a href="#">
                                            <h4>Republic Hotel</h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-news-box news-bg-4">
                            <div class="news-box-overlay">
                                <div class="display-table">
                                    <div class="display-tablecell">
                                        <a href="#">
                                            <h4>Republic Hotel</h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- news section end -->
    <!-- newsletter section start -->

    <!-- footer section start -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>24 Hour A Day</h3>
                        <h2 style="font-size:20px;">Phone Support</h2>
                        <h4>+91 612-2675520/21/24/28/29</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Social Media Channels</h3>
                        <h2 style="font-size:20px;">Connect With Us</h2>

                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>

                        <a href="https://www.facebook.com/republichotelpatna" target="_blank"><i class="icofont icofont-social-facebook"></i></a>
                        <a href="skype:+91-9334117111"><i class="icofont icofont-social-skype"></i></a>
                        <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>24 Hour A Day</h3>
                        <h2 style="font-size:20px;">Email Support</h2>
                        <h4><a href="mailto:republichotel@yahoo.com">republichotel@yahoo.com</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
 

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <iframe src="ca.html" style=" width:100%; height:600px; border:none; margin:0; padding:0; overflow:hidden;"></iframe>

        </div>
    </div>



    <span style="font-size:30px;cursor:pointer; position:fixed; right:-2px; top:290px; z-index:4000;" onclick="openNav()"><img src="images/qe.png"></span>

    <div class="modal-box">
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body">

                        <img src="images/ml1.jpg">


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-box">
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="youModal" tabindex="-1" role="dialog" aria-labelledby="youModalLabel">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body">
                        <img src="images/ml2.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-box">
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="ssModal" tabindex="-1" role="dialog" aria-labelledby="youModalLabel">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body">
                        <img src="images/ml3.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-box">
        <div class="modal fade" id="sssModal" tabindex="-1" role="dialog" aria-labelledby="youModalLabel">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body">
                        <img src="images/ml4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once 'components/footer.php';?>