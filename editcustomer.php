<?php
    session_start();
    include_once "connect.php";
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }else{
        $uid = $_SESSION['uid'];
        $uname = $_SESSION['uname'];
    }

$cid = $_GET["cid"];
$conn = OpenConnection();
$sql = "SELECT * FROM tbl_users WHERE ID=".$cid;
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
    <form name="updatecustomer" method="POST" action="updatecustomer.php">
        <label for="cid" style="color:black";>User ID: <?php echo $cid;?></label>
        <input type="text" name="cid" id="cid" value="<?php echo $cid; ?>" hidden/><br>
        <div class="form-group">
            <label for="Full Name" style="color:black";>Full Name: <?php echo $First_Name; ?> <?php echo $Middle_Name; ?> <?php echo $Last_Name; ?></label>
            <input type="text" id="First_Name" name="First_Name" value="<?php echo $First_Name;?>" hidden/>
            <input type="text" id="Middle_Name" name="Middle_Name" value="<?php echo $Middle_Name;?>" hidden/>
            <input type="text" id="Last_Name" name="Last_Name" value="<?php echo $Last_Name;?>" hidden/><br>
            <label for="Address" style="color:black";>Address: <?php echo $Address;?></label>
            <input type="text" name="Address" id="Address" value="<?php echo $Address; ?>" hidden/><br>
            <label for="Username" style="color:black";>Username: <?php echo $Username;?></label>
            <input type="text" name="Username" id="Username" value="<?php echo $Username; ?>" hidden/><br>
            <label for="Password" style="color:black";>Password: <?php echo $Password;?></label>
            <input type="password" name="Password" id="Password" value="<?php echo $Password; ?>" hidden/><br>
        </div>
        <div class="form-group">
            <label for="status" style="color:black";>Account Status:</label>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $Status; ?>"/>
        </div>
        <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update User</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </div>
    </form>
</div>
