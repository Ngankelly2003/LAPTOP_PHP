<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <?php
        error_reporting(E_ERROR|E_PARSE);
            if(isset($_GET['action']) && $_GET['query']){
                $tam = $_GET['action'];
                $query = $_GET['query'];
            }else{
                $tam = '';
                $query='';
            }
            if($tam == 'quanlydanhmucsanpham' && $query == 'them'){
                include('modules/quanlydanhmucsp/them.php');
            }else if($tam == 'quanlydanhmucsanpham' && $query == 'lietke'){
                include('modules/quanlydanhmucsp/lietke.php');
            }else if($tam == 'quanlydanhmucsanpham' && $query == 'sua'){
                include('modules/quanlydanhmucsp/sua.php');
            }else if($tam == 'quanlysanpham' && $query == 'them'){
                include('modules/quanlysp/them.php');
            }else if($tam == 'quanlysanpham' && $query == 'lietke'){
                include('modules/quanlysp/lietke.php');
            }else if($tam == 'quanlysanpham' && $query == 'sua'){
                include('modules/quanlysp/sua.php');
            }else if($tam == 'quanlydanhmucsanpham' && $query == 'timkiem'){
                include('modules/quanlydanhmucsp/timkiem.php');
            }else if($tam == 'quanlysanpham' && $query == 'timkiem'){
                include('modules/quanlysp/timkiem.php');
            }else if($tam == 'quanlynguoidung' && $query == 'them'){
                include('modules/quanlynguoidung/them.php');
            }else if($tam == 'quanlynguoidung' && $query == 'lietke'){
                include('modules/quanlynguoidung/lietke.php');
            }else if($tam == 'quanlynguoidung' && $query == 'sua'){
                include('modules/quanlynguoidung/sua.php');
            }else if($tam == 'quanlynguoidung' && $query == 'timkiem'){
                include('modules/quanlynguoidung/timkiem.php');
            }else if($tam == 'quanlynguoidung' && $query == 'timkiem'){
                include('modules/quanlynguoidung/timkiem.php');
            }else if($tam == 'quanlydonhang' && $query == 'lietke'){
                include('modules/quanlydonhang/lietke.php');
            }else if($tam == 'quanlydonhang' && $query == 'xemdonhang'){
                include('modules/quanlydonhang/xemdonhang.php');
            }else{
                include('modules/welcome.php');
            }
        ?>
    </div>
</body>
</html>