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
    $sql = "DELETE FROM student_info WHERE sid=3";
    if($conn->query($sql)===TRUE){
        echo "Deleted successfully!";
    }else{
        echo "Error!";
    }
    ?>
</body>
</html>