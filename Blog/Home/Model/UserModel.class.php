<?php
use Think\Model;
class UserModel extends Model{
	public function createTable($tableName){
		$sql = "CREATE TABLE".$table."(
    		`title` 	VARCHAR(30) NOT NULL UNIQUE KEY,
    		`content` 	TEXT NULL,
    		`timeline` 	INT NOT NULL,
    		`from`		VARCHAR(30) NULL,
    		`id`		INT PRIMARY KEY AUTO_INCREMENT)";
		return M()->execute($sql);
	}
}
