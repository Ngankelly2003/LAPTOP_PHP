<?php
error_reporting(E_ERROR|E_PARSE);
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
    // Sửa lại truy vấn SQL để tìm kiếm trong bảng tbldangky theo tên người dùng
    $sql_timkiem_nguoidung = "SELECT * FROM php_ad.tbldangky WHERE hoten LIKE '%".$tukhoa."%' ";
    $query_timkiem_nguoidung = mysqli_query($mysqli, $sql_timkiem_nguoidung);
}
?>
<style>
    td{
        text-align: center;
    }
</style>
<form class="d-flex" role="search" method="POST">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="tukhoa" value="<?php echo isset($_POST['tukhoa']) ? $_POST['tukhoa'] : ''; ?>">
    <input type="submit" name="timkiem" value="Tìm kiếm" class="btn btn-success">
</form>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
<h3>Tìm kiếm</h3>
<table border="1px" width="50%" style="border-collapse: collapse;" class="table table-striped-columns">
    <tr>
        <th>Id</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Mật khẩu</th>
        <th>Số điện thoại</th>
    </tr>
    <?php
    if (isset($query_timkiem_nguoidung)) {
        while ($row = mysqli_fetch_array($query_timkiem_nguoidung)) {
    ?>
        <tr>
            <td><?php echo $row['id_dangky']; ?></td>
            <td><?php echo $row['hoten']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['diachi']; ?></td>
            <td><?php echo $row['matkhau']; ?></td>
            <td><?php echo $row['sodienthoai']; ?></td>
        </tr>
    <?php
        }
    }
    ?>
</table>
