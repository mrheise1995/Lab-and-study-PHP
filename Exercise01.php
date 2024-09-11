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
        function addLastChar($str) {
            $lastChar = substr($str, -1);
            $newStr = $lastChar . $str . $lastChar;

            return $newStr;
        }
        echo addLastChar("Red");
        echo "<br>";    
        echo addLastChar("Green");
        echo "<br>";
        echo addLastChar("1");
    ?>

</body>
</html>