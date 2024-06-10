<link rel="stylesheet" href="./style/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

 
<?php
   error_reporting(E_ERROR|E_PARSE);
    $sql_category = "SELECT * FROM php_ad.tblcategory";
    $query_category = mysqli_query($mysqli, $sql_category);
?>
<section class="mymainmenu bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 py-3">Menu</div>
            <div class="col-md-9">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php?quanly=index">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php?quanly=index">Giới thiệu</a>
                                </li>
                                <?php
                                    while($row_category = mysqli_fetch_array($query_category)){
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_category['id_category'] ?>"><?php echo $row_category['name_category'] ?></a>
                                </li>
                                <?php 
                                    } 
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php?quanly=index">Liên hệ</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
