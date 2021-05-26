<?php
    session_start();
    include_once "connect.php";
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }else{
        $uid = $_SESSION['uid'];
        $uname = $_SESSION['uname'];
    }

$First_Name = $_POST["First_Name"];
$Middle_Name = $_POST["Middle_Name"];
$Last_Name = $_POST["Last_Name"];
$Address = $_POST["Address"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Status = 1;
$Admin = 0;
$conn = mysqli_connect("localhost","root","","db_PokeMart");
$sql1 = "UPDATE tbl_users SET First_Name='$First_Name',Middle_Name='$Middle_Name',Last_Name='$Last_Name',Address='$Address',
        Username='$Username',Password='$Password',Status=$Status,Admin=$Admin WHERE ID=".$uid;
mysqli_query($conn, $sql1);

$sql2 = "UPDATE tbl_customers SET First_Name='$First_Name',Middle_Name='$Middle_Name',Last_Name='$Last_Name',Address='$Address'
        WHERE customerID=".$uid;
mysqli_query($conn, $sql2);

header("location:updatesuccess.php");
?>
