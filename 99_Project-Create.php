<!-- 99_Project-Create.php -->
<?php
if($_POST['title'] == "create" or $_POST['title'] == "update" or $_POST['title'] == "delete"){
    echo "<script type='text/javascript'> alert('You cant use this name. Please type others.');";
    echo "window.location.href = '/99_Index.php'; </script>";
} else{
    file_put_contents('./data/'.$_POST['title'], $_POST['description']);
    header('Location: /99_Index.php?id='.$_POST['title']);
}
?>