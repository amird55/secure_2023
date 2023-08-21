<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amir the best</title>
    <style>
        td{border: 1px solid black;min-width: 20px;}
       tr:nth-child(even) td:nth-child(odd),
       tr:nth-child(odd) td:nth-child(even)
       {background-color: lightgrey;}
    </style>
</head>
<body>
<p> <?php
    date_default_timezone_set('Asia/Jerusalem');
    echo date("d-m-Y H:i:s"); ?> </p>
<h1>לוח כפל</h1>
<table>
<?php
for($row=1;$row<=10;$row++){
    echo "<tr>";
    for($col=1;$col<=10;$col++){
        echo "<td title='$row x $col'>";
        $mul=$row*$col;
        echo ((($col==1)||($row==1))||(($mul >=30)&&($mul<=70))) ? $mul : "&nbsp;";
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
<hr>
<hr>
<?php
$assoc=array("hello"=>5,"world"=>7,"abba"=>"ganuv","shalom"=>"alechem");
$x=$assoc['hello']*$assoc['world'];
echo "<p>hello world = $x </p>";
$num=array();
for($k=0;$k<5;$k++){
    $num[]=rand(10,20);
}
echo "<h2>assoc array </h2>";
echo "<table>";
foreach ($assoc as $ii => $item) {
    echo "<tr><td>$ii</td>";
    echo "<td>$item</td></tr>";
}
echo "</table";


echo "<h2>num array </h2>";
echo "<table><tr>";
foreach ($num as $item) {
    echo "<td>$item</td>";
}
echo "</tr></table";

$c=array(1,2,3,"amir");
$c[]="last1";
$c[11]=11;
$c[]="after 11";
echo "<h2>c array </h2>";
echo "<table>";
foreach ($c as $ii => $item) {
    echo "<tr><td>$ii</td>";
    echo "<td>$item</td></tr>";
}
echo "</table";
echo isset($c[6]) ? $c[6] : "<p>no item</p>";

$d="5";
$e="3";
$f=$d+$e;
echo "<br>\$f=$f<br>";

$a=7;
if(isset($c)){$b=6;}
echo "$b";
?>


<?php if($a > 5 ) { ?>
    <h1>עמוד ניסיון</h1>
<?php } ?>



    <?php
        echo $a;
        echo "<br>";

        echo $a."<br>";

        echo "$a <br>";
        echo '$a <br>';

        $a++;
        echo $a;

    ?>
</body>
</html>



