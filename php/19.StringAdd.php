<!DOCTYPE html>
<html>
<head>
    <title>Add "if" to String</title>
</head>
<body>
    <h2>Add "if" to the Front of a String</h2>
    <form method="post">
        <label>Enter a string:</label>
        <input type="text" name="text" required>
        <input type="submit" value="Submit">
    </form>

<?php
function addIfToFront($str) {
   
    if (substr($str, 0, 2) === "if") {
        return $str;
    } else {
        return "if " . $str;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['text'];
    $result = addIfToFront($input);

    echo "<h3>Result:</h3>";
    echo htmlspecialchars($result);
}
?>
</body>
</html>
