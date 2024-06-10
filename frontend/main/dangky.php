<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        
        label {
            width: 100px; /* Độ rộng của nhãn */
            text-align: right; /* Canh chỉnh văn bản sang phải */
            margin-right: 10px; /* Khoảng cách bên phải giữa nhãn và ô nhập */
        }
        
        input[type="text"],
        input[type="password"] {
            width: 200px; /* Độ rộng của ô nhập */
            padding: 5px; /* Khoảng cách nội dung bên trong ô nhập */
            margin-bottom: 10px; /* Khoảng cách dưới của mỗi ô nhập */
        }
    </style>
</head>
<body>
    <form action="index.php?quanly=xuly" method="post">
        <h1>Đăng kí</h1>
        <label for="hoten">Họ tên</label>
        <input type="text" name="hoten" id="hoten"><br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email"><br>
        <label for="diachi">Địa chỉ</label>
        <input type="text" name="diachi" id="diachi"><br>
        <label for="matkhau">Mật khẩu</label>
        <input type="password" name="matkhau" id="matkhau"><br>
        <label for="sodienthoai">Số điện thoại</label>
        <input type="text" name="sodienthoai" id="sodienthoai"><br>
        <input type="submit" name="dangky" value="Đăng ký">
    </form>
    <br>
</body>
</html>
