<?php

include "_framework/_dori.php";	//main framework class

$page = new Dori();

/*
echo "<pre>";
print_r($_SESSION);
echo "<pre>";
*/

//present the page to the browser.
$page->Present("layouts/layout.basic.php");


?>