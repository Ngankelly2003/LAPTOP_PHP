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
    <style>
        ul{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        li{
            display: flex;
            border: 1px solid black;
            width: 100%;
            height: 50px;
            text-align: center;
            justify-content: center;
        }
        nav ul{
            margin: 0px;
            padding: 0px;
        }
        nav ul li:hover{
            background-color: aqua;
        }
        nav{
            background-color:cornsilk;
        }
    </style>
    <nav>
        <ul>
            <li><a href="index.php?action=quanlydanhmucsanpham&query=lietke" class="link-dark link-offset-2 link-underline link-underline-opacity-0">Quản lý danh mục sản phẩm</a></li>
            <li><a href="index.php?action=quanlysanpham&query=lietke" class="link-dark link-offset-2 link-underline link-underline-opacity-0">Quản lý sản phẩm</a></li>
            <li><a href="index.php?action=quanlynguoidung&query=lietke" class="link-dark link-offset-2 link-underline link-underline-opacity-0">Quản lý người dùng</a></li>
            <li><a href="index.php?action=quanlydonhang&query=lietke" class="link-dark link-offset-2 link-underline link-underline-opacity-0">Quản lý đơn hàng</a></li>
            
        </ul>
    </nav>
</body>
</html>