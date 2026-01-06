<?php
$info = [
    'name'    => 'Nimesh Pokharel',
    'address' => 'Bhaktapur',
    'email'   => 'np@gmail.com',
    'phone'   => 9761796969,
    'website' => 'www.nimeshpokharel.com.np'
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Array in Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>User Information</h2>

<table>
   
    <?php foreach ($info as $key => $value): ?>
        <tr>
            <td><?php echo ucfirst($key); ?></td>
            <td><?php echo $value; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
