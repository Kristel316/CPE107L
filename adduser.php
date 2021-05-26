<?php
    session_start();
    include_once "connect.php";

$First_Name = $_POST["First_Name"];
$Middle_Name = $_POST["Middle_Name"];
$Last_Name = $_POST["Last_Name"];
$Address = $_POST["Address"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Status = 1;
$conn = mysqli_connect("localhost","root","","db_PokeMart");
$sql = "INSERT INTO tbl_users(First_Name,Middle_Name,Last_Name,Address,Username,Password,Status)".
       "VALUES ('$First_Name','$Middle_Name','$Last_Name','$Address','$Username','$Password',$Status)";
mysqli_query($conn, $sql);

header("location:accountcreated.php");
?>
