<?php include_once 'components/top.php'; ?>

<body class="home3">
<?php include_once 'components/header.php'; ?>

	<section class="breadcrumb-area" style="background:url('images/header-contact.jpg'); background-size:cover">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-area-content">
						<h2>Contact Us</h2>
						<ul>
							<li><a href="index-3.html">Home</a></li>
							<li class="active"><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!-- breadcrumb area end -->
	<!-- about section start -->
	<div class="ptb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center pb-100">
					<h3 class="mb-20">Contact Information</h3>
					<p class="sec-title mb-20" style="font-size:16px; font-family: 'Antic'; line-height: 20px;">Republic Hotel Patna Dunda Sahi Complex,<br> Bakarganj, (Rupak Cinema Building)<br> Near Gandhi Maidan (E), Patna-800 004 </p>
					<p style="font-size:16px; font-family: 'Antic'; line-height: 25px;">Mobile : <a href="tel:+91-7549977775">+91-7549977775</a> <a href="tel:+91-9334117111">+91-9334117111 </a></p>


					<p style="font-size:16px; font-family: 'Antic'; line-height: 25px;">Tel : +91 0612-2675520/21/24/28/29 </p>
					<p style="font-size:16px; font-family: 'Antic'; line-height: 25px;">Email : <a href="mailto:republichotel@yahoo.com">republichotel@yahoo.com</a>, <a href="mailto:sales@republichotel.in">sales@republichotel.in</a></p>
					<br>
					<h3 class="mb-20">Contact For Reservation </h3>
					<p style="font-size:16px; font-family: 'Antic'; line-height: 25px;">Tel : +91 0612-2675520/21/24/28/29 </p>
					<p style="font-size:16px; font-family: 'Antic'; line-height: 25px;">Mobile : <a href="tel:+91-9334117111">+91-9334117111</a> </p>
					<p style="font-size:16px; font-family: 'Antic'; line-height: 25px;"><i class="icofont icofont-social-whatsapp"></i> +91-9334117111 </p>
					<br>
					<h3 class="mb-20">Contact For Banquet Booking </h3>
					<p style="font-size:16px; font-family: 'Antic'; line-height: 25px;">Mobile : <a href="tel:+91 7547888874">+91 7547888874</a>, <a href="tel:+91 7564903203">+91 7564903203 </a></p>
				</div>
				<div class="col-lg-8 offset-lg-2">
					<div class="contact-us-area">
						<h3 class="text-center mb-20">Do not hesitate to contact me if you have any further questions</h3>
						<form action="#" method="POST">
							<label id="error" class="text-danger"></label>
							<label id="msg" class="text-info"></label>
							<div class="row">
								<div class="col-lg-6">
									<input type="text" id="fname" onKeyPress="return onlyAlphabets(event,this)" placeholder="First Name *">
								</div>
								<div class="col-lg-6">
									<input type="text" id="lname" onKeyPress="return onlyAlphabets(event,this)" placeholder="Last Name">
								</div>
								<div class="col-lg-6">
									<input type="email" id="email" placeholder="Email*">
								</div>
								<div class="col-lg-6">
									<input type="text" id="subject" placeholder="Subject*">
								</div>
								<div class="col-lg-12">
									<textarea placeholder="Your Message*" id="message"></textarea>
									<div class="g-recaptcha" data-sitekey="6LeSZ60UAAAAALqXhWWFhBPoUhwsRTgmCv3OZKFO"></div>
									<button class="theme-btn" type="button" name="replysubmit">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!-- contact section end -->

	<!-- available section start -->

	<!-- counter section start -->
	<div class="">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.7683176796895!2d85.1446053644929!3d25.612613821007482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed58f6ff3395df%3A0x3ad9b11301a09b45!2sOYO+3952+Republic+Hotel!5e0!3m2!1sen!2sin!4v1562157643758!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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
		$(document).ready(function() {
			$('button').click(function() {
				var fname = $('#fname').val();
				var lname = $('#lname').val();
				var email = $('#email').val();
				var subject = $('#subject').val();
				var message = $('#message').val();
				var contactme = "contact";
				var response = grecaptcha.getResponse();

				if (fname == "" || email == "" || subject == "" || message == "") {
					$('#fname,#email,#subject,#message').css('border-color', 'red');
					$('#error').html('All (*) Fields Are Required');
					setTimeout(function() {
						$('#error').fadeOut('slow');
					}, 5000);
					setTimeout(function() {
						$('#fname,#email,#subject,#message').css('border-color', 'grey');
					}, 5000);
				} else {
					$('#error').html('');
					$.ajax({
						url: "php_assets/contact.php",
						type: "post",
						data: {
							fname: fname,
							lname: lname,
							email: email,
							subject: subject,
							message: message,
							contact: contactme,
							response: response
						},
						success: function(data) {
							$('form').trigger("reset");
							grecaptcha.reset();
							$('#msg').html(data);
							setTimeout(function() {
								$('#msg').fadeOut('slow');
							}, 5000);
						}
					});
				}
			});
		});
	</script>
</body>

</html>