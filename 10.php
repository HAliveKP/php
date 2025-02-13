<?php

$strings = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = trim($_POST['inputString']);
    if (!empty($inputString)) {
        $strings[] = $inputString;
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Input Example</title>
</head>
<body>
    <h1>Enter a String</h1>
    <form method="post" action="">
        <input type="text" name="inputString" required>
        <input type="submit" value="Submit">
    </form>

    <h2>Strings Entered:</h2>
    <ul>
        <?php
        // Print each string in the array
        foreach ($strings as $string) {
            echo "<li>" . htmlspecialchars($string) . "</li>";

        }
        ?>
    </ul>
</body>
</html>