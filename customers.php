<?php
    session_start();
    include_once "connect.php";
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }else{
        $uid = $_SESSION['uid'];
        $uname = $_SESSION['uname'];
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
    function get_cid(ID){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("updatecustomer").innerHTML = this.responseText;
            }
        };
    xhttp.open("GET", "editcustomer.php?cid=" + ID, true);
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
            <a class="navbar-brand" href="index.php">The Poke Mart</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="page-scroll">Home</a></li>
            <li><a href="products.php" class="page-scroll">View Products</a></li>
            <li><a href="orders.php" class="page-scroll">View Orders</a></li>
            <li><a href="customers.php" class="page-scroll">View Users</a></li>
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $uname;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
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

      <div id="page-wrapper">
            <div class="container">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List of Registered Users
                        </h1>
                    </div>
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1 class="panel-title"><i class="fa fa-user fa-fw"></i> Registered Users</h3>
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr style="color:black;">
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            include_once "connect.php";
                                            $conn = OpenConnection();

                                            $sql="SELECT ID,First_Name,Middle_Name,Last_Name,Address,Username,Password,Status,Admin FROM tbl_users";
                                            $result = $conn->query($sql);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<tr style='color:black';>";
                                                echo "<td style='vertical-align:middle';>".$row["ID"]."</td>";
                                                echo "<td style='vertical-align:middle';>".$row["First_Name"]."</td>";
                                                echo "<td style='vertical-align:middle';>".$row["Middle_Name"]."</td>";
                                                echo "<td style='vertical-align:middle';>".$row["Last_Name"]."</td>";
                                                echo "<td style='vertical-align:middle';>".$row["Address"]."</td>";
                                                if($row["Status"]==1){
                                                    echo "<td style='vertical-align:middle';>Activated</td>";
                                                }else{
                                                    echo "<td style='vertical-align:middle';>Not Activated</td>";
                                                }
                                                if($row["Admin"]==1){
                                                    echo "<td style='vertical-align:middle'; width='50'><a href='editcustomer.php?cid=".$row["ID"]."' class='fa fa-edit btn btn-primary' disabled> Edit</a></td>";
                                                }else{
                                                    echo "<td width='50'><button type='button' class='fa fa-edit btn btn-primary' data-toggle='modal' data-target='#editcustomermodal' onclick='get_cid(".$row["ID"].")'> Edit</button></td>";
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

  </section>

  <div class="container">
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="editcustomermodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header" style="background-color:#337AB7;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="text-align:center; font-size:30px";>Update User Status</h4>
        </div>
            <div id="updatecustomer">
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
