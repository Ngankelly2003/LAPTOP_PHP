<?php
    $sql_lietke_sp = "SELECT * FROM php_ad.tblproduct, php_ad.tblcategory WHERE php_ad.tblproduct.category = php_ad.tblcategory.id_category ORDER BY thutu";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<style>
        td{
            text-align: center;
        }
        tr th{
            justify-content: center;
            text-align: center;
        }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<h3>Danh sách các sản phẩm: <button class="btn btn-info"><a href="?action=quanlysanpham&query=them" style="text-decoration: none; color: black;">Thêm Sản phẩm</a></button>
</h3>
<br>
<table border="1px" style="border-collapse: collapse;" width="100%" class="table table-striped-columns">
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Ảnh</th>
        <th>Giới thiệu</th>
        <th>Giá</th>
        <th>Danh mục</th>
        <th>Quản lý</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($query_lietke_sp)){
    ?>
    <tr>
  
        <td><?php echo $row['id_product']; ?></td>
        <td><?php echo $row['name_product']; ?></td>
        <td><?php echo $row['soluong']; ?></td>
        <td><img src="modules/quanlysp/imgs/<?php echo $row['anh']; ?>" width="200px" height="150px"></td>
        <td><?php echo $row['introduct']; ?></td>
        <td><?php echo $row['gia']; ?></td>
        <td><?php echo $row['name_category']; ?></td>
        <td>
            <button class="btn btn-danger"><a href="modules/quanlysp/xuly.php?idsp=<?php echo $row['id_product']; ?> " style="text-decoration: none; color: white;">Xóa</a></button>
            <button class="btn btn-success"><a href="?action=quanlysanpham&query=sua&idsp=<?php echo $row['id_product']; ?>" style="text-decoration: none; color: white;">Sửa</a></button>
            <button class="btn btn-secondary"><a href="?action=quanlysanpham&query=timkiem&idsp=<?php echo $row['id_product']; ?>" style="text-decoration: none; color: white;">Tìm kiếm</a></button>
        </td>
    </tr>
    <?php
        }
    ?>
</table>