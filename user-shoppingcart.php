<?php
  session_start();
	include("includes/db.php");
	include("includes/functions.php");

	if(isset($_REQUEST['command']) && $_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if(isset($_REQUEST['command']) && $_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
		header('location:user-products.php');
	}
	else if(isset($_REQUEST['command']) && $_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Please Enter a Quantity';
			}
		}

		header('location:user-products.php');
	}
	else if(isset($_REQUEST['command']) && $_REQUEST['command']=='update2'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Please Enter a Quantity';
			}
		}

		header('location:user-billing.php');
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
<head>z
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
	function del(pid){
		if(confirm('Do you wish to delete this item?')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart and direct you to the products page, Continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}
	function update2_cart(){
		document.form1.command.value='update2';
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
                            Your Shopping Cart
                        </h1>
                    </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>

          <form name="form1" method="post">
							<input type="hidden" name="pid" />
							<input type="hidden" name="command" />

								<div class="panel panel-default">
                            		<div class="panel-heading">
                                		<h1 class="panel-title"><i class="fa fa-cart-plus fa-fw"></i> Items List</h3>
									</div>

									<div class-"panel-body">
									<div style="color:#F00"><?php=$msg?></div>
									<div class="table-responsive">
									<table class="table table-bordered table-hover table-striped">
									<?php
										if(is_array($_SESSION['cart'])){
											echo '<tr bgcolor="#FFFFFF" style="color:black";>
												<td style="text-align:center";>Item Number</td>
												<td style="text-align:center";>Image</td>
												<td style="text-align:center";>Name</td>
												<td style="text-align:center";>Price</td>
												<td style="text-align:center";>Quantity</td>
												<td style="text-align:center";>Amount</td>
												<td style="text-align:center";>Options</td>
												</tr>';
											$max=count($_SESSION['cart']);
											for($i=0;$i<$max;$i++){
												$pid=$_SESSION['cart'][$i]['productid'];
												$q=$_SESSION['cart'][$i]['qty'];
												$pname=get_product_name($pid);
												if($q==0) continue;
										?>
												<tr bgcolor="#FFFFFF" style="color:black; text-align:center;";>
												<td style="vertical-align:middle";><?php echo $i+1?></td>
												<td style="vertical-align:middle";><img src="<?php echo get_product_picture($pid)?>"></td>
												<td style="vertical-align:middle";><?php echo $pname?></td>
												<td style="vertical-align:middle";>$ <?php echo get_price($pid)?>.00</td>
												<td style="vertical-align:middle";><input type="number" name="product<?php echo $pid?>" min="0" value="<?php echo $q?>" maxlength="3" size="2" /></td>
												<td style="vertical-align:middle";>$ <?php echo get_price($pid)*$q?>.00</td>
												<td style="vertical-align:middle";><a href="javascript:del(<?php echo $pid?>)">Remove</a></td></tr>
										<?php
											}
										?>
											<tr style="color:black";>
											<td style="vertical-align:middle;" align="center"><b>Order Total: $ <?php echo get_order_total()?>.00</b></td><td colspan="6" align="right">
											<input type="button" class ="btn btn-primary" value="Continue Shopping" onclick="update_cart()"/>
											<input type="button" class ="btn btn-primary" value="Clear Cart" onclick="clear_cart()">
											<input type="button" class ="btn btn-primary" value="Place Order" onclick="update2_cart()"></td></tr>
										<?php
										}
										else{
											echo "<tr bgColor='#FFFFFF' style='color:black';><td>There are no items in your shopping cart!</td>";
										}
									?>
								</table>
							</div>
						</form>
                    </div>
                <!-- /.row -->
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
