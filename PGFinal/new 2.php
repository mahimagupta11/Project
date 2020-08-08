<?php
echo "i there";
$link = mysql_connect("localhost","root","")or die("Unable to connect");
$db   = mysql_select_db($link,"pgproject");
$query = "select * from test";
mysql_query($link,$query) or die("Query not executed");
?>