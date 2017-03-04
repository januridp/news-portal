<?php 
$servername = "localhost";
$user		= "root";
$pasword	= "rootroot";
$db			= "bambukuning2";

$koneksi = mysql_connect ($servername,$user, $pasword)
			or die ('gagal terkoneksi'.mysql_error());
			
$database = mysql_select_db ($db)
			or die ('gagal terhubung ke database'.mysql_error());
?>