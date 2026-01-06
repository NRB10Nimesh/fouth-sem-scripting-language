<?php
session_start();
if (!isset($_SESSION['username'])) {

header('location:28.session&cookie.php?msg=1');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Page</title>
</head>
<body>
<h1>Dashboard</h1>
<p>Welcome <?php echo $_SESSION['name'] ?></p>
<a href="28.1.logout.php">Logout</a>
</body>
</html>