<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<style>
    .div1{
        display: flex;
        flex-direction: row;
        margin-left: 100px;
    }
    img{
        margin-right: 50px;
    }
    li{
        margin-right: 20px;
    }
    h3{
        margin-left: 100px;
    }
    .a{
        width: 300px;
    }
</style>
    <?php
    error_reporting(E_ERROR|E_PARSE);
        $sql_pro = "SELECT * FROM php_ad.tblproduct, php_ad.tblcategory WHERE php_ad.tblproduct.category = php_ad.tblcategory.id_category LIMIT 8";
        $query_pro = mysqli_query($mysqli, $sql_pro);
    ?>
    <style>
        ul{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .li{
            display: flex;
            margin-right: 10px;
            margin-bottom: 50px;
            border: 1px solid green;
        }
    </style>
<section class="mymaincontent my-3 bg-white">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./imgs/a1.jpg" width="100%" height="500px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/banner.png" width="100%" height="500px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/1200x675.png" width="100%" height="500px" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
        </div>
        <div class="container">
            <br>
            <h3>Sản phẩm mới nhất</h3><br>
            <ul>
                <?php
                    while($row = mysqli_fetch_array($query_pro)){
                ?>
                <li class="li">
                    <a class="a" href="index.php?quanly=sanpham&id=<?php echo $row['id_product']; ?>" style="text-decoration: none; color: black; text-align: center;">
                        <img src="./admin/modules/quanlysp/imgs/<?php echo $row['anh'] ?>" height="200px" width="300px">
                        <p>Tên sản phẩm: <?php echo $row['name_product'] ?></p>
                        <p style="color: red">Giá: <?php echo number_format($row['gia'], 0, ',', '.'). ' VNĐ' ?></p>
                    </a>
                </li>
                <?php
                     }
                ?>
            </ul>
        </div>
    </section>
</body>
</html>