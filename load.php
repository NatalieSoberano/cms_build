<?php 
define('ABSPATH', __DIR__); // absolute path determins the route directory
define('ADMIN_PATH', ABSPATH. '/admin'); //admin folder 
define('ADMIN_SCRIPT_PATH', ADMIN_PATH. '/scripts'); //admin script path 



ini_set('display errors', 1);
require_once ABSPATH.'/config/database.php';
require_once ADMIN_SCRIPT_PATH.'/read.php';
require_once ADMIN_SCRIPT_PATH.'/login.php';
require_once ADMIN_SCRIPT_PATH. '/functions.php';