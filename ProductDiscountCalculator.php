<?php
//kiểm tra người dùng đã submit hay chưa
if ($_SERVER['REQUEST_METHOD'] == "POST"){

    //kiểm tra dữ liệu đã gữi lên hay chưa
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";

    //lấy giá trị đầu vào . lưu vào bộ nhớ
    $description = $_REQUEST ['description'];
    $price = $_REQUEST['price'];
    $percent = $_REQUEST['percent'];

    //lử lý
    $Discount_Amount = $price * $percent * 0.01;

    //xuất
    echo $Discount_Amount;
}
?>

<form action="" method="POST">
    Product Description : <input type="text" name="description" value=""><br></br>
    List Price : <input type="text" name="price" value=""><br></br>
    Discount Percent : <input type="text" name="percent" value=""><br></br>
    <input type="submit" name="submit" value="TÍNH">
</form>
