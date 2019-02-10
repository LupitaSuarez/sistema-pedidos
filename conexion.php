<?php
$server="localhost";
$username="root";
$password="";
$db="dbcafeteria";
$con=mysql_connect($server,$username,$password)or die("error");
$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>

