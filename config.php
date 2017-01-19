<?php
/**
@author rex
@copyright http:http://www.rishirajpurohit.in
 */

require_once 'messages.php';

//site specific configuration declartion
define( 'DB_HOST', 'ec2-54-145-224-234.compute-1.amazonaws.com' );
define( 'DB_USERNAME', 'deploy');
define( 'DB_PASSWORD', '5s8DBJTui3');
define( 'DB_NAME', 'fb_noticia');

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
