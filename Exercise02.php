<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function 25</title>
</head>
<body>
    <?php
         function test($temp1, $temp2) {
            return ($temp1 < 0 && $temp2 > 100) || ($temp2 < 0 && $temp1 > 100);
        }
        function testWithDetails($temp1, $temp2) {
            $result = test($temp1, $temp2);

            $minTemp = min($temp1, $temp2);
            $maxTemp = max($temp1, $temp2);
            var_dump($result); 
            echo "Temp1: $temp1<br>";
            echo "Temp2: $temp2<br>";
            echo "Min Temp: $minTemp<br>";
            echo "Max Temp: $maxTemp<br>";

            echo "Temp1 is less than 0: " . ($temp1 < 0 ? 'true' : 'false') . "<br>";
            echo "Temp2 is greater than 100: " . ($temp2 > 100 ? 'true' : 'false') . "<br>";
            echo "Temp2 is less than 0: " . ($temp2 < 0 ? 'true' : 'false') . "<br>";
            echo "Temp1 is greater than 100: " . ($temp1 > 100 ? 'true' : 'false') . "<br>";
        }

        testWithDetails(120, -1);  
        echo "<br>";
        testWithDetails(-1, 120);  
        echo "<br>";
        testWithDetails(2, 120);  
        echo "<br>";
        testWithDetails(-5, 101);  
        echo "<br>";
        testWithDetails(0, 99);   
    ?>

</body>
</html>