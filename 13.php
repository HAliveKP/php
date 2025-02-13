<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form method="POST">
        Enter a text: <input type="text" name="string1">
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $text=$_POST['string1'];
        $len = strlen($text);
        echo"The length of $text is $len.";
    }
    ?>
</body>
</html>