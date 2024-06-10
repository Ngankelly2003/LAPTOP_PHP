<?php
error_reporting(E_ERROR|E_PARSE);
    include('../../config/config.php');
    // $id = $_POST['id'];
   
    if(isset($_POST['them_nguoidung'])){
        $sql_them = "INSERT INTO php_ad.tbldangky(hoten, email, diachi, matkhau, sodienthoai) VALUES('$_POST[hoten]', '$_POST[email]', '$_POST[diachi]', '$_POST[matkhau]', '$_POST[sodienthoai]')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=quanlynguoidung&query=lietke');
    }
    else if(isset($_POST['sua'])){
        // Sửa lại câu lệnh SQL UPDATE để sử dụng ID người dùng truyền từ biểu mẫu
    $sql_update = "UPDATE php_ad.tbldangky SET hoten='$_POST[hoten]', email='$_POST[email]', 
    diachi='$_POST[diachi]', matkhau='$_POST[matkhau]', sodienthoai='$_POST[sodienthoai]' WHERE id_dangky = '$_POST[id_nguoidung]'";

        mysqli_query($mysqli, $sql_update);
        header('Location:../../index.php?action=quanlynguoidung&query=lietke');
    }else {
        $id = $_GET['id'];
        $sql_xoa = "DELETE FROM php_ad.tbldangky WHERE id_dangky = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlynguoidung&query=lietke');
    }
?>