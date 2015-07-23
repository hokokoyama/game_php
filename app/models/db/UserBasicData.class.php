<?php

class UserBasicData {
	public function InsertUserData(){
		//DB接続
		try{
			$pdo = new PDO('mysql:host=localhost;dbname=hokoyama','root','');
		}catch(PDOException $e){
			Common::pp('error');	
		}

		$sql = "
			INSERT INTO user_basic_data (
				user_id
				,pass
			) VALUES (
				2
				,'bbb'
			);
		";

		$stmt = $pdo->prepare($sql);
		$stmt->execute();
	}
}