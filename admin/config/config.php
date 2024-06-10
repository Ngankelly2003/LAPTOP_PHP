<?php
error_reporting(E_ERROR|E_PARSE);
    $mysqli = mysqli_connect('localhost', 'root', '', 'php_ad');
    if(mysqli_connect_errno()){
        echo "Error connectiong to MySQL: ".mysqli_connect_error();
    }
?>