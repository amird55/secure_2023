<?php
session_start();

include "class_users.php";
$users_obj=new users();

$correct_uname="AA";
$correct_pass="BB";
//$gss=isset($_GET['gss']) ? $_GET['gss'] : 0;
//$gss=isset($_COOKIE['gss']) ? $_COOKIE['gss'] : 0; // using coockie - open to manipulations
$gss=isset($_SESSION['gss']) ? $_SESSION['gss'] : 0;
if(isset($_GET['btnPressed'])) {
    $uname=(isset($_GET['uname']))? $_GET['uname'] : "";
    $pass=(isset($_GET['pass']))? $_GET['pass'] : "";
    if($users_obj->IsValid($uname,$pass)){
//    if(($gss<3)&&($uname==$correct_uname)&&($pass==$correct_pass)){
        echo "welcome";
        setcookie("valid_user",1);
    }
    else{
        echo "try again";
        $gss++;
    }
    echo "gss=$gss <br>";
}
//setcookie("gss",$gss); //     הפתרון הזה נתון למניפולציות של התוקף
$_SESSION['gss']=$gss;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
<!--    הפתרון הזה נתון למניפולציות של התוקף-->
<!--    <input type="hidden" name="gss" value="--><?php //= $gss ?><!--">-->
    <input type="text" name="uname" placeholder="user name" />
    <br>
    <input type="text" name="pass" placeholder="password" />
    <br>
    <button name="btnPressed" value="1">send</button>
</form>
</body>
</html>
