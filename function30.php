<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variable via refernce</title>
</head>
<body>
    <?php
       // ฟังก์ชันเพิ่ม 5 ให้กับตัวแปร
       function addFive($num) {
          $num += 5; // เพิ่ม 5 ให้กับ $num
        return $num; // ส่งค่ากลับ
         }

         // ฟังก์ชันเพิ่ม 6 ให้กับตัวแปร
        function addSix($num) {
          $num += 6; // เพิ่ม 6 ให้กับ $num
         return $num; // ส่งค่ากลับ
        }

        $orignum = 10; // ประกาศตัวแปร $orignum และกำหนดค่าเริ่มต้นเป็น 10

        // เรียกใช้ฟังก์ชัน addFive และเก็บผลลัพธ์ใน $orignum
       $orignum = addFive($orignum);

      // แสดงผลลัพธ์หลังจากเพิ่ม 5
      echo "Original value after adding 5 is $orignum"; // ใช้ ; เพื่อจบคำสั่ง
      echo "<br>"; // แสดงบรรทัดใหม่

      // เรียกใช้ฟังก์ชัน addSix และเก็บผลลัพธ์ใน $orignum
      $orignum = addSix($orignum);

      // แสดงผลลัพธ์หลังจากเพิ่ม 6
      echo "Original value after adding 6 is $orignum"; // ใช้ ; เพื่อจบคำสั่ง
    ?>
</body>
</html>
