<?php
error_reporting(E_ERROR|E_PARSE);
    include('../../config/config.php');
    if(isset($_GET['code'])){
        $code_cart = $_GET['code'];
        $sql =  "UPDATE tblcart SET cart_status = 0 WHERE code_cart = '".$code_cart."' ";
        $query = mysqli_query($mysqli, $sql);
        header('location:../../index.php?action=quanlydonhang&query=lietke');
    }
?>