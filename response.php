<!DOCTYPE html>
<html>

<head>
    <title></title>
    <?php
        $search = htmlspecialchars($_GET["q"]);
    ?>
</head>

<body>

You searched <?php echo $_GET["q"]; ?><br>
<?php header('Location: https://google.ca/search?q=$search'); ?>

</body>
</html>