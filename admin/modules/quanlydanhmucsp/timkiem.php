<?php
error_reporting(E_ERROR|E_PARSE);
    $tukhoa = $_POST['tukhoa'];
    $sql_timkiem_danhmuc = "SELECT * FROM php_ad.tblcategory WHERE name_category LIKE '%".$tukhoa."%' ";
    $query_timkiem_danhmuc = mysqli_query($mysqli, $sql_timkiem_danhmuc);
?>
<style>
    td{
        text-align: center;
    }
</style>
<form class="d-flex" role="search" method="POST" >
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="tukhoa" value = "<?php echo $_POST['tukhoa']; ?>">
    <a href=""><input type="submit" name="timkiem" value="Tìm kiếm" class="btn btn-success"></a>
</form>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
<h3>Tìm kiếm</h3>
    <table border="1px" width="50%" style="border-collapse: collapse;" class="table table-striped-columns">
    <form>
        <tr>
            <th>Id</th>
            <th>Tên danh mục</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($query_timkiem_danhmuc)){
        ?>
        <tr>
            <td><?php echo $row['id_category']; ?></td>
            <td><?php echo $row['name_category']; ?></td>
        </tr>
        <?php
            }
        ?>
        </form>
    </table>