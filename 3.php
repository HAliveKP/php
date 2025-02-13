<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label  for="name">Enter your Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <label  for="address">Enter your Address:</label>
        <input type="text" name="address" id="address" required>
        <br><br>
        <input type="submit" name="submit" value="submit">
        <?php
          if(isset($_POST['submit']))
          {
            extract($_POST);
            echo "<br> Your name is $name";
            echo "<br> Your address is $address";
          }
        ?>
</body>
</html>