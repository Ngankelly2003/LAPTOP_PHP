<?php
error_reporting(E_ERROR|E_PARSE);
    session_start();
    if(isset($_POST['dangky'])){
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $matkhau = $_POST['matkhau'];
        $sodienthoai = $_POST['sodienthoai'];
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbldangky(hoten, email, diachi, matkhau, sodienthoai) VALUE('$_POST[hoten]', '$_POST[email]'
        , '$_POST[diachi]', '$_POST[matkhau]', '$_POST[sodienthoai]')");
        if($sql_dangky){
            $_SESSION['dangky'] = $hoten;
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            echo "<p style='color: green'>Bạn đã đăng ký thành công</p>";
        }
    }
?>
<button class="btn btn-primary"><a href="./index.php" style="text-decoration: none; color: white;">OK</a></button>