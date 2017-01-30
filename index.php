<?php 
namespace alma31\App\Foo
 {
 	include 'vendor/autoload.php';
 	$foo = new Client();
 	$foo->render();
 }


 namespace alma31\App\Bar
 {
 	include 'vendor/autoload.php';
 	$bar = new Client();
 	$bar->render();
 }
 ?>