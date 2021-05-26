<?php
    session_start();
    include_once "connect.php";
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }else{
        $uid = $_SESSION['uid'];
        $uname = $_SESSION['uname'];
    }

$oid = $_GET["oid"];
$conn = OpenConnection();
$sql = "SELECT od.orderID,od.orderDate,od.customerID,od.Status,pd.First_Name,pd.Middle_Name,pd.Last_Name
        FROM tbl_orders as od
        INNER JOIN tbl_customers as pd
        ON od.customerID=pd.customerID
        WHERE od.orderID=".$oid;
$result = $conn->query($sql);
while($row = mysqli_fetch_assoc($result)){
    $orderDate = $row["orderDate"];
    $customerID = $row["customerID"];
    $Status = $row["Status"];
    $First_Name = $row["First_Name"];
    $Middle_Name = $row["Middle_Name"];
    $Last_Name = $row["Last_Name"];
}

?>

<div class="modal-body">
<form name="updateorder" method="POST" action="updateorder.php">
    <label for="oid" style="color:black";>Order ID: <?php echo $oid;?></label>
    <input type="text" name="oid" id="oid" value="<?php echo $oid; ?>" hidden/><br>
    <div class="form-group">
        <label for="model" style="color:black";>Order Date: <?php echo $orderDate;?></label>
        <input type="text" name="orderdate" id="orderdate" value="<?php echo $orderDate; ?>" hidden/><br>
        <label for="model" style="color:black";>Customer ID: <?php echo $customerID;?></label>
        <input type="text" name="customerid" id="customerid" value="<?php echo $customerID; ?>" hidden/><br>
        <label for="First_Name" style="color:black;">Customer Name: <?php echo $First_Name; ?> <?php echo $Middle_Name; ?> <?php echo $Last_Name; ?></label><br>
        <input type="text" id="First_Name" name="First_Name" value="<?php echo $First_Name;?>" hidden/>
        <input type="text" id="Middle_Name" name="Middle_Name" value="<?php echo $Middle_Name;?>" hidden/>
        <input type="text" id="Last_Name" name="Last_Name" value="<?php echo $Last_Name;?>" hidden/>
    </div>
    <div class="form-group">
        <label for="status" style="color:black";>Status:</label>
        <select style="color:black" id="status" name="status" value="<?php echo $Status; ?>"/>
            <option value="0" style="color:black">Pending</option>
            <option value="1" style="color:black">On Hold</option>
            <option value="2" style="color:black">Shipped</option>
        </select>
    </div>
        <div class="modal-footer">
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update Order</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </div>
    </form>
</div>
