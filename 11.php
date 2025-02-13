<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php
    $names=["Kashyap","Hamilton","Verstappen","Alonso","Sainz"];
    sort($names);
    for($i=0;$i<sizeof($names);$i++)
    print_r($names[$i]."<br>");
    ?>
</body>
</html>