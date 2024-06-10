<?php
error_reporting(E_ERROR|E_PARSE);
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
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
    <?php include('config/config.php') ?>
    <?php include('modules/header.php') ?><br>
    <?php include('modules/menu.php') ?><br>
    <?php include('modules/main.php') ?><br>
    <?php include('modules/footer.php') ?>
</body>
</html>