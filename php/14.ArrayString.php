<!DOCTYPE html>
<html>
<head>
    <title>Find String Index in Array</title>
</head>
<body>
    <h2>Find Index of a String</h2>
    <form method="post">
        Enter items (comma(,)): <input type="text" name="arrayItems" required><br><br>
        Enter string to find: <input type="text" name="searchString" required><br><br>
        <input type="submit" value="Find Index">
    </form>

<?php

function findStringIndex($array, $string) {
    $index = array_search($string, $array);
    return ($index !== false) ? $index : -1;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrayItems = explode(",", $_POST['arrayItems']); 
    $arrayItems = array_map('trim', $arrayItems); 
    $searchString = trim($_POST['searchString']);

    $index = findStringIndex($arrayItems, $searchString);

    echo "<h3>Result</h3>";
    echo "Array: [" . implode(", ", $arrayItems) . "]<br>";
    echo "String to find: \"$searchString\"<br>";
    echo "Index: $index";
}
?>
</body>
</html>
