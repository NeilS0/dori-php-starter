<?php

include "_framework/_dori.php";	//main framework class


echo "<pre>";
print_r($_REQUEST);
echo "</pre>";


session_start();
unset($_SESSION["USER"]);
$page = new DoriCore();



//get the action
$Action = (isset($_REQUEST["Action"])?$_REQUEST["Action"]:"");  //$_REQUEST["Action"];

$errormsg = "";

//handle events for this page
switch ($Action){
	case "SignUp":
		echo "your about to sign up";
		break;
	
	default:
		break;
}


//contents of the login page
$page->Content = "  

	$errormsg

    <form class='form-signin' method='post'>
      <img class='mb-4' src='' alt='' width='72' height='72'>
      <h1 class='h3 mb-3 font-weight-normal'>Please sign in</h1>
      <label for='inputEmail' class='sr-only'>Email address</label>
      <input name='Email' type='email' id='inputEmail' class='form-control' placeholder='Email address' required autofocus>
      <label for='inputPassword' class='sr-only'>Password</label>
      <input name='Password' type='password' id='inputPassword' class='form-control' placeholder='Password' required>
      <div class='checkbox mb-3'>
        <label>
          <input name='RememberMe' type='checkbox'> Remember me
        </label>
      </div>
      <button class='btn btn-lg btn-primary btn-block' type='submit' name='Action' value='SignUp'>Sign in</button>
      <p class='mt-5 mb-3 text-muted'>&copy; 2017-".date("Y")."</p>
    </form>

   <style>
 	html,
 body {
   height: 100%;
 }

 body {
   display: -ms-flexbox;
   display: -webkit-box;
   display: flex;
   -ms-flex-align: center;
   -ms-flex-pack: center;
   -webkit-box-align: center;
   align-items: center;
   -webkit-box-pack: center;
   justify-content: center;
   padding-top: 40px;
   padding-bottom: 40px;
   background-color: #f5f5f5;
 }

 .form-signin {
   width: 100%;
   max-width: 330px;
   padding: 15px;
   margin: 0 auto;
 }
 .form-signin .checkbox {
   font-weight: 400;
 }
 .form-signin .form-control {
   position: relative;
   box-sizing: border-box;
   height: auto;
   padding: 10px;
   font-size: 16px;
 }
 .form-signin .form-control:focus {
   z-index: 2;
 }
 .form-signin input[type='email'] {
   margin-bottom: -1px;
   border-bottom-right-radius: 0;
   border-bottom-left-radius: 0;
 }
 .form-signin input[type='password'] {
   margin-bottom: 10px;
   border-top-left-radius: 0;
   border-top-right-radius: 0;
 }
 	</style>

		";


//$page->JS("console.log(document.querySelector('form'));");




//present the page to the browser.
$page->Present("layouts/layout.basic.php");


?>