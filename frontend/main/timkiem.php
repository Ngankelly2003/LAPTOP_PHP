<?php
   error_reporting(E_ERROR|E_PARSE);
    $mysqli = mysqli_connect('localhost', 'root', '', 'php_ad');
    if(mysqli_connect_errno()){
        echo "Error connectiong to MySQL: ".mysqli_connect_error();
    }
?>
<?php
    $tukhoa = $_POST['tukhoa'];
    $sql_timkiem = "SELECT * FROM php_ad.tblproduct WHERE name_product LIKE '%".$tukhoa."%' ";
    $query_timkiem = mysqli_query($mysqli, $sql_timkiem);
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
<h3>Từ khóa: <?php echo $tukhoa; ?></h3>
    <ul>
        <?php
            while($row_tk = mysqli_fetch_array($query_timkiem)){
        ?>
        <li class="li">
                    <a href="./index.php?quanly=sanpham&id=<?php echo $row_tk['id_product']; ?>" style="text-decoration: none; color: black; text-align: center;">
                        <img src="./admin/modules/quanlysp/imgs/<?php echo $row_tk['anh']; ?>" height="200px" width="300px" >
                        <p>Tên sản phẩm: <?php echo $row_tk['name_product']; ?></p>
                        <p style="color: red">Giá: <?php echo number_format($row_tk['gia'], 0, ',', '.'). ' VNĐ'; ?></p>
                    </a>
                </li>
            <?php
            }
        ?>
    </ul>