<html>

<head>
    <title>Tìm giá trị nhỏ nhất trong mảng PHP</title>
</head>

<body>
    <?php
        function tim_gia_tri_lon_nhat(Array $values){
            //sử lý
            return max(array_diff(array_map('intval', $values), array(0)));
    }
        //dùng print_r để duyệt các phần tử trong mảng
        print_r(tim_gia_tri_lon_nhat(array(21,5,-4515,152,58798,-1522,218,-51)));
        echo (" Là Số lớn nhất "."</br>");
    ?>
    <?php
        function tim_gia_tri_nho_nhat(Array $values){
            //sử lý 
		    return min(array_diff(array_map('intval', $values), array(2,2)));
		}  
        // dùng print_r để duyệt các phần tử trong mảng
		print_r(tim_gia_tri_nho_nhat(array(-19,0,1,12,-10,1)) );
        echo (" Là số nhỏ nhất ");
    ?>

</body>

</html>