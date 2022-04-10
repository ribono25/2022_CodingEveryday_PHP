<!-- 99_Project-DeleteConfirm.php -->
<html>
<head>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
    <script type="text/javascript">
        var confirmAction = confirm("Are you sure to delete this file?");
        var title = "<?php Print($_POST['title']); ?>";

        if(confirmAction){
            $.ajax({
                method: "POST",
                url: "99_Project-Delete.php",
                data: {"name" : title}
            });
            window.location.href = '/99_Index.php';
            alert('Complete');
        } else{
            window.location.href = '/99_Index.php?id=' + title;
            alert('Not Complete');
        }
    </script>
</body>
</html>

