<?php session_start();

//Paths
require_once (dirname(__DIR__).'/config/config.php');


// Helper Classes
require_once (dirname(__DIR__).'/helpers/db_helper.php');
require_once (dirname(__DIR__).'/helpers/format_helper.php');
require_once (dirname(__DIR__).'/helpers/system_helper.php');


// AutoLoader Class
spl_autoload_register(function ($class_name) {
    require_once(dirname(__DIR__).'/lib/' . $class_name . ".php");
});


require_once (dirname(__DIR__).'/config/systems.php');

// inactive in seconds
$inactive = 240;
if( !isset($_SESSION['timeout']) )
    $_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); }

$_SESSION['timeout']=time();
