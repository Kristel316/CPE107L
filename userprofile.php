<?php

	session_start();
    include_once "connect.php";
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }else{
        $uid = $_SESSION['uid'];
        $uname = $_SESSION['uname'];
    }

		$conn = mysqli_connect("localhost","root","","db_PokeMart");
		$sql = "SELECT * FROM tbl_users WHERE ID=".$uid;
		$result = $conn->query($sql);
		while($row = mysqli_fetch_assoc($result)){
	    	$First_Name = $row["First_Name"];
	    	$Middle_Name = $row["Middle_Name"];
	    	$Last_Name = $row["Last_Name"];
	    	$Address = $row["Address"];
			$Username = $row["Username"];
			$Password = $row["Password"];
			$Status = $row["Status"];
			$Admin = $row["Admin"];
			$Picture = $row["Picture"];
		}
?>

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
	<link rel="shortcut icon" type="image/x-icon" href="images/PMartIcon.jpg">
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
    function get_uid(uid){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("updateuser").innerHTML = this.responseText;
            }
        };
    xhttp.open("GET", "edituser.php", true);
    xhttp.send();
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
            <a class="navbar-brand" href="index-user.php">The Poke Mart</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index-user.php#home" class="page-scroll">Home</a></li>
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $uname;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="userprofile.php"><i class="fa fa-fw fa-user"></i> Profile</a></li>
                        <li><a href="orderstatus.php"><i class="fa fa-fw fa-envelope"></i> Order Status</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>
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
                            Profile
                        </h1>
                    </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Account Information</h3>
                            </div>
                            <div class="panel-body">
                                <form name="form1" method="POST" action="edituser.php">
                                    <div class="form-group">
                                        <label for="Picture" style="color:black";>Profile Picture</label><br>
                                        <img src="<?php echo $Picture;?>" height="100" width="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="First_Name" style="color:black;">Full Name: <?php echo $First_Name; ?> <?php echo $Middle_Name; ?> <?php echo $Last_Name; ?></label><br>
                                        <input type="text" id="First_Name" name="First_Name" value="<?php echo $First_Name;?>" hidden/>
                                        <input type="text" id="Middle_Name" name="Middle_Name" value="<?php echo $Middle_Name;?>" hidden/>
                                        <input type="text" id="Last_Name" name="Last_Name" value="<?php echo $Last_Name;?>" hidden/>
                                        <label for="Address" style="color:black;">Address: <?php echo $Address; ?></label><br>
                                        <input type="text" id="Address" name="Address" value="<?php echo $Address;?>" hidden/>
                                        <label for="Username" style="color:black;">Username: <?php echo $Username; ?></label><br>
                                        <input type="text" id="Username" name="Username" value="<?php echo $Username;?>" hidden>
                                        <input type="password" id="Password" name="Password" value="<?php echo $Password;?>" hidden>
                                    </div>
                                    <button type="button" class="fa fa-edit btn btn-primary" data-toggle="modal" data-target="#editusermodal" onclick="get_uid()"> Edit Profile</button>
                                    <button type="button" class="fa fa-user btn btn-primary" data-toggle="modal" data-target="#uploadphoto"> Upload Picture</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
          </div>


  </section>

  <div class="modal fade" id="uploadphoto" role="dialog">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#337AB7;">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" style="text-align:center; font-size:30px";>Upload Picture</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="uploadpicture" method="POST" action="uploadpicture.php"  enctype = "multipart/form-data">
                                                        <div class="form-group">
                                                            <label for "picture" style="color:black";>Picture:</label>
                                                            <input type = "file" id="image" name = "image" />
                                                        </div>
                                                            <div class="modal-footer">
                                                                <div class="text-center">
                                                                    <button type="submit" class="btn btn-primary">Upload</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
 <div class="container">
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="editusermodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header" style="background-color:#337AB7;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="text-align:center; font-size:30px";>Update Profile</h4>
        </div>
            <div id="updateuser">
            </div>
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
