<!DOCTYPE html>
<!--
++++++++++++++++++++++++++++++++++++++++++++++++++++++
AUTHOR : Vijayan PP
PROJECT :A-MD
VERSION : 1.1
++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Poke Mart</title>
	
	<!-- [ FONT-AWESOME ICON ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

	<!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="images/Icon.jpg">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <link rel ="stylesheet" type="text/css" href="library/vegas/vegas.min.css">
	<!-- [ Boot STYLESHEET ]
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
        
        <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/color/dark-blue.css">

<script language="javascript">
    function validate1(){
        var f=document.login;
        if (f.uname.value=='' || f.pword.value==''){
            alert('Please enter your account details')
            f.uname.focus();
            return false;
            }
        f.submit();
        }

	function validate2(){
		var f=document.addnewuser;
        var Password = document.getElementById("Password").value;

        if (f.First_Name.value=='' || f.Middle_Name.value=='' || f.Last_Name.value=='' || f.Address.value=='' || f.Username.value=='' || f.Password.value==''){
          alert('Please fill in the necessary details') 
          f.First_Name.focus();
          return false;
        }

		if(f.Password.value !== f.Confirm_Password.value){
			alert('Passwords do not match');
			f.Password.focus();
			return false;
		}

        if(Password.length < 10){
			alert('Password must be a minimum of 10 characters');
			f.Password.focus();
			return false;
		}

		f.submit();
	}
</script> 

</head>
<body >
<!-- [ LOADERs ]
================================================================================================================================-->	
    <div class="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- [ /PRELOADER ]
=============================================================================================================================-->
<!-- [WRAPPER ]
=============================================================================================================================-->
<div class="wrapper">
    
 <!-- [NAV]
 ============================================================================================================================-->    
   <!-- Navigation
    ==========================================-->
    <nav  class="amd-menu navbar navbar-default navbar-fixed-top theme_background_color fadeInDown">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img class ="navbar-brand" src="images/PokeMartIcon.png">
            <a class="navbar-brand" href="login.php">The Poke Mart</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#feature" class="page-scroll">About</a></li>
            <li><a href="#howwork" class="page-scroll">Order Now</a></li>
            <li><a href="#whylove" class="page-scroll">Choose Us</a></li>
            <li><a href="#testimonial-s" class="page-scroll">Feedback</a></li>
            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


   <!-- [/NAV]
 ============================================================================================================================-->    
    
    
    
    
    
  <!-- [MAIN GALLERY ]
=============================================================================================================================-->
  <section class="main-gallery" id="home">
    <div class="overlay">
      <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                 <h1 class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">Welcome to the Poke Mart</h1>

                <p class="intro" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">We have everything from Pokeballs to Potions!</p>
              <br>
              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btns white-background themecolor fadeInDown" data-toggle="modal" data-target="#myModal">Log In</button>
  <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#337AB7;">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" style="text-align:center; font-size:30px";>Log-In</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="login" method="POST" action="confirm.php" onsubmit="return validate1()">
                                                        <div class="form-group">
                                                            <label for="uname" style="color:black;">Username:</label>
                                                            <input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pword" style="color:black;">Password:</label>
                                                            <input type="password" class="form-control" id="pword" name="pword" placeholder="Password">
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary btn-sm">Log In</button>
                                                            <button type="reset" class="btn btn-primary btn-sm">Reset</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<button type="button" class="btn btns theme_background_color white fadeInLeft" data-toggle="modal" data-target="#myModal2">Sign Up</button>                               
                            <div class="modal fade" id="myModal2" role="dialog">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#337AB7;">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" style="text-align:center; font-size:30px";>Create a new Account</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="addnewuser" method="POST" action="adduser.php" onsubmit="return validate2()">
                                                        <div class="form-group">
                                                            <label for="First_Name" style="color:black;">First Name:</label>
                                                            <input type="text" class="form-control" id="First_Name" name="First_Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Middle_Name" style="color:black;">Middle Initial:</label>
                                                            <input type="text" class="form-control" id="Middle_Name" name="Middle_Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Last_Name" style="color:black;">Last Name:</label>
                                                            <input type="text" class="form-control" id="Last_Name" name="Last_Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Address" style="color:black;">Address:</label>
                                                            <input type="text" class="form-control" id="Address" name="Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Username" style="color:black;">Username:</label>
                                                            <input type="text" class="form-control" id="Username" name="Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Password" style="color:black;">Password:</label>
                                                            <input type="password" class="form-control" id="Password" name="Password" size="20">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Confirm_Password" style="color:black;">Confirm Password:</label>
                                                            <input type="password" class="form-control" id="Confirm_Password" name="Confirm_Password" size="20">
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary btn-sm">Sign Up</button>
                                                            <button type="reset" class="btn btn-primary btn-sm">Reset</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

          </div>
      </div>
    </div>
      
  </section>
  
  
  <!-- [/MAIN GALLERY]
=============================================================================================================================-->
  
<!-- [MOBILE APPLICATION]
=============================================================================================================================-->
  
  <section class="mobile-app theme_background_color" id="feature">
      <div class="container">
            <div class="row text-center">
                <div class="app-heading">
                    <h2 class="sectionTitle">FEATURES OF THE POKE MART</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 featured-content">
                    <div class="app-icon-box">

                        <div class="app-content-phone text-right">
                            <h4>One Stop Shop</h4>

                            <p>
                               Everything you can possible need in your journey can be found here!
                            </p>
                        </div>
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-diamond"></i></span>
                        </div>
                    </div>
                    <div class="app-icon-box">

                        <div class="app-content-phone text-right">
                            <h4>Security</h4>

                            <p>
                               Our system is shielded by the latest security system so we guarantee safe transactions.
                            </p>
                        </div>
                        <div class="app-icon">
                           <span class="themecolor text-center"><i class="fa fa-video-camera"></i></span>
                        </div>
                    </div>
                    <div class="app-icon-box">

                        <div class="app-content-phone text-right">
                            <h4>Variety</h4>

                            <p>
                               We have a wide array of products that can satisy you and your Pokemon's needs.
                            </p>
                        </div>
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-delicious"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="images/DiveBallBackground.png" class="iphone-image" alt="iPhpone" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">
                </div>
                <div class="col-md-4 col-sm-12 featured-content">
                    <div class="app-icon-box">
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-anchor"></i></span>
                        </div>
                        <div class="app-content">
                            <h4>Accessibility</h4>

                            <p>
                               Our stores can be found in cities all across the 6 regions!
                            </p>
                        </div>
                    </div>
                    <div class="app-icon-box">
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-gears"></i></span>
                        </div>
                        <div class="app-content">
                            <h4>Organized Shopping</h4>

                            <p>
                                Our products have been intricately arranged so you will not have a hard time finding the
                                things you need!
                            </p>
                        </div>
                    </div>
                    <div class="app-icon-box">
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-desktop"></i></span>
                        </div>
                        <div class="app-content">
                            <h4>Responsive Administrators</h4>

                            <p>
                                Our administrators are very friendly and are willing to reach out a hand whenever
                                you are having a hard time with our system!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
 <!-- [/MOBILE APPLICATION]
=============================================================================================================================-->
 
 <!-- [HOW WORKS]
=============================================================================================================================-->
 
 <section class="how-works" id="howwork">
     <div class="overlay">
  <div class="container">
            <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="sectionTitle">HOW CAN YOU ORDER?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 app-board">
                    <div class="app-board-inner">
                        <ul class="nav nav-tabs liner" id="myTab" role=tablist>
                            <li class="active">
                                <a href="#userexperience" aria-controls="userexperience" role="tab" data-toggle="tab" title="User Experience">
                                    <span class="round-tabs one">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" title="Sketch">
                                    <span class="round-tabs two">
                                        <i class="fa fa-language"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#prototyping" aria-controls="prototyping" role="tab" data-toggle="tab" title="Prototyping">
                                    <span class="round-tabs three">
                                        <i class="fa fa-pencil-square"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#uidesign" aria-controls="uidesign" role="tab" data-toggle="tab" title="UI Design">
                                    <span class="round-tabs four">
                                        <i class="fa fa-bar-chart"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#doner" aria-controls="doner" role="tab" data-toggle="tab" title="Development">
                                    <span class="round-tabs five">
                                        <i class="fa fa-share"></i>
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="userexperience">

                            <h3 class="head text-center">Create your Account</h3>

                            <p class="narrow text-center">
                                In order to gain access to our website, please create your account at 
                                localhost/PokeMart/login.php
                            </p>
                            <p class="text-center">
                                <a href="loginproducts.php" class="btn btn-primary btn-outline-rounded theme_background_color"> View our Products <span
                                        class="fa fa-send-o"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <h3 class="head text-center">Browse</h3>

                            <p class="narrow text-center">
                                Select from our wide array of products depending on what you or your Pokemon need.
                            </p>
                            <p class="text-center">
                                <a href="loginproducts.php" class="btn btn-success btn-outline-rounded theme_background_color"> View our Products <span
                                        class="fa fa-send-o"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="prototyping">
                            <h3 class="head text-center">Selection</h3>

                            <p class="narrow text-center">
                                Once you have selected an item, click "Add to Cart". The system will automatically
                                tell you if that item is available or not.
                            </p>
                            <p class="text-center">
                                <a href="loginproducts.php" class="btn btn-success btn-outline-rounded theme_background_color"> View our Products <span
                                        class="fa fa-send-o"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="uidesign">
                            <h3 class="head text-center">Payment</h3>

                            <p class="narrow text-center">
                                Once you have successfully added all of your items to your cart, the system will prompt
                                you to the billing window. You will input all of your details in order for us to deliver
                                your order.
                            </p>
                            <p class="text-center">
                                <a href="loginproducts" class="btn btn-success btn-outline-rounded theme_background_color"> View our Products <span
                                        class="fa fa-send-o"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="doner">
                            <div class="text-center">
                                <i class="img-intro icon-checkmark-circle"></i>
                            </div>
                            <h3 class="head text-center">Delivery</h3>

                            <p class="narrow text-center">
                                Sit back, relax, and enjoy. Your order has been successfully made and will be personally
                                delivered to your doorstep. Thank you for shopping with the Poke Mart!
                            </p>
                            <p class="text-center">
                                <a href="loginproducts" class="btn btn-success btn-outline-rounded theme_background_color"> View our Products <span
                                        class="fa fa-send-o"></span></a>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>   
     </div>
 </section>
 
 <!-- [/HOW WORKS]
=============================================================================================================================-->
 
 <!-- [/WHY YOU LOVE]
=============================================================================================================================-->
 
 <section class="why-love theme_background_color" id="whylove">
     <div class="overlay">
   <div class="container">
            <div class="row text-center">
                <div class="WhyLove-heading text-center">
                    
                    <h2 class="sectionTitle">REASONS WHY YOU WILL CHOOSE THE POKE MART</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="WhyLove-icon-box text-center">
                        <div class="WhyLove-icon">
                            <span class="themecolor"><i class="fa fa-lightbulb-o" ></i></span>
                        </div>
                        <div class="WhyLove-content">
                            <h4>SMART</h4>

                            <p>Our system and services are updated to the latest technology.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="WhyLove-icon-box text-center">
                        <div class="WhyLove-icon">
                              <span class="themecolor"><i class="fa fa-binoculars"></i></span>
                        </div>
                        <div class="WhyLove-content">
                            <h4>EASE OF ACCESS</h4>

                            <p>You can access our system anywhere in the world as long as you have internet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="WhyLove-icon-box text-center">
                        <div class="WhyLove-icon">
                              <span class="themecolor"><i class="fa fa-users"></i></span>
                        </div>
                        <div class="WhyLove-content">
                            <h4>USER-FRIENDLY</h4>

                            <p>We put heart into our customers as the center of the Poke Mart.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="WhyLove-icon-box padding-top30 text-center">
                        <div class="WhyLove-icon">
                             <span class="themecolor"><i class="fa fa-laptop"></i></span>
                        </div>
                        <div class="WhyLove-content">
                            <h4>MINIMALIST</h4>

                            <p>Our graphic designers have created the most simple system that is applicable to all ages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="WhyLove-icon-box padding-top30 text-center">
                        <div class="WhyLove-icon">
                              <span class="themecolor"><i class="fa fa-mobile-phone"></i></span>
                        </div>
                        <div class="WhyLove-content">
                            <h4>SMART-PHONE READY</h4>

                            <p>You can use our system on your smartphone!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="WhyLove-icon-box padding-top30 text-center">
                        <div class="WhyLove-icon">
                             <span class="themecolor"><i class="fa fa-thumbs-up"></i></span>
                        </div>
                        <div class="WhyLove-content">
                            <h4>SATISFACTION GUARANTEE</h4>

                            <p>We are a guaranteed fail-proof store that can cater to all of your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
     
     </div>
     
 </section>
 <!-- [/WHY YOU WILL LOVE]
=============================================================================================================================-->
 
 <!-- [TESTIMONIAL]
=============================================================================================================================-->
 <section class="testimonial" id="testimonial-s">
     <div class="overlay">
     <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="testimonial-area-heading">
                        <h2>FEEDBACK FROM OUR CLIENTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-wow-delay="0.2s">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img
                                    class="img-responsive " src="images/TrainerAsh.jpg" alt="client">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive"
                                                                                     src="images/TrainerGary.jpg"
                                                                                     alt="client">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive"
                                                                                     src="images/TrainerMisty.jpg"
                                                                                     alt="clinet">
                            </li>
                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">

                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-12">

                                            <p>The Poke Mart is amazing! They have everything a Pokemon Trainer could ever
                                                possible want! I went to the store when my Pikachu was suffering from a fever
                                                and was in need of a Potion and the store was full of it! Their system was also
                                                one of my favorites because I was able to buy their products during my journey
                                                and it was delivered to me in an instant. Their deliver service is top-notch!</p>
                                            <small>Ash Ketchum</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-12">

                                            <p>The Poke Mart holds so many memories of my victories against my adversaries, most
                                                especially Ashy-boy! When my Pokemon needed immediate assistance, the Poke Mart is 
                                                my one-stop shop. It has the best services anywhere in the region and I would recommend
                                                it to all of my fans. </p>
                                            <small>Gary Oak</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-12">

                                            <p>Aside from the Pokemon Center, the Poke Mart is one of the most important places
                                                in the entire Pokemon world! It holds everything from berries to Pokeballs, Mails to 
                                                Dolls, and it even has those cute plush toys that my and my Corsola loves. Oh Poke Mart,
                                                what would we ever do without you?</p>
                                            <small>Misty</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Carousel Buttons Next/Prev -->

                    </div>
                </div>
            </div>
        </div>
     </div>
 </section>
 
 <!-- [/TESTIMONIAL]
=============================================================================================================================-->
 
 <!-- [FOOTER]
=============================================================================================================================-->
 <footer class="footer">
  
					<div class="container">
						<div class="footer-info col-md-12 text-center">
							<ul>
								<li><a href="#">Slateport City, Hoenn Region</a></li>
								<li><a href="#">+123456789</a></li>
								<li><a href="#">thepokemart@gmail.com</a></li>
							</ul>
						</div>
						<div class="footer-social-icons col-md-12 text-center">
							<ul>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				  
     
     
 </footer>
 
 <section class="sub-footer">
					<div class="container">
						<div class="copyright-text col-md-6 col-sm-6 col-xs-12">
							<p>© 2016 The Poke Mart. All rights reserved.</p>
						</div>
						<div class="designed-by col-md-6 col-sm-6 col-xs-12">
							<p>Designed by: <a href="#">Jp Cruz and Carl Gallera</a></p>
						</div>
					</div>
				</section>
 
 <!-- [/FOOTER]
=============================================================================================================================-->
 
 
 
 
 
 
 
 
 
</div>
 

<!-- [ /WRAPPER ]
=============================================================================================================================-->

	<!-- [ DEFAULT SCRIPT ] -->
	<script src="library/modernizr.custom.97074.js"></script>
	<script src="library/jquery-1.11.3.min.js"></script>
        <script src="library/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script src="library/vegas/vegas.min.js"></script>
	<!-- [ PLUGIN SCRIPT ] -->
        
	<script src="js/plugins.js"></script>
        <script src="js/fappear.js"></script>
       <script src="js/jquery.countTo.js"></script>
	<script src="js/scrollreveal.js"></script>
       	 <!-- [ COMMON SCRIPT ] -->
	<script src="js/common.js"></script>
  
</body>


</html>