<?php
error_reporting(E_ERROR|E_PARSE);
    $sql_sua_danhmucsp = "SELECT * FROM php_ad.tblcategory WHERE id_category = '$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<style>
    td{
        text-align: center;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
<h3>Sửa danh mục sản phẩm</h3>
    <table border="1px" width="50%" style="border-collapse: collapse;" class="table table-striped-columns">
    <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="post">
        <?php
            while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?>
            <tr>
                <td>Tên</td>
                <td><input type="text" name='tendanhmuc' value = "<?php echo $dong['name_category']; ?>" class="form-control"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name='thutu' value = "<?php echo $dong['thutul'] ?>" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Sửa" name='sua' class="btn btn-primary"></td>
            </tr>
        <?php
            }
        ?>
        </form>
    </table>

