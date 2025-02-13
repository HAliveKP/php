<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label  for="num1">Enter First Number:</label>
        <input type="number" name="num1"  >
        <br><br>
        <label  for="num2">Enter Second Number:</label>
        <input type="number" name="num2" >
        <br><br>
        <input type="submit" name="submit" value="submit">
    <?php
    if(isset($_POST['submit']))
    {
    extract($_POST);
        $a=$num1;
        $num1=$num2;
        $num2=$a;
        echo "<br> After swapping the numbers are $num1 and $num2";
    }
    
    ?>
</body>
</html>