<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $mysqli = mysqli_connect('localhost', 'root', '', 'php_ad');
    if(mysqli_connect_errno()){
        echo "Error connectiong to MySQL: ".mysqli_connect_error();
    }
?>
    <?php
        $sql_product = "SELECT * FROM  php_ad.tblproduct WHERE php_ad.tblproduct.category = '$_GET[id]' ";
        $query_product = mysqli_query($mysqli, $sql_product);
    ?>
    <?php
        $sql_pro = "SELECT * FROM php_ad.tblcategory, php_ad.tblproduct WHERE php_ad.tblproduct.category = php_ad.tblcategory.id_category 
        AND php_ad.tblproduct.category = '$_GET[id]' ";
        $query_pro = mysqli_query($mysqli, $sql_pro);
        $row_title = mysqli_fetch_array($query_pro);
    ?>
    <style>
        ul{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        li{
            margin-right: 20px;
           
        }
        .li{
            display: flex;
            margin-right: 100px;
            margin-bottom: 50px;
            border: 1px solid green;
        }
    </style>
        <div class="container">       
            <h3>Danh mục sản phẩm: <?php echo $row_title['name_category'] ?></h3>
            <ul>
                <?php
                    while($row_pro = mysqli_fetch_array($query_product)){
                ?>
                <li class="li">
                    <a href="./index.php?quanly=sanpham&id=<?php echo $row_pro['id_product']; ?>" style="text-decoration: none; color: black; text-align: center;">
                        <img src="./admin/modules/quanlysp/imgs/<?php echo $row_pro['anh'] ?>" height="200px" width="300px" >
                        <p>Tên sản phẩm: <?php echo $row_pro['name_product'] ?></p>
                        <p style="color: red">Giá: <?php echo number_format($row_pro['gia'], 0, ',', '.'). ' VNĐ' ?></p>
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
