<?php
error_reporting(E_ERROR|E_PARSE);
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = $_POST['password'];
        $sql = "SELECT * FROM php_ad.tbladmin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1 ";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap'] = $taikhoan;
            header('Location: index.php');
        }else{
            echo "<scripy>alert('Tai khoan hoac mat khau khong chinh xac')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
    <form action="" method="post">
        <h1>Đăng nhập trang Admin</h1>
        <label for="">Tài khoản</label>
        <input type="text" name="username"><br><br>
        <label for="">Mật khẩu</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="dangnhap" value="Đăng nhập">
    </form>
</body>
</html>