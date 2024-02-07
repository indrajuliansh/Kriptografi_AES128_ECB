<?php
$dbserver= "localhost";
$dbusername="root";
$dbpassword="";
$dbname="haldin";
$con=mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
if(!$con) die('koneksi gagal : ' .mysql_error());
?>