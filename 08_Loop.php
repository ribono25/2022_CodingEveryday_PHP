<!-- 08_Loop.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <h2>while</h2>
    <?php
    $i = 0;
    while($i < 5):
        echo $i.'<br>';
        $i += 1;
    endwhile;
    ?>
    <h2>for</h2>
    <?php
    for($i=0; $i<5; $i++):
        echo $i.'<br>';
    endfor;
    ?>
    <h2>foreach</h2>
    <?php
    $arr = array(0,1,2,3,4);

    foreach($arr as $a):
        $a *= 2;
        echo $a.'<br>';
    endforeach;
    echo var_dump($arr).'<br>';

    foreach($arr as &$a):
        $a *= 2;
        echo $a.'<br>';
    endforeach;
    echo var_dump($arr);
    ?>
</body>
</html>