<?php
class TopContrllor{

	public function new_entry(){
		require_once 'models/db/UserBasicData.class.php';		
		$userBasicData = new UserBasicData();
		$userBasicData->InsertUserData();
	}	
}

?>

<?php

require 'Common.class.php';
require '../smarty-3.1.23/libs/Smarty.class.php';
//ini_set( 'display_errors', 1 );

$test = 1;
$html = 'top.htm';

//DB接続
try{
	$pdo = new PDO('mysql:host=localhost;dbname=hokoyama','root','');
}catch(PDOException $e){
	Common::pp($test);	
}

//新規登録
if($_GET['new']){
	$top = new TopContrllor();
	$top->new_entry();
}

//ログイン
if($_POST['login']){
	$html = 'top_login.htm';
}

$smarty = new Smarty();

$smarty->template_dir = dirname(__FILE__).'/templates';
$smarty->compile_dir = dirname(__FILE__).'/templates_c';

$smarty->assign('name','TOP');
$smarty->display($html);

?>