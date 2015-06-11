<?php

class Common
{

	public function pp (){
		$file_name = 'file.txt';

		touch($file_name);
	}
}
?>