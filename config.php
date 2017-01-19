<?php
/**
@author rex
@copyright http:http://www.rishirajpurohit.in
 */

require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://localhost/user_login/');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', '');
define( 'DB_NAME', 'user_login');

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
