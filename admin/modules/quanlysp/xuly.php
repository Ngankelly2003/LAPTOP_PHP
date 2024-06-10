<?php
    include('../../config/config.php');
    $tensanpham = $_POST['tensp'];
    $soluong = $_POST['soluong'];
    $anh=$_FILES['anh']['name'];
    $anh_tmp = $_FILES['anh']['tmp_name'];
    $anh = time().'_'.$anh;
    $gioithieu = $_POST['gioithieu'];
    $gia = $_POST['gia'];
    $danhmuc = $_POST['danhmuc'];
    $thutu = $_POST['thutu'];


    if(isset($_POST['them'])){
        if(isset($_FILES['anh'])){
            move_uploaded_file($anh_tmp, "imgs/".$anh);
            $sql_them = "INSERT INTO php_ad.tblproduct( name_product, soluong, anh, introduct, gia, category, thutu) 
            VALUE( '".$tensanpham."', '".$soluong."', '".$anh."', '".$gioithieu."', '".$gia."', '".$danhmuc."', '".$thutu."')";
            mysqli_query($mysqli, $sql_them);
            
            header('Location:../../index.php?action=quanlysanpham&query=lietke');
        }
       
    }else if(isset($_POST['sua'])){
        if($anh == ''){
            $sql_update = "UPDATE php_ad.tblproduct SET name_product='".$tensanpham."', soluong='".$soluong."', anh='".$anh."'
            , introduct='".$gioithieu."', gia='".$gia."', category='".$danhmuc."', thutu='".$thutu."' WHERE id_product = '$_GET[idsp]'";
           
        }else{
            move_uploaded_file($anh_tmp, "imgs/".$anh);
            $sql = "SELECT * FROM tblproduct WHERE id_product = '$_GET[idsp]' LIMIT 1";
            $query = mysqli_query($mysqli, $sql);
            while($row = mysqli_fetch_array($query)){
                unlink('imgs/'.$row['anh']);
            }
            $sql_update = "UPDATE php_ad.tblproduct SET name_product='".$tensanpham."', soluong='".$soluong."', anh='".$anh."'
            , introduct='".$gioithieu."', gia='".$gia."', category='".$danhmuc."', thutu='".$thutu."' WHERE id_product = '$_GET[idsp]'";
        }
        
        mysqli_query($mysqli, $sql_update);
        header('Location:../../index.php?action=quanlysanpham&query=lietke');
    }else {
        $id = $_GET['idsp'];
        $sql_xoa = "DELETE FROM php_ad.tblproduct WHERE id_product = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=lietke');
    }
    
?>