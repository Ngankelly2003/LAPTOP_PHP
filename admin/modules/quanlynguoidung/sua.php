<?php
    $sql_sua = "SELECT * FROM php_ad.tbldangky WHERE id_dangky = '$_GET[id]' LIMIT 1";
    $query_sua = mysqli_query($mysqli, $sql_sua);
?>
<style>
    td{
        text-align: center;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
<h3>Sửa người dùng</h3>
<table border="1px" width="50%" style="border-collapse: collapse;" class="table table-striped-columns">
<form action="modules/quanlynguoidung/xuly.php" method="post">
    <?php
        while($dong = mysqli_fetch_array($query_sua)){
    ?>
        <tr>
            <td>Họ tên</td>
            <td><input type="text" name='hoten' value="<?php echo $dong['hoten']; ?>" class="form-control"></td>
        </tr>
        <!-- Bổ sung trường input ẩn để truyền ID của người dùng -->
        <input type="hidden" name="id_nguoidung" value="<?php echo $dong['id_dangky']; ?>">
        <tr>
            <td>Email</td>
            <td><input type="text" name='email' value="<?php echo $dong['email']; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name='diachi' value="<?php echo $dong['diachi']; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="text" name='matkhau' value="<?php echo $dong['matkhau']; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="text" name='sodienthoai' value="<?php echo $dong['sodienthoai']; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Sửa" name='sua' class="btn btn-primary"></td>
        </tr>
    <?php
        }
    ?>
    </form>
</table>
