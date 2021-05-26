<html>
<head>
  <title>My Cart</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  .my-cart-icon-affix {
    position: fixed;
    z-index: 999;
  }
  </style>
  <script src="js/jquery-2.2.3.min.js"></script>
  <script type='text/javascript' src="js/bootstrap.min.js"></script>
  <script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      cartItems: [
      ],
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        console.log("checking out", products, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 0.5;
      }
    });

  });
  </script>
</head>

<body class="container">

  <div class="page-header">
    <h1>Products
      <div style="float: right; cursor: pointer;">
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
      </div>
    </h1>
  </div>

  <div class="row">
      <?php
        include_once "connect.php";
        $sql="SELECT prodid,Model,Description,Brand,Price,Status,Picture FROM tbl_products";
        $rs=mysql_query($sql);
        $result=mysql_num_rows($rs);
        while($row=mysql_fetch_object($rs))
            {
                echo "<div class='col-md-3 text-center'>";
                echo "<img src='$row->Picture';>";
                echo "<br>";
                echo $row->Model." - $ ".$row->Price.".00";
                echo "<br>";
                echo $row->Description;
                echo "<br>";
                echo "<button class='btn btn-danger my-cart-btn' data-id='<?php echo $row->prodid ?>' data-name='<?php echo $row->Model ?>' data-summary='<?php echo $row->prodid ?>' data-price='<?php echo $row->Price ?>' data-quantity='1' data-image='<?php echo $row->Picture ?>'>Add to Cart</button>";
                echo "</div>";
            }
        ?>
    </div>
</body>

</html>
