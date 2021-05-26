<?php
    session_start();
    include_once "connect.php";
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }else{
        $uid = $_SESSION['uid'];
        $uname = $_SESSION['uname'];
    }

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152) {
         $errors[]='File size must be exactly 2 MB';
      }

      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
      }else{
         print_r($errors);
      }
   }

$prodid = $_POST["prodid"];
$model = $_POST["model"];
$descr = $_POST["descr"];
$type = $_POST["type"];
$brand = $_POST["brand"];
$price = $_POST["price"];
$status = $_POST["status"];
$picture = $file_name;
$conn = OpenConnection();
$sql = "UPDATE tbl_products SET Model='$model',Description='$descr',Type='$type',Brand='$brand',Price='$price',Status=$status, Picture='images/$picture'".
       " WHERE prodid=".$prodid;
$conn->query($sql);
//echo $sql;
header("location:products.php");
?>
