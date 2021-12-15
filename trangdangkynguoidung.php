<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký người dùng</title>
</head>
<style>
form {
    width: 300px;
    border: 1px solid green;
    padding: 20px;
    margin: 0 auto;
    font-weight: 700px;
}

form input {
    width: 100%;
    padding: 10px 0;
}
</style>

<body>

    <form method="post">

        <h2>  Đăng ký thành viên </h2>

        Username: <input type="text" name="username" value="" placeholder=" Họ và Tên "><br></br>

        Email: <input type="email" name="email" value="" placeholder=" Email "><br></br>

        Phone: <input type="text" name="phone" value="" placeholder=" Số điện thoại "><br></br>

        <input type="submit" name="dangky" value="Đăng Ký"></br>
        
    </form>

</body>

</html>

<?php
// Dùng isset để kiểm tra Form đăng ký
if(isset($_POST['dangky'])){
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);

    if (!$username ||  !$email || !$phone ){
        echo "Vui lòng nhập đầy đủ thông tin.
        <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

        echo "Tên đăng nhập: ", $_POST['username'],"</br>";
        echo "Email đăng nhập: ", $_POST['email'],"</br>";
        echo "Số điện thoại: ", $_POST['phone'],"</br>";
        }