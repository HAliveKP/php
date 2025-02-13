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
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label  for="num2">Enter Second Number:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <label  for="num3">Enter Third Number:</label>
        <input type="number" name="num3" id="num3" required>
        <br><br>
        <input type="submit" name="submit" value="submit">
    <?php
    if(isset($_POST['submit']))
    {
    extract($_POST);
      if($num1>$num2 && $num1>$num3){
        echo"The greatest number is $num1";
      }
      else if($num2>$num3 && $num2>$num1){
        echo"The greatest number is $num2";
      }
      else
      echo "The greatest number is $num3";
    }
    
    ?>
</body>
</html>