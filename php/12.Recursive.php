<!DOCTYPE html>
<html>
<head>
    <title>Recursive String Length</title>
</head>
<body>
    <h2>Recursive String Length</h2>
    <form method="post">
        Enter a String: <input type="text" name="inputString" required>
        <input type="submit" value="Calculate Length">
    </form>

<?php

function stringLength($str) {
    if ($str === "") {
        return 0; 
    } else {
        return 1 + stringLength(substr($str, 1)); 
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['inputString'];
    $length = stringLength($inputString);

    echo "<h3>Result</h3>";
    echo "String: \"$inputString\"<br>";
    echo "Length: $length";
}
?>
</body>
</html>
