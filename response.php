<!DOCTYPE html>
<html>

<head>
    <title></title>
    <?php
        $search = htmlspecialchars($_GET["q"]);
        $ip = $_SERVER['REMOTE_ADDR'];
        $server = "localhost";
        $username = "php";
        $password = "hello";
        $database = "bubemedia";
        $conn = mysqli_connect($server, $username, $password, $database);
        
        // Check for successful connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare and execute the SQL query
        //$sql = "INSERT INTO car_brands(company) VALUES ('$brand');";  // Ensure the variable is properly quoted
        $sql = "INSERT INTO google(ip, search) VALUES ('$ip', '$search');";
        $result = mysqli_query($conn, $sql);
    ?>
</head>

<body>

<?php header("Location: https://google.ca/search?q=".$search); ?>

</body>
</html>