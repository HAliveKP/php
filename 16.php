<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php
    $server="localhost";
    $user="root";
    $password="";
    $database="student";
    $conn=new mysqli($server,$user,$password,$database);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM student_info WHERE sgrade=11";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo $row["sid"]."  |  ".$row["sname"]."  |  ".$row["sgrade"]."\n";
        }
    }else{
        echo "Error while displaying!";
    }
    ?>
</body>
</html>