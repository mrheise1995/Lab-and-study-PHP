<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP re</title>
</head>
<body>
    <?php
     // ฟังก์ชันที่รับพารามิเตอร์สองค่าและคืนค่าผลรวม
      function addFunction($num1, $num2) {
         $sum = $num1 + $num2; // คำนวณผลรวม
         return $sum; // คืนค่าผลรวม
      }

      $return_value = addFunction(10, 20); // เรียกใช้ฟังก์ชันและเก็บผลลัพธ์

       echo "Value Function: $return_value"; // แสดงผลลัพธ์
    ?>

</body>
</html>
