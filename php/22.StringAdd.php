<!DOCTYPE html>
<html>
<head>
    <title>Repeat Front 3 Characters</title>
</head>
<body>
    <h2>Add First 3 Characters Front and Back</h2>
    <form method="post">
        Enter a string: <input type="text" name="inputString" required><br><br>
        <input type="submit" value="Generate">
    </form>

<?php
function addFirstThreeCharsFrontBack($str) {
    $front = substr($str, 0, 3);  
    return $front . $str . $front;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['inputString'];
    $result = addFirstThreeCharsFrontBack($inputString);

    echo "<h3>Result</h3>";
    echo "Input String: \"$inputString\"<br>";
    echo "Output String: \"$result\"";
}
?>
</body>
</html>
