<?php
error_reporting(E_ERROR|E_PARSE);
    include('../../config/config.php');
    // $id = $_POST['id'];
    $tenloaisanpham = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['them'])){
        $sql_them = "INSERT INTO php_ad.tblcategory( name_category, thutul) VALUE( '".$tenloaisanpham."', '".$thutu."')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
    }else if(isset($_POST['sua'])){
        $sql_update = "UPDATE php_ad.tblcategory SET name_category='".$tenloaisanpham."', thutul='".$thutu."' WHERE id_category = '$_GET[iddanhmuc]'";
        mysqli_query($mysqli, $sql_update);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
    }else {
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM php_ad.tblcategory WHERE id_category = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
    }
?>