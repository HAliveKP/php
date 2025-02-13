<!DOCTYPE html>
<html lang="en">
<head>
 
</head>
<body>
    <?php
    $server="localhost";
    $user="root";
    $password="";
    $database="harikrishna";
    $conn=new mysqli($server,$user,$password,$database);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE student_info SET sname='Gawar'and sgrade=12 WHERE sid=2";
    if($conn->query($sql)===TRUE){
        echo "Updated successfully!";
    }else{
        echo "Error!";
    }
    ?>
</body>
</html>