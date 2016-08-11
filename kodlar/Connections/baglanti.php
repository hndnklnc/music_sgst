<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_baglanti = "localhost";
$database_baglanti = "muzik";
$username_baglanti = "root";
$password_baglanti = "root";
$baglanti = mysql_pconnect($hostname_baglanti, $username_baglanti, $password_baglanti) or trigger_error(mysql_error(),E_USER_ERROR); 
?>