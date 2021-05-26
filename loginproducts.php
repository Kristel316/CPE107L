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
<body>
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
            <li><a href="login.php#home" class="page-scroll">Home</a></li>
            <li><a href="login.php#feature" class="page-scroll">About</a></li>
            <li><a href="login.php#howwork" class="page-scroll">Order Now</a></li>
            <li><a href="login.php#whylove" class="page-scroll">Choose Us</a></li>
            <li><a href="login.php#testimonial-s" class="page-scroll">Feedback</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

   <!-- [/NAV]
 ============================================================================================================================-->    
    
    
    
    
    
  <!-- [MAIN GALLERY ]
=============================================================================================================================-->
  <section class="main-gallery" id="home">

      <div class="container">

                <!-- Page Heading -->

                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Our Products
                        </h1>
                    </div>
                    
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1 class="panel-title"><i class="fa fa-folder-open fa-fw"></i> Products</h3>
                            </div>
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr style="color:black";>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Add to Cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                            include_once "connect.php";
            
                                            $sql="SELECT * FROM tbl_products WHERE Status=1";
                                            $rs=mysql_query($sql);
                                            $result=mysql_num_rows($rs);
                                            while($row=mysql_fetch_object($rs))
                                            {
                                                echo "<tr style='color:black';>";
                                                echo "<td style='vertical-align:middle';>".$row->prodid."</td>";
                                                echo "<td style='vertical-align:middle'; align='center';><img src='$row->Picture';></td>";
                                                echo "<td style='vertical-align:middle';>".$row->Model."</td>";
                                                echo "<td style='vertical-align:middle';>".$row->Description."</td>";
                                                echo "<td style='vertical-align:middle';>$ ".$row->Price.".00</td>";
                                                if($row->Status==1){
                                                    echo "<td style='vertical-align:middle';>Available</td>";
                                                    echo "<td width='50' style='vertical-align:middle';><button type='button' data-toggle='modal' data-target='#myModal' class='fa fa-cart-plus btn btn-success'> Add</button></td>";
                                                }else{
                                                    echo "<td style='vertical-align:middle';>Unavailable</td>";
                                                    echo "<td width='50' style='vertical-align:middle';><button type='button' class='fa fa-cart-arrow-down btn btn-danger' disabled> Add</button></td>";
                                                }
                                            }
                                            ?>
                                                
                                        </tbody>
                                    </table>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                <!-- /.row -->

            </div>
          </div>

      
  </section>

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
                                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal2">Sign Up</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
