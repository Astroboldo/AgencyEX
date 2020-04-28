<?php
		function conectar(){
			try{
			$pdo = new PDO("mysql:host=51.79.83.205;dbname=wwwagencyexclusi_exclusivesite", "wwwagencyexclusi_admin","Agency*9947*", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_PERSISTENT => true));
			}catch(PDOException $e){
				echo $e->getMessage(); 
			}
			return $pdo;
		}		
?>