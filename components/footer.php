<footer class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; 2019 Republic Hotel All rights Reserved. | Developed By : <a style="color:#fff" href="https://webmaker.in/" target="_blank">SAM Softech</a></p>
                </div>
            </div>
        </div>
    </footer><!-- footer section end -->

    <a href="#" class="scrollToTop"><i class="icofont icofont-arrow-up"></i></a>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script>
        $('#myCarousel').carousel({
            interval: 900
        });
    </script>

    <script>
        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
        }
    </script>

    <script>
        $('#datepicker1').datepicker();
        $('#datepicker2').datepicker();
    </script>
    <script>
        $(document).ready(function() {
            $("#testimonial-slider").owlCarousel({
                loop: true,
                itemsDesktop: [1000, 2],
                itemsDesktopSmall: [980, 1],
                itemsTablet: [768, 1],
                pagination: true,
                navigation: false,
                navigationText: ["", ""],
                autoPlay: true,

                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },

                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#check').click(function(e) {
                e.preventDefault();
                var date1 = $('.d1').val();
                var date2 = $('.d2').val();
                var adult = $('#adult').val();
                var children = $('#children').val();

                if (date1 == "" || date2 == "") {
                    alert('Please Select Arrival And Departure Date');
                } else {
                    window.location.href = "check-incc98.html?rooms";
                }
            });

        });
    </script>
    <script>
        $(window).load(function() {
            setTimeout(function() {
                $('#popupModal').modal('show');
            }, 2000);
        });
    </script>

    <script>
        $(window).load(function() {
            setTimeout(function() {
                $('#my2Modal').modal('show');
            }, 2000);
        });
    </script>

<script>
    function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 46) || (charCode==32))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
        function numberonly(e) {
                e = e || window.event;
                ch = e.which || e.keyCode;
                if (ch != null) {
                    if ((ch >= 48 && ch <= 57)
                    || ch == 0 || ch == 8 || ch == 9 || ch == 39 || ch == 37
                    || ch == 13 || ch == 45 || ch == 40 || ch == 41 || ch == 44 || ch == 43) return true;
                }
                return false;
            }
</script>

</body>

</html>