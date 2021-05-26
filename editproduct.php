<?php
    session_start();
    include_once "connect.php";
    if(!isset($_SESSION['uid'])){
        header('location:login.php');
    }else{
        $uid = $_SESSION['uid'];
        $uname = $_SESSION['uname'];
    }

    $prodid = $_GET["pid"];
    $conn = OpenConnection();
    $sql = "SELECT * FROM tbl_products WHERE prodid=".$prodid;
    //echo $sql;
    $result = $conn->query($sql);
    while($row = mysqli_fetch_assoc($result)){
        $model = $row["Model"];
        $descr = $row["Description"];
        $brand = $row["Brand"];
        $type = $row["Type"];
        $price = $row["Price"];
        $status = $row["Status"];
        $picture = $row["Picture"];
    }

?>
<div class="modal-body">
        <form name="updateproduct" method="POST" action="updateproduct.php" enctype = "multipart/form-data">
            <label for="prodid" style="color:black";>Product ID: <?php echo $prodid;?></label>
            <input type="text" id="brand" name="brand" value="<?php echo $brand; ?>" hidden/>
            <input type="text" name="prodid" id="prodid" value="<?php echo $prodid; ?>" hidden/><br>
            <div class="form-group">
                <label for="model" style="color:black";>Model:</label>
                <input type="text" class="form-control" id="model" name="model" value="<?php echo $model; ?>"/>
            </div>
            <div class="form-group">
                <label for="descr" style="color:black";>Description:</label>
                <input type="text" class="form-control" id="descr" name="descr" value="<?php echo $descr; ?>"/>
            </div>
            <div class="form-group">
                <label for="type" style="color:black";>Type:</label>
                <input type="text" class="form-control" id="type" name="type" value="<?php echo $type; ?>"/>
            </div>
            <div class="form-group">
                <label for="price" style="color:black";>Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $price; ?>"/>
            </div>
            <div class="form-group">
                <label for="status" style="color:black";>Status:</label>
                <select style="color:black" id="status" name="status" value="<?php echo $Status; ?>"/>
                    <option value="0" style="color:black">Unavailable</option>
                    <option value="1" style="color:black">Available</option>
                </select>
            </div>
            <div class="form-group">
                <label for "picture" style="color:black";>Picture:</label>
                <input type="file" id="image" name="image" />
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </div>
        </form>
</div>
