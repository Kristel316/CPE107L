<?php
    session_start();
    include_once "connect.php";
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }else{
        $uid = $_SESSION['uid'];
        $uname = $_SESSION['uname'];
    }

    include("includes/db.php");
    include("includes/functions.php");

    if(isset($_REQUEST['command']) && $_REQUEST['command']=='add' && $_REQUEST['productid']>0){
        $pid=$_REQUEST['productid'];
        addtocart($pid,1);
        header("location:user-shoppingcart.php?productid=&command=view");
        exit();
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

<style>
input[type=text] {
    width: 1015px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    background-color: white;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 9px 12px 12px 12px;
}

</style>

<script language="javascript">
    function addtocart(pid){
        document.form1.productid.value=pid;
        document.form1.command.value='add';
        document.form1.submit();
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
            <li><a href="user-products.php" class="page-scroll">Poke Balls</a></li>
            <li><a href="user-products2.php" class="page-scroll">Healing Items</a></li>
            <li><a href="user-products3.php" class="page-scroll">Berries</a></li>
            <li><a href="user-products4.php" class="page-scroll">Stones</a></li>
            <li><a href="user-products5.php" class="page-scroll">Vitamins</a></li>
            <li><a href="user-products6.php" class="page-scroll">Fossils</a></li>
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
                            Poke Balls
                        </h1>
                    </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
           <form name="formone" method="POST" action="searchproduct.php">
                <button type="submit" class ="fa fa-search btn btn-primary"> Search</button>
                <input type="text" style="color:black"; name="search" id="search" placeholder="Input Keywords">
           </form>
           <br>

          <form name="form1">
              <input type="hidden" name="productid" />
              <input type="hidden" name="command" />

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Poke Balls List</h3>
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
                                            $conn = OpenConnection();
                                            $sql="SELECT * FROM tbl_products WHERE (Type='Poke Ball' AND Status=1)";
                                            $result = $conn->query($sql);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<tr style='color:black';>";
                                                echo "<td style='vertical-align:middle;'>".$row["prodid"]."</td>";
                                                echo "<td style='vertical-align:middle'; align='center';><img src=".$row["Picture"]."></td>";
                                                echo "<td style='vertical-align:middle;'>".$row["Model"]."</td>";
                                                echo "<td style='vertical-align:middle;'>".$row["Description"]."</td>";
                                                echo "<td style='vertical-align:middle;'>$ ".$row["Price"].".00</td>";
                                                if($row["Status"]==1){
                                                    echo "<td style='vertical-align:middle';>Available</td>";
                                                    echo "<td width='50' style='vertical-align:middle';><button type='button' onclick='addtocart(".$row["prodid"].")' class='fa fa-cart-plus btn btn-success'> Add</button></td>";
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
