<?php
   error_reporting(E_ERROR|E_PARSE);
    session_start();
    include('../../admin/config/config.php');
    if(isset($_GET['cong'])){
        // session_destroy();
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                'soluong'=>$cart_item['soluong'], 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] + 1;
                if($cart_item['soluong'] < 10){
                    $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                    'soluong'=>$tangsoluong, 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                }else{
                    $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                    'soluong'=>$cart_item['soluong'], 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header("Location: ../../index.php?quanly=giohang");
    }
    if(isset($_GET['tru'])){
        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                'soluong'=>$cart_item['soluong'], 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] - 1;
                if($cart_item['soluong'] > 1){
                    $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                    'soluong'=>$tangsoluong, 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                }else{
                    $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id_product'], 
                    'soluong'=>$cart_item['soluong'], 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header("Location: ../../index.php?quanly=giohang");
    }

    if(isset($_SESSION['cart'])&& isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                //thiết lập lại session 
                $product[]= array('tensanpham'=>$cart_item['name_product'],'id'=>$cart_item['id_product'],
                'soluong'=>$cart_item['soluong'],'giasanpham'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
            }
        $_SESSION['cart']=$product;
        header("Location: ../../index.php?quanly=giohang");
        }
		
	}
    if(isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1){
        unset($_SESSION['cart']);
        header("Location: ../../index.php?quanly=giohang");
    }

    if(isset($_POST['themgiohang'])){
        $id = $_GET['idsanpham'];
        $soluong = 1;
        $sql = "SELECT * FROM php_ad.tblproduct WHERE id_product = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_product = array(array('tensanpham'=>$row['name_product'], 'id'=>$id,
             'soluong'=>$soluong, 'gia'=>$row['gia'], 'anh'=>$row['anh']));
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    if($cart_item['id_product'] == $id){
                        $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id'], 'soluong'=>$soluong+1, 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                        $found=true;
                    }else{
                        $product[]= array('tensanpham'=>$cart_item['name_product'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'gia'=>$cart_item['gia'], 'anh'=>$cart_item['anh']);
                    }
                }
                if($found = false){
                    $_SESSION['cart'] = array_merge($product, $new_product);
                }else{
                    $_SESSION['cart'] = $product;
                }
            }else{
                $_SESSION['cart'] = $new_product;
            }
        }
    }
    header("Location: ../../index.php?quanly=giohang");
?>

