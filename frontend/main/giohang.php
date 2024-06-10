<?php
error_reporting(E_ERROR|E_PARSE);
session_start();
?>
<?php
error_reporting(E_ERROR|E_PARSE);

if(isset($_GET['cong'])){
    $id = $_GET['cong'];
    $product = array(); // Initialize the $product array
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id'] != $id){
            $product[] = $cart_item;
        } else {
            $tangsoluong = $cart_item['soluong'] + 1;
            if($cart_item['soluong'] < 10){
                $cart_item['soluong'] = $tangsoluong;
            }
            $product[] = $cart_item;
        }
    }
    $_SESSION['cart'] = $product;
}

if(isset($_GET['tru'])){
    $id = $_GET['tru'];
    $product = array(); // Initialize the $product array
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id'] != $id){
            $product[] = $cart_item;
        } else {
            $giamsoLuong = $cart_item['soluong'] - 1;
            if($cart_item['soluong'] > 1){
                $cart_item['soluong'] = $giamsoLuong;
            }
            $product[] = $cart_item;
        }
    }
    $_SESSION['cart'] = $product;
}

if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
    $id = $_GET['xoa'];
    $product = array(); // Initialize the $product array
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id'] != $id){
            $product[] = $cart_item;
        }
    }
    $_SESSION['cart'] = $product;
}

if(isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1){
    unset($_SESSION['cart']);
}

if(isset($_POST['themgiohang'])){
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM php_ad.tblproduct WHERE id_product = '".$id."' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product = array(array(
            'tensanpham' => $row['name_product'],
            'id' => $id,
            'soluong' => $soluong,
            'gia' => $row['gia'],
            'anh' => $row['anh']
        ));
        if(isset($_SESSION['cart'])){
            $found = false;
            $product = array();
            foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['id'] == $id){
                    $cart_item['soluong'] += 1;
                    $found = true;
                }
                $product[] = $cart_item;
            }
            if(!$found){
                $_SESSION['cart'] = array_merge($product, $new_product);
            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<h1>Cart: </h1>
<table  class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Thành tiền</th>
        <th>Quản lý</th>
    </tr>
    <?php
        if(isset($_SESSION['cart'])){
            $i = 0;
            $tongtien = 0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['gia'] * $cart_item['soluong'];
                $tongtien = $tongtien + $thanhtien;
                $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $cart_item['tensanpham']; ?></td>
        <td><img src="./admin/modules/quanlysp/imgs/<?php echo $cart_item['anh']; ?>" height="200px" width="250px"></td>
        <td>
            <a href="index.php?quanly=giohang&tru=<?php echo $cart_item['id']; ?>"><i class="fa-solid fa-minus"></i></a>
            <?php echo $cart_item['soluong']; ?>
            <a href="index.php?quanly=giohang&cong=<?php echo $cart_item['id']; ?>"><i class="fa-solid fa-plus"></i></a>
        </td>
        <td><?php echo number_format($cart_item['gia'], 0, ',', '.'). ' VNĐ'; ?></td>
        <td><?php echo number_format($thanhtien, 0, ',', '.'). ' VNĐ'; ?></td>
        <td><a href="index.php?quanly=giohang&xoa=<?php echo $cart_item['id']; ?>">Xóa</a></td>
    </tr>
    <?php
            }
    ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <p><B>Tông tiền: <?php echo number_format($tongtien, 0, ',', '.'). ' VNĐ'; ?></B></p>
            <p><a href="index.php?quanly=giohang&xoatatca=1">Xóa tất cả</a></p>
        </td>
        <td></td>
        <td></td>
    </tr>
    <?php
        }else{
    ?>
    <tr>
        <td><p>Hiện tại giỏ hàng trống</p></td>
    </tr>
    <?php
        }
    ?>
    
</table>
<?php
    if(isset($_SESSION['dangky'])){
?>
<button class="btn btn-primary" name="thanhtoan"><a href="index.php?quanly=thanhtoan" style="text-decoration: none; color: white;" >Thanh toán</a></button>
<?php
    }
?>
