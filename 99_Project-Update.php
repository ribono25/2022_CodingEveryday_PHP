<!-- 99_Project-Update.php -->
<?php
rename('./data/'.$_POST['old_name'], './data/'.$_POST['title']);
file_put_contents('./data/'.$_POST['title'], $_POST['description']);
header('Location: /99_Index.php?id='.$_POST['title']);
?>