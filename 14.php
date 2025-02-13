<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php
    $server="localhost";
    $user="root";
    $password="";
    $conn=new mysqli($server,$user,$password);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected Successfully! <br>";
    $sql = "CREATE DATABASE HKP";
    $result = $conn->query($sql);
    if($result === TRUE){
        echo "Database created successfully!";
    }else{
        echo "Error creating database.";
    }
    ?>
</body>
</html>