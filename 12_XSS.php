<!-- 12_XSS.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cross Site Scripting</h1>
    <?php
    echo htmlspecialchars("<script>alert('hi')</script>"); // 코드 그대로 출력
    ?>
</body>
</html>