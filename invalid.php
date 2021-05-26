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
            <a class="navbar-brand" href=#>The Poke Mart</a>
        </div>
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
                 <h1 class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">Invalid Account</h1>

                <p class="intro" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">Please try again or Create a new Account</p>
              </div>
              
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="top40">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
                                                            <input type="password" class="form-control" id="Password" name="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Confirm_Password" style="color:black;">Confirm Password:</label>
                                                            <input type="password" class="form-control" id="Confirm_Password" name="Confirm_Password">
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
      </div>
    </div>
      
  </section>
  
  
  <!-- [/MAIN GALLERY]
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