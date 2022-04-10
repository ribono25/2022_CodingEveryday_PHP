<?php
function scan_dir($dir){
    $ignored = array('.', '..');

    $files = array();
    foreach(scandir($dir) as $file):
        if(in_array($file, $ignored)) continue;
        $files[$file] = filectime($dir.'/'.$file);
    endforeach;

    asort($files);
    $files = array_keys($files);

    return ($files) ? $files : false;
}
$data_files = scan_dir('C:\Bitnami\wampstack-8.1.4-0\apache2\htdocs\data');

function print_list($data){
    foreach($data as $f):
        $list_name = htmlspecialchars($f);
        echo "<li><a href=\"99_Index.php?id=".$list_name."\">".$list_name."</a></li>";
    endforeach;
}

function print_title(){
    if(isset($_GET['id'])):
        echo $_GET['id'];
    else:
        echo "Hello PHP!";
    endif;
}

function print_name(){
    if(isset($_GET['id'])){
        if($_GET['id'] == "create"){
            echo '<form action="99_Project-Create.php" method="post">';
            echo '<p><input type="text" name="title" placeholder="Title" style="width:250px;"></p>';
            echo '<p><textarea name="description" placeholder="Description" style="width:250px;"></textarea></p>';
            echo '<p><input type="submit" value="submit"></p></form>';
        } elseif($_GET['id'] == "update"){
            $file_contents = file_get_contents('./data/'.$_GET['updateid']);
            echo '<form action="99_Project-Update.php" method="post">';
            echo '<input type="hidden" name="old_name" value='.$_GET['updateid'].'>';
            echo '<p><input type="text" name="title" placeholder="Title" style="width:250px;" value='.$_GET['updateid'].'></p>';
            echo '<p><textarea name="description" placeholder="Description" style="width:250px;">';
            echo $file_contents;
            echo '</textarea></p>';
            echo '<p><input type="submit" value="submit"></p></form>';
        } elseif($_GET['id'] == "delete"){
            echo '<form id="del" action="99_Project-DeleteConfirm.php" method="post">';
            echo '<input type="hidden" name="title" value='.$_GET['deleteid'].'>';
            echo '<script> document.forms["del"].submit(); </script></form>';
        } else{ echo htmlspecialchars($_GET['id']); }
    } else{
        echo "Welcome!";
    }
}

function print_contents(){
    if(isset($_GET['id'])){
        if($_GET['id'] == "create" or $_GET['id'] == "update" or $_GET['id'] == "delete"){ } // nothing
        else { echo htmlspecialchars(file_get_contents('./data/'.basename($_GET['id']))); }
    } else{
        echo "There is no file. Sorry<br><br>";
    }
}
?>