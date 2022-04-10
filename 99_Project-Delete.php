<!-- 99_Project-Delete.php -->
<?php
unlink('./data/'.basename($_POST['name']));
?>