<?php
session_start();
include "mysql_conn.php";
$mysql_obj = new mysql_conn();
$mysql=$mysql_obj->GetConn();
include "class_users.php";
$users_obj=new users($mysql);

$gss=isset($_SESSION['gss']) ? $_SESSION['gss'] : 0;
if(isset($_GET['btnPressed'])) {
    $uname = (isset($_GET['uname'])) ? $_GET['uname'] : "";
    $pass = (isset($_GET['pass'])) ? $_GET['pass'] : "";
    if (($gss < 4) && ($users_obj->IsValid($uname, $pass))) {
        $_SESSION['ValidUser']=$uname;
        $_SESSION['TOKEN']= substr(md5(rand(100,999)),0,10);
        setcookie("MyUser",$uname);
        header("location:page1.php");
    }
    else{
        setcookie("MyUser",0);
        echo "try again  ".htmlspecialchars($uname);
        $gss++;
    }
}
$_SESSION['gss']=$gss;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<form action="" method="get" onsubmit=" checkForm();return false;">
    <input type="text" id="uname" name="uname" placeholder="user name" />
    <br>
    <input type="text" name="pass" placeholder="password" />
    <br>
    <button name="btnPressed" value="1">send</button>
</form>
<script>
    function checkForm(){
        let el=document.getElementById("uname").value;
        console.log(el)
        if(el.contains("'"))
            return false;
        return true
    }
</script>
</body>
</html>
