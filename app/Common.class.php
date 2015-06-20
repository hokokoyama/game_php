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
}
?>
