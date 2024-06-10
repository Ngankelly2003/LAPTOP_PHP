<?php
error_reporting(E_ERROR|E_PARSE);
session_start();
include('../../admin/config/config.php');

// Lưu thông tin đơn hàng vào cơ sở dữ liệu
$id_khachhang = $_SESSION['id_khachhang'];
$code_order = rand(0, 9999);
$insert_cart = "INSERT INTO tblcart(id_khachhang, code_cart, cart_status) VALUE('".$id_khachhang."', '".$code_order."', 1)";
$cart_query = mysqli_query($mysqli, $insert_cart);
if ($cart_query) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_product = $value['id'];
        $soluong = $value['soluong'];
        $insert_order_details = "INSERT INTO tblcart_details(code_cart, id_product, soluong) VALUE('".$code_order."', '".$id_product."', '".$soluong."')";
        mysqli_query($mysqli, $insert_order_details);
    }
    unset($_SESSION['cart']);
}

// Lấy thông tin khách hàng và đơn hàng từ cơ sở dữ liệu
$sql_khach = "SELECT * FROM tblcart, tbldangky WHERE tblcart.id_khachhang = tbldangky.id_dangky";
$query_khach = mysqli_query($mysqli, $sql_khach);
$sql_don = "SELECT * FROM tblcart_details, tblproduct WHERE tblcart_details.id_product = tblproduct.id_product";
$query_don = mysqli_query($mysqli, $sql_don);
?>

<form action="" method="post">
    <h3>Thông tin khách hàng</h3>
    <table class="table table-striped">
        <tr>
            <th>Mã đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($query_khach)) { ?>
        <tr>
            <td><?php echo $row['code_cart']; ?></td>
            <td><?php echo $row['hoten']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['diachi']; ?></td>
            <td><?php echo $row['sodienthoai']; ?></td>
        </tr>
        <?php } ?>
    </table>
    
    <h3>Thông tin đơn hàng</h3>
    <table class="table table-striped">
        <tr>
            <th>Mã đơn hàng</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Ảnh</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
            <th></th>
        </tr>
        <?php 
        $tong_tien = 0;
        while ($row1 = mysqli_fetch_array($query_don)) { 
            $thanh_tien = $row1['soluong'] * $row1['gia'];
            $tong_tien += $thanh_tien;
        ?>
        <tr>
            <td><?php echo $row1['code_cart']; ?></td>
            <td><?php echo $row1['name_product']; ?></td>
            <td><?php echo $row1['soluong']; ?></td>
            <td><img src="./admin/modules/quanlysp/imgs/<?php echo $row1['anh']; ?>" alt="" height="80px" width="100px"></td>
            <td><?php echo number_format($row1['gia'], 0, ',', '.'); ?> VNĐ</td>
            <td><?php echo number_format($thanh_tien, 0, ',', '.'); ?> VNĐ</td>
            <td><button class="btn btn-success"><a href="frontend/main/indonhang.php?code=<?php echo $row1['code_cart']; ?>" style="text-decoration: none; color: white;">In hóa đơn</a></button></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="5" align="right"><strong>Tổng tiền:</strong></td>
            <td><strong><?php echo number_format($tong_tien, 0, ',', '.'); ?> VNĐ</strong></td>
            <td></td>
        </tr>
    </table>

    <form target="_blank" enctype="application/x-www-form-urlencoded">
        <button name="momo" class="btn btn-danger"><a href="./index.php?quanly=thanhtoanmomo" style="text-decoration: none; color: white;">Thanh toán đơn hàng</a></button>
    </form>
</form>
