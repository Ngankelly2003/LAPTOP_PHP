<?php
    $sql_sua_sp = "SELECT * FROM php_ad.tblproduct WHERE id_product = '$_GET[idsp]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
<h3>Sửa sản phẩm</h3>
    <table border="1px" width="50%" style="border-collapse: collapse;" class="table table-striped-columns" >
    <form action="modules/quanlysp/xuly.php?idsp=<?php echo $_GET['idsp'] ?>" method="post" enctype="multipart/form-data">
        <?php
            while($row = mysqli_fetch_array($query_sua_sp)){
        ?>
            <tr>
                <td>Tên</td>
                <td><input type="text" name='tensp' class="form-control" value = "<?php echo $row['name_product']; ?>"></td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="text" name='soluong' class="form-control" value = "<?php echo $row['soluong']; ?>"></td>
            </tr>
            <tr>
                <td>Ảnh</td>
                <td><input class="form-control" type="file" name='anh'>
                    <img src="modules/quanlysp/imgs/<?php echo $row['anh']; ?>">
                </td>
            </tr>
            <tr>
                <td>Giới thiệu</td>
                <td><input type="text" name='gioithieu' class="form-control" value = "<?php echo $row['introduct']; ?>"></td>
            </tr>
            <tr>
                <td>Giá</td>
                <td><input type="text" name='gia' class="form-control" value = "<?php echo $row['gia']; ?>"></td>
            </tr>
            <tr>
                <td>Danh mục</td>
                <td>
                    <select name="danhmuc" class="form-select">
                        <?php
                            $sql_category = "SELECT * FROM php_ad.tblcategory ORDER BY id_category";
                            $query_category = mysqli_query($mysqli, $sql_category);
                            while($row_category = mysqli_fetch_array($query_category)){
                        ?>
                        <option value="<?php echo $row_category['id_category'] ?>"><?php echo $row_category['name_category'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name='thutu' class="form-control" value = "<?php echo $row['thutu']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Sửa" name='sua' class="btn btn-primary"></td>
            </tr>
        <?php
            }
        ?>
        </form>
    </table>