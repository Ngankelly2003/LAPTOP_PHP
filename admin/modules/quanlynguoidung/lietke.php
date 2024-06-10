<?php
error_reporting(E_ERROR|E_PARSE);
    $sql_lietke = "SELECT * FROM php_ad.tbldangky";
    $query_lietke = mysqli_query($mysqli, $sql_lietke);
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
<h3>Người dùng đăng kí</h3>
<button class="btn btn-primary"><a href="?action=quanlynguoidung&query=them" style="text-decoration: none; color: white;">Thêm người dùng</a></button>

<table border="1px" style="border-collapse: collapse;"  class="table table-striped-columns">
    <tr>
        <th>Id</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Mật khẩu</th>
        <th>Số điện thoại</th>
        <th>Quản lý</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($query_lietke)){
    ?>
    <tr>
        <td><?php echo $row['id_dangky']; ?></td>
        <td><?php echo $row['hoten']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['diachi']; ?></td>
        <td><?php echo $row['matkhau']; ?></td>
        <td><?php echo $row['sodienthoai']; ?></td>
        <td>
            <button class="btn btn-danger"><a href="modules/quanlynguoidung/xuly.php?id=<?php echo $row['id_dangky']; ?> " style="text-decoration: none; color: white;">Xóa</a></button>
            <button class="btn btn-success"><a href="?action=quanlynguoidung&query=sua&id=<?php echo $row['id_dangky']; ?>" style="text-decoration: none; color: white;">Sửa</a></button>
            <button class="btn btn-primary"><a href="?action=quanlynguoidung&query=timkiem&id=<?php echo $row['id_dangky']; ?>" style="text-decoration: none; color: white;">Tìm kiếm</a></button>
        </td>
    </tr>
    <?php
        }
    ?>
</table>

