<?php

class Common
{
  //ログ出力
  public static function pp ($value){
  	//日付取得
  	$now = date('Ymd');
  	//ファイル出力先
    $file_name = "../log/".$now.".log";

    //ファイルの存在有無
    if(!file_exists($file_name)){
    	touch($file_name);
    }

    //ログ用の時刻
    $write_date = date('Y/m/d H:i:s');

    $content = $write_date . '  ' . $value; 

    //ファイル書き込み
    $fp = fopen($file_name, 'w');
    fwrite($fp, $content);
    fclose($fp);
  }

  /*
   *templateファイル呼び出し
   *@param $data - templateに渡す値
   *@param $name - 呼び出すテンプレート名
   */
  public static function gotoTemplate($data, $name){
  	//Smartyの準備
  	$smarty = new Smarty();

	$smarty->template_dir = dirname(__FILE__).'/templates';
	$smarty->compile_dir = dirname(__FILE__).'/templates_c';

	$smarty->assign('data',$data);
	$smarty->display($name);
  }
}
?>
