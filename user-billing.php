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
	}

	include("includes/db.php");
	include("includes/functions.php");

	if(isset($_REQUEST['command']) && $_REQUEST['command']=='update'){
		$firstname=$_REQUEST['firstname'];
		$middlename=$_REQUEST['middlename'];
		$lastname=$_REQUEST['lastname'];
		$email=$_REQUEST['email'];
		$address=$_REQUEST['address'];
		$phone=$_REQUEST['phone'];

		$customerid=$uid;
	#	echo $uid;
	#	echo $customerid;
		$sql_customers = "INSERT INTO tbl_customers VALUES('$customerid','$firstname','$middlename','$lastname','$email','$address','$phone')";
	#	echo $sql_customers;
		mysqli_query($conn, $sql_customers);
		$date=date('Y-m-d');
		$sql_orders = "INSERT INTO tbl_orders VALUES('','$date','$customerid',0)";
	#	echo $sql_orders;
		mysqli_query($conn, $sql_orders);
		$orderid=mysqli_insert_id($conn);

		$max=count($_SESSION['cart']);
	#	echo $max;
	for($i=0;$i<$max;$i++){
	$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			$sql_orderdetail = "INSERT INTO tbl_orderdetail VALUES ($orderid,$pid,$q,$price)";
			$conn->query($sql_orderdetail);

        }
		unset($_SESSION['cart']);
		die(header("location:ordercomplete.php"));
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
	function validate(){
		var f=document.form1;
		var at = document.getElementById("email").value.indexOf("@");
		if(f.email.value=='' || f.phone.value==''){
			alert('Please fill all details');
			f.email.focus();
			return false;
		}

		if (at == -1) {
			alert("Please enter a valid E-mail Address");
			f.email.focus()
			return false;
		}

		f.command.value='update';
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
            <a class="navbar-brand" href="#">The Poke Mart</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

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
                            Shipping Information
                        </h1>
                    </div>
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-credit-card fa-fw"></i> Contact Details</h3>
                    </div>
					<div class="panel-body">
					<form name="form1" onsubmit="return validate()">
						<input type="hidden" name="command" />
                    	<label style="color:black";>Order Total: $ <?php echo get_order_total()?>.00</label>
                        <div class="form-group">
                            <label style="color:black";>Full Name: <?php echo $First_Name;?> <?php echo $Middle_Name;?> <?php echo $Last_Name;?></label>
                            <input type="hidden" class="form-control" id="firstname" name="firstname" value="<?php echo $First_Name;?>">
							<input type="hidden" class="form-control" id="middlename" name="middlename" value="<?php echo $Middle_Name;?>">
							<input type="hidden" class="form-control" id="lastname" name="lastname" value="<?php echo $Last_Name;?>"><br>
                            <label style="color:black";>Address: <?php echo $Address; ?></label>
                            <input type="hidden" class="form-control" id="address" name="address" value="<?php echo $Address;?>">
                        </div>
						<div class="form-group">
                            <label style="color:black";>Email:</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label style="color:black";>Contact Number:</label>
                            <input type="text" size="10" class="form-control" id="phone" name="phone">
                        </div>
                    	<button type="submit" class="btn btn-primary">Place Order</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                        <input type="button" class ="btn btn-primary" value="Back" onclick="window.location='user-shoppingcart.php'" />
					</form>
				</div></div></div>
                </div>
            </div>
        </div>
    </div>
  </section>

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
