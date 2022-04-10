<?php
require_once('.\lib\ProjectPHP.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print_title(); ?></title>
    <style>
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
    <h1><a href="99_Index.php">WEB</a></h1>
    <ol>
        <?php
        print_list($data_files);
        ?>
    </ol>