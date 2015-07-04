<?php

require 'Common.class.php';
require '../smarty-3.1.23/libs/Smarty.class.php';
ini_set( 'display_errors', 1 );

$test = 1;



//DB接続
try{
	$pdo = new PDO('mysql:host=localhost;dbname=hokoyama','root','');
}catch(PDOException $e){
	Common::pp($test);	
}



$smarty = new Smarty();

$smarty->template_dir = dirname(__FILE__).'/templates';
$smarty->compile_dir = dirname(__FILE__).'/templates_c';

$smarty->assign('name','TOP');
$smarty->display('top.htm');

?>