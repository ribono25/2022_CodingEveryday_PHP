<!-- 99_Index.php -->
<?php
require_once('.\lib\ProjectPHP.php');
require('.\view\ProjectTOP.php');
?>

<?php
echo "<a href=\"99_Index.php?id="."create"."\">"."create"."</a>"; echo " ";
if(isset($_GET['id'])){
    if($_GET['id'] != "create"){
        echo "<a href=\"99_Index.php?id=update&updateid=".$_GET['id']."\">"."update"."</a>";
        echo " ";
        echo "<a href=\"99_Index.php?id=delete&deleteid=".$_GET['id']."\">delete</a>";
    }
}
?>
<h2> 
    <?php
    print_name();
    ?> 
</h2>
<?php
print_contents();
?>

<?php
require('.\view\ProjectBOTTOM.php');
?>