<?php
include "mysql_conn.php";
$mysql_obj = new mysql_conn();
$mysql=$mysql_obj->GetConn();

$q ="INSERT INTO `users` ( `username`, `pass`, `valid_until`) ";
$q.=" VALUES ( 'A2', 'B2', '2022-11-21')";
echo "q=$q";

$result = mysqli_query($mysql,$q);



