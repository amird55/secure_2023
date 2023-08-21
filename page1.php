<?php
session_start();
//if(!(isset($_SESSION['ValidUser']))){
//if(!isset($_COOKIE['MyUser'])){
if(!((isset($_SESSION['ValidUser']))||
    ((isset($_COOKIE['MyUser']))&&($_COOKIE['MyUser']==1))
)){
    header("location:login.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>protected page</title>
</head>
<body>
<h1>שיעור 3</h1>
<p>כמו שדן רצה</p>
</body>
</html>