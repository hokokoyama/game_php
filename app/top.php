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

require_once 'Common.class.php'; 
require_once '../smarty-3.1.23/libs/Smarty.class.php';
ini_set( 'display_errors', 1 );

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

Common::pp($test);
Common::gotoTemplate('TOP', $html);

?>