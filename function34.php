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
        function printMe($param = NULL) {
            print $param;
        }
        printMe("This is test");
        printMe();
    ?>
</body>
</html>
