<?php
    session_start();
    include "connect.php";
    $conn = OpenConnection();
    $useremail=$_POST["uname"];
    $password=$_POST["pword"];

    $sql="SELECT * FROM tbl_users WHERE Username='$useremail' and Password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          if ($useremail == $row["Username"] && $password == $row["Password"] && $row["Admin"] == 0 && $row["Status"] == 1){
              $_SESSION["uid"]=$row["ID"];
              $_SESSION["uname"]=$row["Username"];
              header("location:index-user.php");

          }else if ($useremail == $row["Username"] && $password == $row["Password"] && $row["Admin"] == 0 && $row["Status"] == 0){
              header("location:inactive.php");

          }else if ($useremail == $row["Username"] && $password == $row["Password"] && $row["Admin"] == 1){
              $_SESSION["uid"]=$row["ID"];
              $_SESSION["uname"]=$row["Username"];
              header("location:index.php");
          }
        }


    }else{
        echo "<script>window.location.assign('invalid.php?state=true');</script>";

    }
?>
