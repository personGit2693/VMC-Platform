<?php

function connectToDb(string $connectionName){

	/*Prep Response*/
	$connectToDb_Obj = new stdClass();
	$connectToDb_Obj->serverConnection = null;
	$connectToDb_Obj->selectedPdoConn = null;

	$selectedPdoConn = null;
	$serverConnection = null;
	/*Prep Response*/

	try{

		/*Connect to DB*/
		if($connectionName === "vmc_csat"){

			/*Connect to VMC CSAT DB*/
			$connString = "mysql:host=192.168.15.15;dbname=vmc_csat;";
			$serverUsername = "root";
			$serverPassword = "test";		

			$selectedPdoConn = new PDO($connString, $serverUsername, $serverPassword);		
			/*Connect to VMC CSAT DB*/

		}else if($connectionName === "MMSdb"){
			
			/*Connect to MMS DB*/
			$connString = "sqlsrv:Server=192.168.12.19;Database=MMSdb;";
			$serverUsername = "sa";
			$serverPassword = "@dm1n1m$";		

			$selectedPdoConn = new PDO($connString, $serverUsername, $serverPassword);		
			/*Connect to MMS DB*/

		}else if($connectionName === "service_request"){

			/*Connect to ESRS DB*/
			$connString = "mysql:host=192.168.14.83;dbname=service_request;";
			$serverUsername = "root";
			$serverPassword = "test";		

			$selectedPdoConn = new PDO($connString, $serverUsername, $serverPassword);		
			/*Connect to ESRS DB*/

		}else if($connectionName === "doctracking"){

			/*Connect to EDTS DB*/
			$connString = "mysql:host=192.168.15.1;dbname=doctracking;";
			$serverUsername = "root";
			$serverPassword = "some_pass";		

			$selectedPdoConn = new PDO($connString, $serverUsername, $serverPassword);		
			/*Connect to EDTS DB*/
		}
		/*Connect to DB*/


		/*Return*/
		$connectToDb_Obj->selectedPdoConn = $selectedPdoConn;

		return $connectToDb_Obj;
		/*Return*/
	}catch(Exception $projectName_Conn_Ex){

		$serverConnection = $projectName_Conn_Ex->getMessage();


		/*Return*/
		$connectToDb_Obj->serverConnection = $serverConnection;

		return $connectToDb_Obj;
		/*Return*/		
	}	
}
?>