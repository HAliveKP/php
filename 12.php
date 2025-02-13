<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="POST">
        String 1: <input type="text" name="string1">
        <br>
        String 2: <input type="text" name="string2">
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $str1=$_POST['string1'];
        $str2=$_POST['string2'];
        if(strcmp($str1,$str2)==0){
            echo"$str1 and $str2 is same";
        }else{
            echo "$str1 and $str2 is not same";
        }
    }
    ?>
</body>
</html>