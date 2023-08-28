<?php
//var_dump($_GET);
include "mysql_conn.php";
$mysql_obj = new mysql_conn();
$mysql=$mysql_obj->GetConn();

if(isset($_GET['SendBtn'])) {
    include "class_users.php";
    $user_ubj = new users($mysql);
    $user_ubj->CreateUser($_GET);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create user</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="username" placeholder="your username" />
    <br>
    <input type="text" name="passwd" placeholder="your password" />
    <br>
    <button name="SendBtn" value="1">send</button>
</form>
</body>
</html>
