<?php
/***********************************************
*
*  This script is use for setting server settings
*  eg: what server are we working on? is it localhost or some other server 
*
************************************************/
   ini_set('display_errors', '1');
   error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE & ~E_WARNING);
/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/
//localhost OR 127.0.0.1
$DATABASE_SETTINGS["localhost"]->hostname = "localhost"; //or 127.0.0.1
$DATABASE_SETTINGS["localhost"]->username = "user";
$DATABASE_SETTINGS["localhost"]->password = "user";
$DATABASE_SETTINGS["localhost"]->database = "test";
$DATABASE_SETTINGS["localhost"]->sessionpath = "SESSION/";

/*
echo "<pre>";
print_r($DATABASE_SETTINGS);
echo "</pre>";
*/


$SystemSettings[SERVER_NAME] = $_SERVER[SERVER_NAME];
$strTemp = explode("/", $_SERVER[SERVER_PROTOCOL]);
$SystemSettings[SERVER_PROTOCOL] = strtolower($strTemp[0]);
$strTemp = array_reverse(explode("/", $_SERVER[SCRIPT_NAME]));
$SystemSettings[SCRIPT_NAME] = $strTemp[0];
$SystemSettings[REQUEST_URI] = $_SERVER[REQUEST_URI];

$SystemSettings[FULL_URL] = $SystemSettings[SERVER_PROTOCOL] ."://". $SystemSettings[SERVER_NAME] . $_SERVER[REQUEST_URI];
$SystemSettings[FULL_PATH] = $SystemSettings[SERVER_PROTOCOL] ."://". $SystemSettings[SERVER_NAME] . $_SERVER[SCRIPT_NAME];
$SystemSettings[BASE_URL] = $SystemSettings[SERVER_PROTOCOL] ."://". $SystemSettings[SERVER_NAME] . str_replace($SystemSettings[SCRIPT_NAME], "", $_SERVER[SCRIPT_NAME]);
$SystemSettings[argv] = $_SERVER[argv];

ini_set("session.gc_maxlifetime","7200");
ini_set("session.save_path", $DATABASE_SETTINGS[$SystemSettings[SERVER_NAME]]->sessionpath);
session_start();


$xdb = array();
/*
echo "<pre>";
print_r($DATABASE_SETTINGS[$_SERVER[SERVER_NAME]]);
echo "</pre>";
*/
/*
function DOSOMETHING()
{
echo "<pre>";
print_r($DATABASE_SETTINGS);
echo "</pre>"; 
}
*/

?>