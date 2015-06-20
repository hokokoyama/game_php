<?php

class Common
{
  public static function pp ($value){
  	//日付取得
  	$now = date('Ymd');
  	//ファイル出力先
    $file_name = "../log/".$now.".log";
    //if(!file_exsits($file_name)){
    	touch($file_name);
    //}

    //ファイル書き込み
    $fp = fopen($file_name, 'w');
    fwrite($fp, $value);
    fclose($fp);
  }
}
?>
