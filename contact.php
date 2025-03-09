<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Meta setup -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="">
		<meta name="decription" content="">
		<meta name="designer" content="">
		
		<!-- Title -->
		<title>Tonmoy IT Solutions</title>
		
		<!-- Fav Icon -->
		<link rel="icon" href="images/favicon.ico">
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

		<!-- animate css here -->
		<link rel="stylesheet" href="css/animate.css">

		<!-- swiper css -->
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css'>

		<!-- Include Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.css">
		
		<!-- Main StyleSheet -->
		<link rel="stylesheet" href="style.css">	
		
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/responsive.css">	
		
	</head>
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<!-- header-area start -->	
		<header class="header_area">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header_content wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
							<div class="header_logo"><a href="#"><img src="images/logo/header_logo.svg" alt=""></a></div>
							<ul class="d-none d-lg-flex">
								<li><a href="./index.html">Home</a></li>
								<li><a href="#Services">Services</a></li>
								<li><a href="./about_us.html">About Us</a></li>
								<li><a href="./contact.html" class="active">Contact</a></li>
							</ul>
							<button type="button" class="getTouch_btn d-none d-sm-block"><i class="fa-solid fa-location-arrow"></i> Get in Touch</button>
							<div class="hamburger_wrapper d-flex d-lg-none"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
								<span class="line"></span>
								<span class="line"></span>
								<span class="line"></span>
							</div>
						</div>
					</div>							
				</div>
			</div>	
		</header>	
		<!-- header-area end -->
		 
		<!-- header offcanvas start -->
		<div class="offcanvas header_offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header">
			<img src="images/logo/header_logo.svg" alt="">
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<div class="header_content mt-0 border-0">
				<ul class="flex-column gap-5">
					<li><a href="./index.html" data-bs-dismiss="offcanvas" aria-label="Close">Home</a></li>
					<li><a href="#Services" data-bs-dismiss="offcanvas" aria-label="Close">Services</a></li>
					<li><a href="./about_us.html">About Us</a></li>
					<li><a href="#" class="active">Contact</a></li>
					<li>
						<button type="button" class="getTouch_btn d-block d-sm-none m-0"><i class="fa-solid fa-location-arrow"></i> Get in Touch</button></li>
				</ul>
			</div>
		</div>
		</div>
		<!-- header offcanvas end -->

		<!-- hero-area start -->
		<section class="hero_area contact aboutUS">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="hero_content wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
							<h1>Get In Touch</h1>
							<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
						</div>
					</div>
				</div>
			</div>
		</section>	
		<!-- hero-area end -->	

		<!-- contact-area start -->
		<section class="contactForm_wrapper">
			<div class="container">
				<div class="row contactForm_row g-0">
					<div class="col-lg-5 order-2 order-lg-1">
						<div class="contactForm_left">
							<h3>Contact with</h3>
							<ul class="contact_list">
								<li><a href="#"><i class="fa-solid fa-envelope"></i> contact@yourcompany.com</a></li>
								<li><a href="#"><i class="fa-solid fa-phone"></i> +123 456 7890</a></li>
								<li><a href="#"><i class="fa-solid fa-location-dot"></i> 123 Sherpur , Tech City</a></li>
							</ul>
							<hr>
							<h4>Our Social media</h4>
							<ul class="social_list">
								<li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-square-x-twitter"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 order-1 order-lg-2">
						<div class="contactForm_right">
							<form action="" method="post">
								<div class="form_input">
									<label>Full Name</label>
									<input type="text" name="name" placeholder="Your name here..." required>
								</div>
								<div class="form_input">
									<label>Email Address</label>
									<input type="email" name="email" placeholder="Your email address..." required>
								</div>
								<div class="form_input">
									<label>Phone Number</label>
									<input type="tel" name="number" placeholder="Your phone number...">
								</div>
								<div class="form_input">
									<label>Select Services</label>
									<select name="select_service">
										<option value="" disabled selected>Select Services</option>
										<option value="Web Development">Web Development</option>
										<option value="Data Entry">Data Entry</option>
										<option value="UI/Ux Design">UI/Ux Design</option>
									</select>
								</div>
								<div class="form_input">
									<label>Write Message</label>
									<textarea name="message" placeholder="Write your message here..."></textarea>
								</div>
								<div class="form_btn">
									<button type="submit" name="send">Send Message</button>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- contact-area end -->	

		<!-- footer-area start -->
		<footer class="footer_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="footer_logo_content  wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
							<a href="#" class="logo"><img src="images/logo/footer_logo.png" alt=""></a>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'</p>
							<ul>
								<li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-square-x-twitter"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="footer_link wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
							<h4>Call to actions</h4>
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="./about_us.html">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="footer_address wow fadeInLeft"  data-wow-duration="1.5s" data-wow-delay="0.5s">
							<h4>Get In Touch</h4>
							<ul>
								<li><a href="#"><i class="fa-solid fa-envelope"></i> contact@yourcompany.com</a></li>
								<li><a href="#"><i class="fa-solid fa-phone"></i> +123 456 7890</a></li>
								<li><a href="#"><i class="fa-solid fa-location-dot"></i> 123 Sherpur , Tech City</a></li>
							</ul>
							<form action="">
								<input type="email" placeholder="Email address..">
								<button type="button">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-12">
						<div class="footer_copyright">
							<p class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.7s">Copyright Reserved By royit @<span id="copyright_year"></span></p>
						</div>
					</div>
				</div>
			</div>
		</footer>		
		<!-- footer-area end -->		
		
	
		
		
		
		
		
		<!-- Main jQuery -->
		<script src="js/jquery-3.4.1.min.js"></script>
		
		<!-- Bootstrap.bundle Script -->
		<script src="js/bootstrap.bundle.min.js"></script>

		<!-- animate script here -->
		<script src="js/wow.min.js"></script>

		<!-- swiper js -->
		<script src='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js'></script>
		<script src="js/swiper_custom_script.js"></script>

		<!-- Isotope jQuery Plugin -->
		<script src="js/isotope.js"></script>
		<script src="js/isotope.function.js"></script>
		
		<!-- Custom jQuery -->
		<script src="js/scripts.js"></script>
		
		<!-- Scroll-Top button -->
        <a href="#" class="scrolltotop" style="display: none;">
            <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
            <span class="pluse"></span>
            <span class="pluse2"></span>
        </a>
		
	</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'], $_POST['number'], $_POST['message'], $_POST['select_service'])) {
    
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $number = htmlspecialchars(strip_tags($_POST['number']));
    $message = htmlspecialchars(strip_tags($_POST['message']));
    $select_service = htmlspecialchars(strip_tags($_POST['select_service'])); // ✅ Capture selected service

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address!");
    }

    require './PHPMailer/Exception.php';
    require './PHPMailer/PHPMailer.php';
    require './PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'developertaposh@gmail.com'; // Your email
        $mail->Password   = 'vfiovczltbyuacvh'; // Update with a new Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Email Headers
        $mail->setFrom('developertaposh@gmail.com', 'Roy IT Solutions');
        $mail->addAddress('robertfcoon@gmail.com');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission';
        $mail->Body    = "<strong>Name:</strong> $name <br>
                          <strong>Email:</strong> $email <br>
                          <strong>Number:</strong> $number <br>
                          <strong>Selected Service:</strong> $select_service <br> 
                          <strong>Message:</strong> $message";

        $mail->send();
        echo '<h6 id="emailSend_msg"><div></div><span>Message has been sent successfully!</span> <i class="fa-solid fa-xmark"></i></h6>';
    } catch (Exception $e) {
        echo "Message could not be sent. Error: " . $mail->ErrorInfo;
    }
} else {
    echo "Please fill in all required fields.";
}
?>
