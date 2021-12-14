<?php
function main() {
  $chars = ["ba",'me','em','anh'];     // khai báo một chuổi
     $charch = 'e';             // ký tự để đếm
     
     $i = 0;
      $count = 0;             // biến đếm
       
    while($chars[$i] != '0') {
       if($charch[$i] == $charch)
          $count++;
       $i++;
    }
    
    if($count > 0) {
       if($count == 1)
          printf("Ky tu %c xuat hien %d lan trong chuoi '%s'", $charch, $count, $chars);
       else
          printf("Ky tu %c xuat hien %d lan trong chuoi '%s'", $charch, $count, $chars);
    }else
       printf("Ky tu%c khong co mat trong chuoi %s", $charch, $chars);
    
    return 0;
 }
?>