<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sum of two Numbers</h1>
    <form method="post">
        <label  for="num1">Enter First Number:</label>
        <input type="number" name="num1"  required>
        <br><br>
        <input type="submit" name="submit" value="submit">
        
    </form>
    <?php
    if(isset($_POST['submit'])){
        extract($_POST);
        if ($num1==0)
        {
            echo "Please input another number";
        }
        else if($num1>0)
        {
            echo "The number is positive.";
        }
        else
        {
            echo "The is negative.";
        }
    }
    ?>
</body>
</html>