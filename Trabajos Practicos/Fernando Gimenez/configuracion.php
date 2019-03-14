<?php

//---------- FTP ----------------
$ftp_ip = '200.85.158.72';
$ftp_port = 21;
$ftp_user = 'crud111mil';
$ftp_pass = 'Clave01';

// ---------- BASE DE DATOS ------
$bd_host = "localhost";
$bd_usuario = "root";
$bd_pass = "";
$bd_base = "teorico_licencia";
$bd_port = "3006";

$con = mysql_connect($bd_host, $bd_usuario, $bd_pass);
mysql_select_db($bd_base, $con);
mysql_query("SET NAMES 'utf8'");

?>
