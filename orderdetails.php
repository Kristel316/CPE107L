<div class="modal-body">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr style="color:black;">
            <th>Item Name</th>
            <th>Image</th>
            <th>Quantity</th>
            <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once "connect.php";
                $conn = OpenConnection();
                $oid = $_GET['oid'];
                $total = 0;

                $sql ="SELECT od.orderID,pd.orderID,prod.Model,prod.Picture,od.prodid,od.Quantity,od.Price
                       FROM tbl_orderdetail as od
                       INNER JOIN tbl_products as prod
                       ON od.prodid=prod.prodid
                       INNER JOIN tbl_orders as pd
                       ON od.orderID=pd.orderID
                       WHERE od.orderID='$oid'";
                $result = $conn->query($sql);
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr style='color:black';>";
                    echo "<td style='vertical-align:middle';>".$row["Model"]."</td>";
                    echo "<td style='vertical-align:middle'; align='center';><img src=".$row["Picture"]."></td>";
                    echo "<td style='vertical-align:middle'; align='center';>".$row["Quantity"]."</td>";
                    echo "<td style='vertical-align:middle';>$ ".$row["Price"].".00</td>";
                    echo "</tr>";
                    $total = $total + (($row["Quantity"]) * ($row["Price"]));
                }
            ?>
        </tbody>
    </table>
</div>
<div class="modal-footer">
    <h4 align="center" style="color:black;">Total Bill: $ <?php echo $total; ?>.00</h5>
</div>
