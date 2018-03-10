<?php

//session_start();	//start session
//session_start();	//start buffer

include_once "system.php";  //include the server settings

//echo htmlentities(file_get_contents("system.php"));
//print_r($_SERVER);

include_once "system.functions.php";  //include a bunch of general purpose functions
require_once "_dori.database.php";  //for making database connections
require_once "_dori.controls.php";  //for creating html controls
require_once "_dori.mail.php";  //for sending mail

class DoriCore{                         

	//public $DB;
	//public $Control;
  public $Content;
  protected $JSExtra = "";

  public $SystemSettings;


	public function __construct()
	{
		//$this->DB = new DoriDatabase();
		//$this->Control = new DoriControl();

		global $SystemSettings;
		$this->SystemSettings = $SystemSettings; 

		//DOSOMETHING();

		//print_r($_SERVER["SERVER_NAME"]);
	}
	public function __destruct()
	{
	}

	//this function presents the html to the browser
	protected function GetTitle()
	{
		return "Dori Test";
	}
  
  //this function returns the final js extra to the footer
  protected function GetJS()
  {
    return $this->JSExtra;
  }

	//this function should return the generated html of the content of the page (or whats inside <body>)
	protected function GetSandbox()
	{
		return $this->Content;
	}

  /*
	//this function presents the html to the browser
	public function Present($Layout)
	{
		include_once($Layout);
	}
  */
  public function Present($Layout)
  {
    include_once($Layout);
  }
};

?>