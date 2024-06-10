<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
    .div1{
        display: flex;
        flex-direction: row;
        margin-left: 100px;
    }
    img{
        margin-right: 50px;
    }
    li{
        margin-right: 20px;
    }
    h3{
        margin-left: 100px;
    }
</style>
    <h3>Chi tiết sản phẩm</h3><br>
<?php
   error_reporting(E_ERROR|E_PARSE);
    $sql_chitiet = "SELECT * FROM php_ad.tblproduct, php_ad.tblcategory WHERE php_ad.tblproduct.category = php_ad.tblcategory.id_category AND id_product = '$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>



<div class="div1">
    <img src="./admin/modules/quanlysp/imgs/<?php echo $row_chitiet['anh'] ?>" height="300px" width="350px">
    <form action="index.php?quanly=giohang&idsanpham=<?php echo $row_chitiet['id_product'] ?>" method="POST">
    <!-- <form action="frontend/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_product'] ?>" method="POST"> -->
        <div>
            <h5>Tên sản phẩm: <?php echo $row_chitiet['name_product'] ?></h5>
            <p>Số lượng: <?php echo $row_chitiet['soluong'] ?></p>
            <p>Giá: <?php echo number_format($row_chitiet['gia'], 0, ',', '.'). ' VNĐ' ?></p>
            <p>Danh mục: <?php echo $row_chitiet['name_category'] ?></p>
            <input type="submit" class="btn btn-success" name="themgiohang" value="Thêm vào giỏ hàng">
        </div>
    </form>
</div>
<?php 
    }
?><br>