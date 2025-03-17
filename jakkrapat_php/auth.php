<?php
    $username = "root";
    $password = "123456";
    $host = "localhost";
    $databast = "utdc_db";

    $connection = mysqli_connect($host,$username,$password,$databast);

    $sql = "SELECT * FROM users";
    $query_sql = mysqli_query($connection,$sql);
    whle($respond= mysqli_fetch_array($query_sql)){
        echo $respond['username']. $respond['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php
    while($respond= mysqli_fetch_array($query_sql)){
        echo $respond['username'].$respond['password']."<br>";
    }
?>
</textarea>

</body>
</html>