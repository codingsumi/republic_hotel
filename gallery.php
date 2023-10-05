<?php include_once 'components/top.php'; ?>
<style>
    * {
      box-sizing: border-box;
    }

    .row>.column {
      padding: 0 8px;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .column {
      float: left;
      width: 25%;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      position: fixed;
      z-index: 4000;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: black;
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      width: 90%;
      max-width: 600px;
    }

    /* The Close Button */
    .close {
      color: #fff !important;
      position: absolute;
      top: 10px;
      right: 25px;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #fff;
      text-decoration: none;
      cursor: pointer;
    }

    .mySlides {
      display: none;
    }

    .cursor {
      cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    img {
      margin-bottom: -4px;
    }

    .caption-container {
      text-align: center;
      background-color: black;
      padding: 2px 16px;
      color: white;
    }

    .demo {
      opacity: 0.6;
    }

    .active,
    .demo:hover {
      opacity: 1;
    }

    img.hover-shadow {
      transition: 0.3s;
    }

    .hover-shadow:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
  </style>
<body class="home3">
  <!-- Page loader -->
  <?php include_once 'components/header.php'; ?>
  <section class="breadcrumb-area" style="background:url('images/header-about.jpg'); background-size:cover">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-area-content">
            <h2>Photo Gallery</h2>
            <ul>
              <li><a href="index-3.html">Home</a></li>
              <li class="active"><a href="#">Photo Gallery</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section><!-- breadcrumb area end -->

  <!-- about section start -->
  <section class="pt-70 pb-100">
    <div class="container">
      <div class="">
        <h2 class="text-center" style="color:#ba720c">Photo Gallery</h2><BR>
        <div class="row">

          <div class="column">
            <img src="images/g1s.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">

          </div>
          <div class="column">
            <img src="images/g2s.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">

          </div>
          <div class="column">
            <img src="images/g3s.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">

          </div>
          <div class="column">
            <img src="images/g4s.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">

          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g5s.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">

          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g6s.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">

          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g7s.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">

          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g8s.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g9s.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g10s.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g11s.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g12s.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g13s.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g14s.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g15s.jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g16s.jpg" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g17s.jpg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g18s.jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g19s.jpg" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g20s.jpg" style="width:100%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g21s.jpg" style="width:100%" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g22s.jpg" style="width:100%" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g23s.jpg" style="width:100%" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
          </div>
          <div class="column" style="padding-top:20px;">
            <img src="images/g24s.jpg" style="width:100%" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
          </div>




        </div>

        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">

            <div class="mySlides">
              <div class="numbertext">1 / 24</div>
              <img src="images/g1b.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 24</div>
              <img src="images/g2b.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 24</div>
              <img src="images/g3b.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 24</div>
              <img src="images/g4b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">5 / 24</div>
              <img src="images/g5b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">6 / 24</div>
              <img src="images/g6b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">7 / 24</div>
              <img src="images/g7b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">8 / 24</div>
              <img src="images/g8b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">9 / 24</div>
              <img src="images/g9b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">10 / 24</div>
              <img src="images/g10b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">11 / 24</div>
              <img src="images/g11b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">12 / 24</div>
              <img src="images/g12b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">13 / 24</div>
              <img src="images/g13b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">14 / 24</div>
              <img src="images/g14b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">15 / 24</div>
              <img src="images/g15b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">16 / 24</div>
              <img src="images/g16b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">17 / 24</div>
              <img src="images/g17b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">18 / 24</div>
              <img src="images/g18b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">19 / 24</div>
              <img src="images/g19b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">20 / 24</div>
              <img src="images/g20b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">21 / 24</div>
              <img src="images/g21b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">22 / 24</div>
              <img src="images/g22b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">23 / 24</div>
              <img src="images/g23b.jpg" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">24 / 24</div>
              <img src="images/g24b.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
              <p id="caption"></p>
            </div>



          </div>
        </div>


      </div>
    </div>
  </section><!-- about section end -->
  <!-- available section start -->

  <!-- counter section start -->
  <div class="video-area pt-70 pb-100">
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
  <?php include_once 'components/footer.php'; ?>
  <script>
    $('#myCarousel').carousel({
      interval: 900
    });
  </script>
  <script>
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>

</body>

<!-- Mirrored from www.republichotel.in/gallery by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 05:39:07 GMT -->

</html>