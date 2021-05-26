<?php
    session_start();
    include_once "connect.php";
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }else{
        $uid = $_SESSION['uid'];
        $uname = $_SESSION['uname'];
    }

$ID = $_POST["cid"];
$First_Name = $_POST["First_Name"];
$Middle_Name = $_POST["Middle_Name"];
$Last_Name = $_POST["Last_Name"];
$Address = $_POST["Address"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Status = $_POST["status"];
$Admin = 0;
$conn = OpenConnection();
$sql = "UPDATE tbl_users SET First_Name='$First_Name',Middle_Name='$Middle_Name',Last_Name='$Last_Name',Address='$Address',
        Username='$Username',Password='$Password',Status=$Status,Admin=$Admin WHERE ID=".$ID;
$conn->query($sql);
header("location:customers.php");
?>
