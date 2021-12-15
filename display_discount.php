<?php
//kiểm tra người dùng  đã submit hay chưa
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //kiểm tra dữ liệu đã gữi lên hay chưa

    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";

    //lấy giá trị đầu vào , lưu vào bộ nhớ
   $Inventment = $_REQUEST['Inventment'];
   $Rate = $_REQUEST['Rate'];
   $Years = $_REQUEST['Years'];
   

   //xử lý
   //Giá trị Tương lai = Giá trị Hiện tại + (Giá trị Hiện tại * Lãi suất)
   $future_value = $Inventment + ($Inventment * $Years);
   
    //xuất
    echo $future_value;
}

?>
    <form action="" method="POST">
        Inventment Amount : <input type="text" name="Inventment" value=""><br></br>
        Yearly Interest Rate : <input type="text" name="Rate" value=""><br><br>
        Number of Years : <input type="text" name="Years" value=""><br></br>
        <input type="submit" name="submit" value="Gữi">
        </from>  

