<!-- 09_Array.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $coworkers = array('ribono', 'hikenny', 'tjdgus');
    echo count($coworkers).'<br><br>';
    
    for($i=0; $i<count($coworkers); $i++):
        echo $coworkers[$i].'<br>';
    endfor;

    array_push($coworkers, 'eunkyo', 'hwisung');
    echo count($coworkers).'<br><br>';

    for($i=0; $i<count($coworkers); $i++):
        echo $coworkers[$i].'<br>';
    endfor;

    echo var_dump($coworkers);
    ?>
</body>
</html>