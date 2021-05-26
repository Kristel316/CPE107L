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
	//echo $sql;
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
?>
<div class="modal-body">
    <form name="form1" method="POST" action="updateuser.php" onsubmit="return validate()">
        <div class="form-group">
            <label for="First_Name" style="color:black;">First Name:</label>
            <input type="text" class="form-control" id="First_Name" name="First_Name" value="<?php echo $First_Name;?>">
        </div>
        <div class="form-group">
            <label for="Middle_Name" style="color:black;">Middle Initial:</label>
            <input type="text" class="form-control" id="Middle_Name" name="Middle_Name" value="<?php echo $Middle_Name;?>">
        </div>
        <div class="form-group">
            <label for="Last_Name" style="color:black;">Last Name:</label>
            <input type="text" class="form-control" id="Last_Name" name="Last_Name" value="<?php echo $Last_Name;?>">
        </div>
        <div class="form-group">
            <label for="Address" style="color:black;">Address:</label>
            <input type="text" class="form-control" id="Address" name="Address" value="<?php echo $Address;?>">
        </div>
        <div class="form-group">
            <label for="Username" style="color:black;">Username:</label>
            <input type="text" class="form-control" id="Username" name="Username" value="<?php echo $Username;?>">
        </div>
        <div class="form-group">
            <label for="Password" style="color:black;">Password:</label>
            <input type="password" class="form-control" id="Password" name="Password" value="<?php echo $Password;?>">
        </div>
        <div class="modal-footer">
            <div class="text-center">
                <button type="submit" class="fa btn btn-primary btn-sm"> Update Profile</button>
                <button type="reset" class="fa btn btn-primary btn-sm"> Reset</button>
            </div>
        </div>
    </form>
</div>
