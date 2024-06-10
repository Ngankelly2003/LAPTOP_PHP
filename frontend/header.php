<?php
   error_reporting(E_ERROR|E_PARSE);
    session_start();
?>
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
<section class="myheader bg-success text-white">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-3">
                    <a href="./index.php?quanly=index"><img src="imgs/logo.png" alt=""></a>
                </div>
                <div class="col-md-4">
                    <form action="index.php?quanly=timkiem" method="POST">
                    <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Tìm kiếm" aria-describedby="basic-addon2" name="tukhoa">
                            <span class="input-group-text" id="basic-addon2"><button style="border: 0px solid white"><i class="fa-solid fa-magnifying-glass text-success"></i></button></span>
                    </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-2">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    Tư vấn hỗ trợ<br>
                                    <strong>1900 6868</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-2">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    Xin chào! <?php
                                        if(isset($_SESSION['dangky'])){
                                            echo $_SESSION['dangky'];
                                        
                                        }
                                    ?>
                                    <br>
                                    <strong>
                                        <?php
                                        if(isset($_SESSION['dangky'])){
                                            if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
                                                unset($_SESSION['dangky']);
                                                header('Location:index.php?quanly=index');
                                            }
                                            echo '<a href="index.php?dangxuat=1" style="text-decoration: none; color: white;">Đăng xuất</a>';
                                        }else{
                                            echo '<a href="index.php?quanly=dangky" style="color: #FFFFFF; text-decoration: none;">Đăng kí</a>';
                                        }
                                    ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-2">
                    <div class="fs-2"><a href="./index.php?quanly=giohang" style="color: #FFFFFF; text-decoration: none;"><i class="fa-solid fa-cart-shopping" ></i></a></div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>