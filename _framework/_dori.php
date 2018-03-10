<?php

//include_once "system.functions.php";	//include a bunch of general purpose functions
include "_dori.core.php";	//framework core


class Dori extends DoriCore{
	public function __construct()
	{
		DoriCore::__construct();

		if (!isset($SESSION["USER"])){
			echo "your not logged in";
			//WindowLocation("login.php");
			header("Location: login.php");
			die;
		}
	}
	public function __destruct()
	{
	}

	/*
	//write to buffer
	public function Render()
	{
	}
	*/


	//manage javascript
	public function JS($JSExtra)
	{
		$this->$JSExtra .= "<script>".$JSExtra."</script>";
	}

	/*
	//manage style/css
	public function Style($JSExtra)
	{
		$this->$JSExtra .= "<script>".$JSExtra."</script>";
	}


	/*
	//present the page to the browser.
	public function Present()
	{
	}
	*/
};

?>