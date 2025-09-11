<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore our dynamic portfolio showcasing projects in architecture, design, and construction. Filter by type, view details, and download images.">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home | ECR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/cropped-Favicon.png" rel="icon">
   <link href="assets/img/cropped-Favicon.png" rel="apple-touch-icon">




  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/index.css" rel="stylesheet">
  <style type="text/css">
    @font-face {
    font-family: 'Poppins';
    src: url('fonts/Poppins-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Poppins';
    src: url('fonts/Poppins-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}

/* Add more @font-face rules for other weights or styles if needed */

    *{
      font-family: 'poppins', sans-serif;
    }
    
footer{
	background-color: rgba(15, 32, 67, 0.9);
	border-top: 8px solid #835E12;
	position: relative;
	width: 100%;
	overflow: hidden;
	display: flex;
	flex-direction: column;
	gap: 30px;
	padding: 50px 50px 0;
}

footer .footer-bg{
	z-index: -1;
  position: absolute;
  top: 50%;
  left: 50%;
  width: auto;
  height: 100%;
  transform: translate(-50%, -50%);
  min-width: 100%;
  min-height: 100%;
  object-fit: cover;
}

footer .footer-header{
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
	align-items: center;
	gap: 30px;
}

.footer-logo{
	height: 60px;
	width: 100%;
	display: flex;
	gap: 10px;
	align-items: center;
}

.footer-logo div{
	display: flex;
	flex-direction: column;
}

.footer-logo div h1{
	font-size: 24px;
	font-family: "PT-serif";
	font-weight: 600;
	color: #D8A031;
  margin-top: -20px;
}

.footer-logo div p{
  color: #835E12;
  margin-top: -20px;
}

.footer-logo img{
	width: 90px;
}

.footer-socials{
	display: flex;
	gap: 10px;
	justify-content: flex-end;
}

.footer-body{
	width: 100%;
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	gap: 30px;
  margin-bottom: 80px;
}

.footer-body div{
	width: 100%;
}

.footer-body div p{
	color: white;
	font-size: 14px;
	line-height: 1.7;
}

.footer-body div h3{
	color: #D8A031;
	font-size: 18px;
	font-family: "PT-serif";
	font-weight: 600;
	margin-bottom: 10px;
}

.footer-body a{
	text-decoration: none;
	color: white;
}

.footer-body ul{
	padding-left: 20px;
}

.footer-body ul li{
	color: white;
	font-size: 14px;
	line-height: 1.7;
	margin-left: -15px;
}

.footer-body ul li.active-link{
	color: #835E12;
}

.footer-links ul li::marker {
  color: #835E12; /* bullet color */
}

.footer-contact p{
	margin-bottom: 10px;
}

.footer-contact div p{
	margin-bottom: 7px;
	display: flex;
	gap: 4px;
	align-items: flex-start;
	color: #D9D9D9;
	font-family: "PT-serif";
	font-size: 12px;
}

.footer-contact div p img{
	margin-top: 3px;
	width:14px;
	height:14px;
}

.footer-bottom{
	background-color: #0F2043;
	display: flex;
	justify-content: space-between;
	padding: 10px 30px;
	align-items: center;
	gap: 20px;
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
}
.footer-bottom p{
	color: white;
	font-size: 16px;
}

.footer-bottom div{
	padding: 10px 0;
}

.footer-bottom a{
	color: #f1f1f4;
	text-decoration: none;
	font-size: 12px;
	padding: 0 0 0 20px;
}

.footer-bottom div:last-child{
	display: flex;
}

.footer-bottom div a:first-child{
	padding: 0;
	padding-right: 20px;
}
/*footer*/

@media(max-width : 1024px){
	footer{
		padding: 30px 30px 0;
	}
	.footer-body{
		width: 100%;
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		gap: 40px;
	}
	.footer-bottom p{
		color: white;
		font-size: 14px;
	}
	.footer-bottom a{
		font-size: 14px;
	}
	.footer-logo img{
		width: 70px;
	}
	.footer-logo div h1{
		font-size: 21px;
		font-family: "PT-serif";
		font-weight: 600;
		color: #FFF9C4;
	}

	.footer-logo div p{
		color: #DFBE45;
		font-size: 14px;
	}
}

@media(max-width : 768px){
	footer{
		padding: 30px 20px 0;
	}
	.footer-logo div h1{
		font-size: 18px;
		font-family: "PT-serif";
		font-weight: 600;
		color: #FFF9C4;
	}

	.footer-logo div p{
		color: #DFBE45;
		font-size: 13px;
	}
	.footer-logo img{
		width: 50px;
	}
	.footer-socials img{
		width: 10px;
		height: 10px;
	}
	.footer-body div h3{
		color: #DFBE45;
		font-size: 16px;
	}
	.footer-body div p{
		font-size: 12px;
	}
	.footer-body ul li{
		font-size: 12px;
	}
	.footer-bottom p{
		color: white;
		font-size: 11px;
	}
	.footer-bottom a{
		font-size: 11px;
	}

}


@media(max-width : 480px){
	.footer-body{
		gap: 15px;
	}
	.footer-logo div h1{
		font-size: 14px;
		font-family: "PT-serif";
		font-weight: 600;
		color: #FFF9C4;
	}

	.footer-logo div p{
		color: #DFBE45;
		font-size: 10px;
	}
	.footer-logo img{
		width: 50px;
	}
	.footer-socials img{
		width: 20px;
	}

	.footer-bottom p{
		color: white;
		font-size: 9px;
	}
	.footer-bottom a{
		font-size: 9px;
	}
}  
    .hero-sec{
	padding: 40px 0;
	display: grid;
	grid-template-columns: 1.2fr 1fr;
	gap: 8%;
	width: 100%;
	max-width: 100%;
}

.hero-left-sec{
	padding: 0 40px;
	display: flex;
	flex-direction: column;
	gap: 15px;
	width: 100%;
}

.hero-left-sec h1{
	font-size: 48px;
	color: #0F2043;
	font-weight: 600;
	font-family: "PT-serif";
}

.hero-left-sec p{
	font-size: 18px;
	color: #1E1E1E;
}


.hero-media{
	margin: 20px 0 30px;
	display: flex;
	gap: 20px;
}

.hero-media-vid{
	width: 150px;
	aspect-ratio: 16 / 9;
	overflow: hidden;
	border-radius: 0px;
	position: relative;
	background-color: green;
}
.hero-media-vid video{
	width: 100%;
	height: 100%;
	aspect-ratio: 16 / 9;
	overflow: hidden;
	border-radius: 0px;
}
.plyr{
	width: 100%;
	height: 100%;
}
.plyr,
.plyr__video-wrapper,
.plyr__video {
  min-width: 0 !important;
  max-width: none !important;
  width: 100% !important;
}

:root {
  --plyr-color-main: whitesmoke; /* Change main color (progress bar, buttons, etc.) */
  --plyr-control-icon-color: black; /* Control icons */
  --plyr-control-background: black; /* Control background */
  --plyr-video-control-color: #3C530B; /* Custom color for controls */
}

.hero-media h6{
	color: black;
	font-size: 18px;
	display: -webkit-box;
	-webkit-line-clamp: 1; /* Limits to 2 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
   	text-overflow: ellipsis;
    line-height: 1.5; /* Adjust line height if needed */
    margin-bottom: 10px;
}

.hero-media p{
	color: black;
	font-size: 14px;
	display: -webkit-box;
	-webkit-line-clamp: 2; /* Limits to 2 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
   	text-overflow: ellipsis;
    line-height: 1.5; /* Adjust line height if needed */
    font-weight: 400;
}

.hero-CTA{
	display: grid;
	grid-template-columns: repeat(2, 1fr);
}

.hero-CTA button{
	padding: 16px 32px;
	font-size: 16px;
	outline: none;
	border: none;
	border-radius: 10px;
	font-weight: 500;
}
.hero-CTA a:first-child button{
	background-color: #0F2043;
	color: #FFFFFF;
}
.hero-CTA a:last-child button{
	color: #FFFFFF;
	background-color: #5A2F10;
	border: none;
}

.hero-right-sec{
	width: 100%;
	position: relative;
	display: flex;
}

.hero-right-sec img{
	width: 70%;
	position: absolute;
	right: 0;
	top: 70px;
	z-index: -1;
}

.hero-main-imgs img{
	position: relative;
	z-index: 1;
	top: 0;
	width: 260px;
	border-radius: 50%;
	border: 10px solid white;
}

.hero-main-imgs img:last-child{
	position: absolute;
	left: 70px;
	top: 70px;
	width: 340px;
	border: none;
	z-index: -1;
}

.hero-right-sec-numbers{
	display: flex;
	gap: 10px;
	align-items: center;
	margin-top: 30px;
	padding: 10px 20px;
	background-color: white;
	border-radius: 10px;
	width: auto;
}

.hero-right-sec-numbers img{
	position: relative;
	width: 50px;
	top: 0;
	z-index: 1;
}

.hero-right-sec-numbers h3{
	font-family: "PT-serif";
	font-size: 28px;
	font-weight: 600;
}

.hero-right-sec-numbers p{
	font-size: 11px;
	font-weight: 300;
}
/*hero*/

@media(max-width : 1150px){
	.hero-sec{
		padding-top: 110px;
	}
	.hero-left-sec h6{
		font-size: 15px;
	}
	.hero-left-sec h1{
		font-size: 38px;
	}
	.hero-left-sec p{
		font-size: 16px;
	}
	.hero-media-vid{
		width: 130px;
	}
	.hero-media h6{
		font-size: 16px;
	}

	.hero-media p{
		font-size: 13px;
	}
	.hero-CTA button{
		padding: 12px 20px;
		font-size: 14px;
	}
}

@media(max-width : 1024px){
	.hero-sec{
		max-width: 768px;
		margin-left: auto;
		margin-right: auto;
		display: grid;
		grid-template-columns: 1fr;
		gap: 40px;
	}
	.hero-right-sec{
		justify-content: center;
	}
	.hero-left-sec-contents{
		margin-left: -30%;
	}
	.hero-right-sec img{
		width: 60%;
	}

	.hero-main-imgs img{
		position: relative;
		z-index: 1;
		top: 0;
		width: 260px;
		border-radius: 50%;
		border: 10px solid white;
	}

	.hero-main-imgs img:last-child{
		position: absolute;
		left: 70px;
		top: 70px;
		width: 340px;
		border: none;
		z-index: -1;
	}
	.hero-right-sec-numbers img{
		position: relative;
		width: 50px;
		top: 0;
		z-index: 1;
	
	.hero-right-sec-numbers h3{
		font-size: 23px;
	}

	.hero-right-sec-numbers p{
		font-size: 10px;
	}
}

@media(max-width : 540px){
	.hero-right-sec img{
		width: 40%;
	}

	.hero-main-imgs img{
		position: relative;
		z-index: 1;
		top: 0;
		width: 220px;
		border-radius: 50%;
		border: 10px solid white;
	}

	.hero-main-imgs img:last-child{
		position: absolute;
		left: 70px;
		top: 70px;
		width: 300px;
		border: none;
		z-index: -1;
	}
	.hero-right-sec-numbers img{
		position: relative;
		width: 50px;
		top: 0;
		z-index: 1;
	}
}

@media(max-width : 480px){
	.hero-right-sec img{
		width: 40%;
	}

	.hero-main-imgs img{
		position: relative;
		z-index: 1;
		top: 0;
		width: 180px;
		border-radius: 50%;
		border: 10px solid white;
	}

	.hero-main-imgs img:last-child{
		position: absolute;
		left: 70px;
		top: 70px;
		width: 260px;
		border: none;
		z-index: -1;
	}
	.hero-right-sec-numbers img{
		position: relative;
		width: 50px;
		top: 0;
		z-index: 1;
	}
	.hero-left-sec{
		padding: 0 20px;
	}
	.hero-left-sec h6{
		font-size: 14px;
	}
	.hero-left-sec h1{
		font-size: 30px;
	}
	.hero-left-sec p{
		font-size: 14px;
	}
	.hero-media{
		gap: 15px;
		margin: 15px 0;
	}
	.hero-media-vid{
		width: 110px;
	}
	.hero-media h6{
		font-size: 14px;
	}

	.hero-media p{
		font-size: 12px;
	}
	.hero-CTA button{
		padding: 10px;
		font-size: 10px;
	}
}

@media(max-width : 425px){
	.hero-right-sec img{
		width: 40%;
	}

	.hero-main-imgs img{
		position: relative;
		z-index: 1;
		top: 0;
		width: 150px;
		border-radius: 50%;
		border: 10px solid white;
	}

	.hero-main-imgs img:last-child{
		position: absolute;
		left: 70px;
		top: 70px;
		width: 230px;
		border: none;
		z-index: -1;
	}
	.hero-right-sec-numbers img{
		position: relative;
		width: 50px;
		top: 0;
		z-index: 1;
	}
	.hero-left-sec{
		padding: 0 20px;
	}
}



  </style>


</head>

 <body  style="font-family: 'Open Sans', sans-serif;" data-spy="scroll" data-target="#navbar-example">
  <!-- ======= Header ======= -->
      <header class="header" style="font-family: 'Open Sans', sans-serif;" >
    
    <!-- <a href="#" >LOGO</a> -->
    
    <div class="logo mr-auto">
    <a href="index.php"><img src="assets/img/Horizontal Transparent Colored.svg" style="height: 80px;width: 160px;margin-left:20px;" alt="" class="img-fluid"></a>
	  
      
	    
    </div>
    
<nav>
  <ul class="menu-items" id="list">
    <div class="menu-container">
      <li><a href="index" class="menu-item">Home</a></li>
    </div>

    <li><a href="about" class="menu-item" id="item1">About</a></li>

    <div>
      <li><a href="blogs" class="menu-item">Blogs</a></li>
    </div>

    <div>
      <li><a href="contact" class="menu-item">Contact</a></li>
    </div>
  </ul>

  <li class="hamburger" id="hamburger">
    <div class="bar one"></div>
    <div class="bar two"></div>
    <div class="bar three"></div>
  </li>
</nav>
  </header>
 


   <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
  
        <div class="carousel-inner" role="listbox">
  
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/ecr-hero1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown" style="font-family:'poppins',sans-serif;">Elite Concierge Rwanda </h2>
                <p class="animate__animated animate__fadeInUp" style="font-family:'poppins',sans-serif;">Discover Rwanda with elegance and comfort. From private transfers to curated adventures, we design every detail around you.</p>
                <a href="services" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="font-family:'poppins',sans-serif;color: #D4AF37;">Explore Our Services</a>
              </div>
            </div>
          </div>
  <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/ecr-hero2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Bespoke Experiences</h2>
                <p class="animate__animated animate__fadeInUp"> Enjoy tailor-made itineraries, exclusive dining, and unforgettable adventures. We bring your travel dreams to life with precision and care.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="font-family:'poppins',sans-serif;color: #D4AF37;">Learn More About Us</a>
              </div>
            </div>
          </div>
  
          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/ecr-hero3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Lifestyle & Business Concierge</h2>
                <p class="animate__animated animate__fadeInUp">Whether planning a corporate retreat, a spa getaway, or a romantic escape, our team ensures flawless execution and exceptional service.</p>
                <a href="getquate.html" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="font-family:'poppins',sans-serif;color: #D4AF37;">Get in Touch</a>
              </div>
            </div>
          </div>
  
        </div>
  
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
  
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  
          
          
          
      </div>
    </section><!-- End Hero -->
  
  


  <main id="main">
  <div class="section-headline text-center" style="padding-top: 50px;">
   <h2>ABOUT US</h2>
  </div>
<section class="hero-sec">
  
	<div class="hero-left-sec overflow-hidden">
		<h1 data-aos="slide-right">Redefining Luxury, One Experience at a Time</h1>
		<p data-aos="fade-left">At Elite Concierge Rwanda, we are more than a service—we are your trusted lifestyle partner. 
      From seamless travel arrangements to exclusive event access and bespoke personal assistance, 
      we ensure every detail of your journey is managed with discretion, precision, and care.</p>
		<div class="hero-media" data-aos="fade-up">
			<div>
				<div class="hero-media-vid shadow">
		            <video id="player" class="js-player" controls preload="metadata">
		              <source src="assets/video/footage.mp4" type="video/mp4" id="src">
		            </video>
		         </div>
	         </div>
	         <div class="hero-media-contents">
	         	<h6>The Elite Promise</h6>
	         	<p>Our dedicated team is committed to delivering personalized services tailored to your needs. 
          Whether it’s securing priority bookings, managing complex itineraries, or curating unforgettable experiences, 
          we handle the details—so you can focus on living life effortlessly.</p>
	         </div>
		</div>
		<div class="hero-CTA">
			<a href="#" data-aos="fade-right" data-aos-delay="200"><button>Find More About ECR</button></a>
			<a href="#" data-aos="fade-left" data-aos-delay="200"><button>Request Service</button></a>
		</div>
	</div>

	<div class="hero-right-sec">

		<div class="hero-left-sec-contents">
			<img src="assets/img/love.webp">
			<div class="hero-main-imgs" data-aos="fade-zoom-in" data-aos-delay="200">
				<img src="assets/img/hero-submain3.jpg">
				<img src="assets/img/hero-main2.jpg">
			</div>
			<div class="hero-right-sec-numbers shadow" data-aos="fade-up-right">
				<img src="assets/img/people.svg">
				<div>
					<h3>500+</h3>
					<p>Elite clients served with excellence.</p>
				</div>
			</div>
		</div>

	</div>
</section>

      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg" >
        <div class="container">
  
          <div class="section-headline text-center" style="padding-top: 50px;">
            <h2>OUR SERVICES</h2>
          </div>
    <div class="row" >
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon">                
                <i class="fa fa-user-circle"></i>
                  
                </div>
                <h4 class="title"> <a href="https://www.youtube.com/watch?v=I2y2yRlYCac" target="_blank">Personal Concierge</a></h4>
                <p class="description">From private transfers to exclusive dining reservations, we take care of every detail so you can enjoy a seamless and stress-free stay.</p>
              </div>
            </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
              <div class="icon-box">
                <div class="icon"><i class="fa fa-spa"></i>
                </div>
                <h4 class="title"> <a href="https://www.youtube.com/watch?v=I2y2yRlYCac" target="_blank">Lifestyle Management</a></h4>
                <p class="description">Indulge in bespoke shopping, wellness treatments, and cultural experiences curated just for you, bringing luxury into every moment.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fa fa-plane"></i></div>
                <h4 class="title"> <a href="https://www.youtube.com/watch?v=I2y2yRlYCac" target="_blank">Travel Arrangements</a></h4>
                <p class="description">We manage your local and international flights, visa support, and travel insurance, ensuring a smooth journey from start to finish.</p>
             
            </div>
    
              
            </div>
            
          
            
              <div class="col-lg-4 col-md-6" data-aos="fade-up" >
              <div class="icon-box" style="font-family:'poppins',sans-serif;">
                <div class="icon"><i class="fa fa-briefcase"></i></div>
                <h4 class="title"> <a href="https://www.youtube.com/watch?v=I2y2yRlYCac" target="_blank">Business Services</a></h4>
                <p class="description">From corporate retreats to conferences, our team ensures flawless execution with tailored programs and on-site event management.</p>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" >
              <div class="icon-box">
                <div class="icon"><i class="fa fa-ticket"></i></div>
                <h4 class="title"> <a href="https://www.youtube.com/watch?v=I2y2yRlYCac" target="_blank">exclusive access </a></h4>
                <p class="description">  Enjoy priority entry to private events, shows, and exhibitions that are reserved only for Elite Concierge members.</p>
              </div>
            </div>
            
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="fa fa-binoculars"></i>

                
                </div>
                <h4 class="title"> <a href="https://www.youtube.com/watch?v=I2y2yRlYCac" target="_blank">Adventure & Safaris</a></h4>
                <p class="description">Experience Rwanda’s natural beauty through gorilla trekking, luxury safaris, and authentic cultural encounters, designed exclusively for you.</p>
              </div>
            </div>
            
            </div>
            
          </div>
  
        </div>
      </section>
      <br>
      <br>
      <br>
      <!-- End Services Section -->

     <!-- ======= Values Section ======= -->
   <section id="values" class="values">
    <div class="container">

      <div class="row">
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="card" style="background-image: url(assets/img/mission.jpg);">
            <div class="card-body">
              <h5 class="card-title">Our Mission</h5>
              <p class="card-text">To elevate luxury tourism in Rwanda by creating bespoke experiences that reflect the unique desires of each client. Every detail is crafted with precision and care.</p>
              <div class="read-more"><a href="signup.html"><i class="icofont-arrow-right" ></i>Discover More</a></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
          <div class="card" style="background-image: url(assets/img/plan.jpg);">
            <div class="card-body">
              <h5 class="card-title">Our Plan</h5>
              <p class="card-text">We strive to redefine concierge service in Rwanda by offering world-class hospitality, curated itineraries, and access to exclusive experiences that go beyond expectations.</p>
              <div class="read-more"><a href="signup.html"><i class="icofont-arrow-right"></i>Explore Services</a></div>
            </div>
          </div>

        </div>
        <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card" style="background-image: url(assets/img/vision.jpg);">
            <div class="card-body">
              <h5 class="card-title">Our Vision</h5>
              <p class="card-text">To become the leading luxury concierge service in Rwanda, known for unmatched attention to detail, seamless hospitality, and experiences that turn dreams into reality.</p>
              <div class="read-more"><a href="signup.html"><i class="icofont-arrow-right"></i>Learn More</a></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card" style="background-image: url(assets/img/care.jpg);">
            <div class="card-body">
              <h5 class="card-title">Our Care</h5>
              <p class="card-text">We believe true luxury lies in care and attention. Our team is devoted to anticipating your needs and ensuring every moment of your journey is effortless and memorable.</p>
              <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i>Contact Us</a></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Values Section -->
   <br>
      <br>
      <br>
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row no-gutters">

      <!-- Guests Welcomed -->
      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="fa fa-user-tie"></i>
          <span class="counter">85+</span>
          <p><strong>Guests Welcomed:</strong> Elite travelers from around the world have entrusted us to craft seamless and memorable stays in Rwanda.</p>
        </div>
      </div>

      <!-- Bespoke Experiences -->
      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="fa fa-gem"></i>
          <span data-toggle="counter-up">60+</span>
          <p><strong>Bespoke Experiences:</strong> From gorilla trekking to candlelit dinners, each itinerary is carefully curated to reflect our clients’ unique desires.</p>
        </div>
      </div>

      <!-- Adventures Organized -->
      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="fa fa-mountain"></i>
          <span data-toggle="counter-up">40+</span>
          <p><strong>Adventures Organized:</strong> Safaris, cultural immersions, and wellness retreats designed with precision to ensure luxury in every step.</p>
        </div>
      </div>

      <!-- Happy Clients -->
      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="fa fa-heart"></i>
          <span data-toggle="counter-up">100%</span>
          <p><strong>Happy Clients:</strong> Our greatest reward is the joy and satisfaction of our clients, who leave Rwanda with unforgettable memories.</p>
        </div>
      </div>

    </div>

  </div>
</section>
    <br/>
    <br/>
  
<br/>
<br/>
    <div class="section-headline text-center" style="padding-top: 50px;">
      <h2>TESTIMONIALS</h2>
    </div>
    <!-- ======= Testimonials Section ======= -->
    <div id= "testimonials"class="testimonials-area">
      <div class="testi-inner area-padding">
        <div class="testi-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="testimonial-content text-center">
                <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                <!-- start testimonial carousel -->
                <div class="owl-carousel testimonial-carousel">
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                      Elite Concierge Rwanda exceeded every expectation. From the moment I landed, 
                    every detail was flawlessly arranged—airport pickup, hotel check-in, and even 
                    last-minute dinner reservations at a fully booked restaurant. True excellence in service.
                      </p>
                      <h6>Olivia M.</h6>
                    </div>
                  </div>
                  <!-- End single item -->
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                       I’ve never experienced such personalized attention before. The team anticipated my 
                    needs before I even mentioned them. Their discretion and professionalism make 
                    them my go-to partner for all my travels to Rwanda.</p>
                      <h6>David K.</h6>
                    </div>
                  </div>
                  <!-- End single item -->
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                         Thanks to Elite Concierge Rwanda, my business trip turned into an effortless journey. 
                    Meetings, transport, and leisure activities were handled seamlessly, allowing me to 
                    focus only on my goals. A service worth every penny.</p>
                      <h6>Sophia R.</h6>
                    </div>
                  </div>
                  <!-- End single item -->
                </div>
              </div>
              <!-- End testimonials end -->
            </div>
            <!-- End Right Feature -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

   
<!-- =======  F.A.Q Section ======= 
<section id="faq" style="background-color: #f9f9f9;">

  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>FAQs </h2>
        </div>
      </div>
    </div>

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-9">
        <ul id="faq-list">

         
          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">What is NARAZA? <i class="fa fa-minus-circle"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                <strong>NARAZA</strong> is a pioneering digital and engineering solutions provider dedicated to helping businesses expand their reach and connect with larger audiences. By publishing business activities, services, and products, we enable clients to grow their presence swiftly. Our e-services assistance offers streamlined access to essential digital platforms, partnering with providers like Irembo to facilitate government services with ease. In engineering, we deliver innovative solutions that address complex challenges, ensuring efficiency, effectiveness, and exceptional outcomes for every project.+
              </p>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed"> What are engineering services we provide? <i class="fa fa-minus-circle"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                 We conduct comprehensive field visits to assess project sites, create detailed drawings of the proposed project, and manage the application process from start to finish. Our team also handles follow-up procedures and facilitates payment processing, ensuring timely receipt of invoices and a smooth, efficient workflow.              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">What are digital services we provide?<i class="fa fa-minus-circle"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
			 <strong>E-Services Assistance:</strong> NARAZA supports citizens in applying for e-services, including a range of online government services. Our goal is to streamline processes and make essential services more accessible to the public.
                              </p>
							  
							 
						<p>	
<strong>Payments Facilitation:</strong> NARAZA plays a key role in streamlining payments for services like Irembo, Rwanda's e-government platform. By simplifying payment processes, we enhance efficiency and provide greater convenience for users.	</p>							
							  
							  
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Why NARAZA for marketing? <i class="fa fa-minus-circle"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                <strong>NARAZA</strong> specializes in helping businesses expand their visibility through effective advertising strategies. We provide a platform that allows businesses to showcase their services, products, and activities to a wider audience.<br><br>

Our advertising process begins with understanding your business goals and target audience. We then create tailored marketing strategies to highlight your unique offerings, ensuring that your message reaches potential clients effectively. By leveraging various digital channels, we aim to increase engagement and drive traffic to your business.<br><br>

Through our advertising services, clients can expect increased brand awareness and a significant boost in customer reach, ultimately leading to growth and success in their respective markets. If you're interested in learning more about how our advertising services can benefit your business, please reach out to us for a detailed discussion.
				 
              </p>
            </div>
          </li>

        </ul>
      </div>
    </div>

  </div>

</section>End  F.A.Q Section  -->



  
  </main><!-- End #main -->
    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3 style="font-size:15px;">Experience Luxury & Personalized Service with Elite Concierge Rwanda</h3>
<!--               <h6 style = "background:"#fff">Better Service. Fast service. Good Delivery</h6> -->
              <a class="sus-btn" href="getquate.html">Send us your Request</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Suscribe Section -->
 <!-- ======= Clients Section ======= 
 <section id="clients" class="clients">
  <div class="container" data-aos="zoom-in">

    
      <div class="section-headline text-center">
        <h2>Partners</h2>
      </div>
  

    <div class="owl-carousel clients-carousel">
      <img src="assets/img/irembo1.JPG" alt="">
      
       <img src="assets/img/RRA2.png" alt="">
       <img src="assets/img/Ebuilding.png" alt="">
      
      
  
    </div>

  </div>
</section>
 End Clients Section -->

  
   
  <!-- ======= Footer ======= -->
  <footer>
	<img src="assets/img/footer-bg2.jpg" class="footer-bg">
	<div class="footer-header">
		<div class="footer-logo">
			<img src="assets/img/footer-logo.svg">
			<div>
				<h1>Elie Concierge Rwanda</h1>
				<p>Where Luxury Meets Custom Experience.</p>
			</div>
		</div>
		<div class="footer-socials">
			<a href="#">
			  <img src="assets/icons/insta.svg" alt="Footer Icon 1">
			</a>
			<a href="#">
			  <img src="assets/icons/x.svg" alt="Footer Icon 2">
			</a>
			<a href="#">
			  <img src="assets/icons/face.svg" alt="Footer Icon 3">
			</a>
			<a href="#">
			  <img src="assets/icons/linkedin.svg" alt="Footer Icon 4">
			</a>
		</div>
	</div>
	<div class="footer-body">
     <div class="footer-about">
      <h3>About Us</h3>
      <p>Elite Concierge Rwanda is dedicated to redefining luxury hospitality through personalized, world-class concierge services. Based in Kigali, we craft bespoke experiences that cater to every detail of your journey, ensuring comfort, exclusivity, and unforgettable moments.</p>
     </div>

		<div class="footer-links">
			<h3>Quink Links</h3>
			<ul>
				<a href=""><li class="active-link">Home</li></a>
				<a href=""><li>About</li></a>
				<a href=""><li>blogs</li></a>
				<a href=""><li>Contact</li></a>
			</ul>
		</div>
        <div class="footer-mission">
         <h3>Mission & Vision</h3>
          <ul style="list-style-type: circle;">
           <li>Deliver personalized concierge services that exceed expectations</li>
           <li>Redefine luxury travel and lifestyle experiences in Rwanda</li>
           <li>Build trusted relationships through discretion and excellence</li>
           <li>Create unforgettable moments tailored to every client</li>
         </ul>
       </div>

		<div class="footer-contact">
			<h3>Contact Us</h3>
			<p>Get to reach us and join the movement with us across kamonyi</p>
			<div>
				<p><img src="assets/icons/phone.svg">(+250) 788 484 453</p>
				<p><img src="assets/icons/mail.svg">contact@eliteconcierge.rw</p>
				<p><img src="assets/icons/location.svg">Nyarugenge District, Kigali City, Rwanda</p>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div>
			<p><span>©</span> Copyright 2025 All Right Reserved</p>
		</div>
		<div>
			<a href="#">Developed by <span style="color: #835E12;">Prince Hymn</span></a>
		</div>
	</div>
</footer><!-- End  Footer -->



  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/appear/jquery.appear.js"></script>
  <script src="assets/vendor/knob/jquery.knob.js"></script>
  <script src="assets/vendor/parallax/parallax.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/hamburger/hamburger.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
