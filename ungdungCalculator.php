<h1>Simple Calculator</h1>
<form action="" method="POST">
    First operand : <input type="number" name="first" value=""><br></br>
    Operator : <select name="Operator" value="">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br></br>
    Sencod operand : <input type="number" name="Sencod" value=""><br>
    <input type="submit" name="submit" value="Calculate"><br></br>
    </from>
    <h1>Kết quả:</h1>
<?php
//kiểm tra người dùng đã nhập hay chưa
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // echo ('<pre>');
    // print_r ($_REQUEST);
    // echo ('</pre>');
    //lấy giá trị đầu vào , và lưu vào bộ nhớ

    $first = $_REQUEST ['first'];
    $Operator = $_REQUEST ['Operator'];
    $Sencod = $_REQUEST["Sencod"];

    //lử lý 
    switch ($Operator){
        case '+':
            echo $first + $Sencod;
            break;
        case '-':
            echo $first - $Sencod;
            break;
        case '*':
            echo $first * $Sencod;
            break;
        case '/':
            echo $first / $Sencod;
            break;
        default;
        echo 'vui lòng bấm lại đầy đủ';
    }
}
?>
