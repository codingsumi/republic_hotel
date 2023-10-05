<?php include_once 'components/top.php'; ?>
 <body>
     <div class="col-lg-2"></div>
     <div class="col-lg-8" style="padding-bottom:100px;">
         <div class="sidebar">
             <div class=" comments-area">
                 <h2 class="text-center">Book Your Room</h4>
                     <div class="blog-reply">
                         <form action="#" method="POST">
                            <label class="text-danger" id="err"></label>
                            <label class="text-info" id="msg"></label>
                             <div class="row">
                                 <div class="col-lg-6">
                                     <input type="text" id="name" onKeyPress="return onlyAlphabets(event,this)" placeholder="Name*">
                                 </div>
                                 <div class="col-lg-6">
                                     <input type="text" id="mobile" maxlength="10" onkeypress="return numberonly(event);" placeholder="Mobile*">
                                 </div>
                                 <div class="col-lg-6">
                                     <input type="email" id="email" placeholder="Email*" >
                                 </div>
                                 <div class="col-lg-6">
                                     <select id="room_type">
                                         <option value="0">----Select Room Type *----</option>
                                         <option> Presidential</option>
                                         <option> Club Deluxe Room</option>
                                         <option> Standard Deluxe Room</option>
                                     </select>
                                 </div>
                                 <div class="col-lg-6">
                                     <input size="16" type="text" id="datepicker1" value="Arrival Date" placeholder="Arrival date *">
                                 </div>
                                 <div class="col-lg-6">
                                     <input size="16" type="text" id="datepicker2"  value="Departure Date" placeholder="Departure date *">
                                 </div>




                                 <div class="col-lg-12 text-center">
                                     <textarea placeholder="Your Message Should be here !!! *" id="message"></textarea>
                                     <div class="g-recaptcha" data-sitekey="6LeSZ60UAAAAALqXhWWFhBPoUhwsRTgmCv3OZKFO"></div>
                                     <button class="theme-btn theme-btn6" type="button" name="replysubmit">Book Now</button>
                                 </div>
                             </div>
                         </form>
                     </div>
             </div>


         </div>
     </div>
     <div class="col-lg-2"></div>
     <script src="js/jquery.min.js"></script>
     <script src="../www.google.com/recaptcha/api.js" async defer></script>
     <!-- Bootstrap JS -->
     <script src="js/bootstrap.min.js"></script>
     <!-- jquery ui JS -->
     <script src="js/jquery-ui.min.js"></script>
     <!-- Slicknav JS -->
     <script src="js/jquery.slicknav.min.js"></script>
     <!-- owl carousel JS -->
     <script src="js/owl.carousel.min.js"></script>
     <!-- Popup JS -->
     <script src="js/jquery.magnific-popup.min.js"></script>
     <!-- Counterup JS -->
     <script src="js/jquery.counterup.min.js"></script>
     <!-- Counterup waypoints JS -->
     <script src="js/waypoints.min.js"></script>
     <!-- Isotope JS -->
     <script src="js/isotope.pkgd.min.js"></script>
     <!-- YTPlayer JS -->
     <script src="js/jquery.mb.YTPlayer.min.js"></script>
     <!-- jQuery Easing JS -->
     <script src="js/jquery.easing.1.3.js"></script>
     <!-- Vega JS -->
     <script src="js/vegas.min.js"></script>
     <!-- main JS -->
     <script src="js/main.js"></script>
     <script src="../code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../unpkg.com/gijgo%401.9.13/js/gijgo.min.js" type="text/javascript"></script>
     <script>
         $('#myCarousel').carousel({
             interval: 900
         });

     </script>
     <script>
        $('#datepicker1').datepicker();
        $('#datepicker2').datepicker();
    </script>
   <script>
        $(document).ready(function(){
            $('button').click(function(){
                var name = $('#name').val();
                var mobile = $('#mobile').val();
                var email = $('#email').val();
                var room = $('#room_type').val();
                var date1 = $('#datepicker1').val();
                var date2 = $('#datepicker2').val();
                var message = $('#message').val();
                var book = "book_now";
                var response = grecaptcha.getResponse();
                if(name == "" || mobile == "" || email == "" || date1 == "" || date2 == "" || message == "")
                    {
                        $('input,textarea,select').css('border-color','red');
                        $('#err').html('All Fields Are Required');
                        setTimeout(function(){ $('input,textarea,select').css('border-color','grey'); }, 5000);
                        setTimeout(function(){ $('#err').fadeOut('slow'); }, 5000);
                    }
                else{
                     $('#err').html('');
                     $.ajax({
                         url:"php_assets/book_room.php",
                         type:"post",
                         data:{name: name, email: email, mobile: mobile, room: room, date1: date1, date2: date2, message: message, book: book,response: response},
                         success: function(data)
                         {
                             $('form').trigger("reset");
                             $('#msg').html(data);
                             setTimeout(function(){ $('#msg').fadeOut('slow'); }, 3000);
                         }
                     });
                }
            });
        });  
   </script>
 </body>
</html>
