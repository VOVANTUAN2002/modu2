       <?php
       //mảng gồm có 4 chiều và có giá trị lạ 4 
        $cars = [
            [7845,545,22,18],
            [8451,5512,5,13],
            [845,88,755,8748],
            [996,100,8548,15]
        ];
    $max= $cars [0][0];
// Sử dụng 2 vong lặp để duyệt mảng đa chiều
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0 ; $j < 4 ; $j++){
            if ($cars[$i][$j] > $max){
                $max = $cars[$i][$j];
            }
        }
    }
    //xuất mảng max để $cars có giá trị lớn nhất
    echo $max;


        //Nếu giá trị tại vị trí array[i][j] > max thì gán max = array[i][j]
       
    ?>