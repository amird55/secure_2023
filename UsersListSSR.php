<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>רשימת יוזרים</title>
    <style>
        td,th{border:1px solid black;}
    </style>
</head>
<body>
<h1>הרשימה</h1>
<table>
    <tr>
        <th>משתמש</th>
        <th>valid until</th>
    </tr>
    <?php
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_schema="ktec_23";
    $mysql=new mysqli($db_host, $db_user, $db_pass, $db_schema);
    $q  = "SELECT * FROM `users` ";
    $result = mysqli_query($mysql, $q);
    while($row=mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['username'] ?></td>
        <td><?= $row['valid_until'] ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
