<?php

/**************************************************************
*
*	This is the main script we use to respond to ajax resquests
*
***************************************************************/

include "framework/_dori.database.php";	//for making database connections
include "framework/_dori.controls.php";	//for creating html controls
include "framework/_dori.mail.php";	//for sending mail

$Type = $_REQUEST["Type"];

//what type of ajax request are we making, call associate method(s)
switch ($Type){
	case "IsEmailAvailable":
		echo IsEmailAvailable();
		die;
		break;
	
	default:
		break;
}


//functions
//check if the email is already in database
function IsEmailAvailable()
{
	return 1;
}

?>