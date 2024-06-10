<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    
    <form action="modules/quanlydanhmucsp/xuly.php" method="post">
        <h3>Thêm danh mục sản phẩm</h3>
        <table border="1px" style="border-collapse: collapse;" class="table table-striped-columns">
            <tr>
                <td>Tên</td>
                <td><input type="text" name='tendanhmuc' class="form-control"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name='thutu' class="form-control"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Thêm" name='them' class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>