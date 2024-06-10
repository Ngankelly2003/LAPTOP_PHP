<div id="main">
    <?php
       error_reporting(E_ERROR|E_PARSE);
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }else{
            $tam = '';
        }
        if($tam == 'index'){
            include('frontend/main/index.php');
        }else if($tam == 'danhmucsanpham'){
            include('frontend/main/danhmuc.php');
        }else if($tam == 'giohang'){
            include('frontend/main/giohang.php');
        }else if($tam == 'sanpham'){
            include('frontend/main/sanpham.php');
        }else if($tam == 'timkiem'){
            include('frontend/main/timkiem.php');
        }else if($tam == 'dangky'){
            include('frontend/main/dangky.php');
        }else if($tam == 'thanhtoan'){
            include('frontend/main/thanhtoan.php');
        }else if($tam == 'camon'){
            include('frontend/main/camon.php');
        }else if($tam == 'xuly'){
            include('frontend/main/xuly.php');
        }else if($tam == 'thanhtoanmomo'){
            include('frontend/main/thanhtoanmomo.php');
        }else{
            include('frontend/main/index.php');
        }
    ?>
</div>