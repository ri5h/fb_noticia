<?php
/*
 * Site : http:http://www.rishirajpurohit.in
 * Author :rex
 * 
 */
 
define('BASE_PATH','http://demo.rishirajpurohit.in/autocomplete/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'fb_noticia_demo');
define('DB_USER','fb_noticia_rex');
define('DB_PASSWORD','demopass');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

?>