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
        function test($n) {
            return $n % 3 == 0 || $n % 7 == 0;
        }
        echo var_dump(test(3)) . "<br>";
        echo var_dump(test(14)) . "<br>";
        echo var_dump(test(12)) . "<br>";
        echo var_dump(test(37)) . "<br>";
    ?>

</body>
</html>