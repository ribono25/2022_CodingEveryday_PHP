<!-- 10_Function.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>
    <?php
    function sum($a, $b){
        return $a + $b;
    }

    //file_put_contents('./data/result.txt', sum(2, 4));
    ?>
</body>
</html>