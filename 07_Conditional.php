<!-- 07_Conditional.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conditional</h1>
    <h2>if</h2>
    <?php
    echo '1<br>';

    if(true):
        echo '2-1<br>';
    else:
        echo '2-2<br>';
    endif;

    echo '3<br>';
    ?>
</body>
</html>