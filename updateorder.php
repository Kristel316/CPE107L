<?php
    session_start();
    include_once "connect.php";
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }else{
        $uid = $_SESSION['uid'];
        $uname = $_SESSION['uname'];
    }

$oid = $_POST["oid"];
$orderdate = $_POST["orderdate"];
$customerid = $_POST["customerid"];
$status = $_POST["status"];
$conn = OpenConnection();
$sql = "UPDATE tbl_orders SET orderDate='$orderdate',customerID=$customerid,Status=$status
        WHERE orderID=".$oid;
$conn->query($sql);
header("location:orders.php");
?>
