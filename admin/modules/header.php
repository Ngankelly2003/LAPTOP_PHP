<?php
error_reporting(E_ERROR|E_PARSE);
    session_start();
    if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h1, h2{
            color: blue;
            text-align: center;
        }
    </style>
    <h1>Welcome to Admin Page: 
        <?php 
            if(isset($_SESSION['dangnhap'])){
                echo $_SESSION['dangnhap'];
            } 
        ?>
        <button class="btn btn-primary">
        <a href="index.php?dangxuat=1" style="text-decoration: none; color: white;">Đăng xuất</a>
        </button>
        
    </h1>
    
</body>
</html>