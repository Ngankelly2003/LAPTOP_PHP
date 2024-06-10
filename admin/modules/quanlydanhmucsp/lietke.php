<?php
error_reporting(E_ERROR|E_PARSE);
    $sql_lietke_danhmucsp = "SELECT * FROM php_ad.tblcategory ORDER BY thutul";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
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
<h3>Danh mục sản phẩm <button class="btn btn-info"><a href="?action=quanlydanhmucsanpham&query=them" style="text-decoration: none; color: black;">Thêm Danh mục</a></button>
</h3>
<table border="1px" style="border-collapse: collapse;"  class="table table-striped-columns">
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    ?>
    <tr>
        <td><?php echo $row['id_category']; ?></td>
        <td><?php echo $row['name_category']; ?></td>
        <td>
            <button class="btn btn-danger"><a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_category']; ?> " style="text-decoration: none; color: white;">Xóa</a></button>
            <button class="btn btn-success"><a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_category']; ?>" style="text-decoration: none; color: white;">Sửa</a></button>
            <button class="btn btn-secondary"><a href="?action=quanlydanhmucsanpham&query=timkiem&iddanhmuc=<?php echo $row['id_category']; ?>" style="text-decoration: none; color: white;">Tìm kiếm</a></button>
        </td>
    </tr>
    <?php
        }
    ?>
</table>

