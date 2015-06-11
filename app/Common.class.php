<?php

class Common
{
	public static function pp (){
		$file_name = '../log/file.log';

		touch($file_name);
	}
}
?>