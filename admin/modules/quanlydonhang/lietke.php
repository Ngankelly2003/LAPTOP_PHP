<?php
error_reporting(E_ERROR|E_PARSE);
    $sql_khach = "SELECT * FROM tblcart, tbldangky WHERE tblcart.id_khachhang = tbldangky.id_dangky";
    $query_khach = mysqli_query($mysqli, $sql_khach);
?>
<table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Mã đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Tình trạng</th>
            <th>Quản lý</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($query_khach)){
        ?>
        <tr>
            <td><?php echo $row['id_cart'] ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['hoten'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['sodienthoai'] ?></td>
            <td>
                <?php
                    if($row['cart_status'] == 1){
                        echo '<a href="modules/quanlydonhang/xuly.php?cart_status=1&code='.$row['code_cart'].'">Đơn hàng mới</a>';
                    }else{
                        echo 'Đã duyệt';
                    }
                ?>
                
            </td>
            <td><a href="index.php?action=quanlydonhang&query=xemdonhang">Xem đơn hàng</a></td>
        </tr>
        <?php
            }
        ?>
    </table>