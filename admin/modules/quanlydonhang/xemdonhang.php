<?php
error_reporting(E_ERROR|E_PARSE);
    $sql_don = "SELECT * FROM tblcart,tblcart_details, tblproduct WHERE tblcart_details.id_product = tblproduct.id_product";
    $query_don = mysqli_query($mysqli, $sql_don);
?>
<table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Mã đơn hàng</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Ảnh</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <?php
            while($row1 = mysqli_fetch_array($query_don)){
                $giatien = $row1['gia'];
        ?>
        <tr>
            <td><?php echo $row1['id_cart_details'] ?></td>
            <td><?php echo $row1['code_cart'] ?></td>
            <td><?php echo $row1['name_product'] ?></td>
            <td><?php echo $row1['soluong'] ?></td>
            <td><img src="modules/quanlysp/imgs/<?php echo $row1['anh'] ?>" alt="" height="80px" width="100px"></td>
            <td><?php echo number_format($row1['gia'], 0, ',', '.'). ' VNĐ' ?></td>
            <td><?php echo number_format($giatien, 0, ',', '.'). ' VNĐ' ?></td>
        </tr>
        <?php
                $tongtien = $row1['gia'];
            }
        ?>
        
    </table>
    <p>Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.'). ' VNĐ' ?></p>
