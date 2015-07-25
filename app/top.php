<?php
require_once '../smarty-3.1.23/libs/Smarty.class.php';
require_once 'Common.class.php';
require_once 'models/db/UserBasicData.class.php';

class Top{
	/**
	 * トップ画面
	 */
	public function topView(){

	}
	/**
	 * 新規登録
	 */
	public function newEntry(){
		$data = array();
		echo __FILE__;
		Common::gotoTemplate($data, 'newEntry.htm');
	}

	public function entryData(){
		$data = array();
		
		Common::gotoTemplate($data, 'entryData.htm');	
	}
}

?>

<?php 
ini_set( 'display_errors', 1 );

$test = 1;
$html = 'top.htm';

//DB接続
try{
	$pdo = new PDO('mysql:host=localhost;dbname=hokoyama','root','');
}catch(PDOException $e){
	Common::pp($test);	
}

Common::pp($test);
//Common::gotoTemplate('TOP', $html);

?>