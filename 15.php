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
    $sql = "CREATE TABLE student_info(sid INT PRIMARY KEY auto_increment,
    sname varchar(20),sgrade INT)";
    if($conn->query($sql)===TRUE){
        echo "Table created successfully!<br>";
    }else{
        echo "Error creating table: ";
    }
    $sql = "INSERT INTO student_info(sname,sgrade) VALUES('Kashyap',12),('Kaustuv',11),('Verstappen',12)";
    if($conn->query($sql)===TRUE){
        echo "<br> Record inserted successfully!";
    }else{
        echo "Error inserting record: ";
    }
    ?>
</body>
</html>