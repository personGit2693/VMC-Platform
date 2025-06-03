<?php 
function GetAllAccessLevels(object $selectedPdoConn){
	
	/*Prep return*/
	$getAllAccessLevels_Resp = new stdClass();
	$getAllAccessLevels_Resp->accesslevels = array();	
	$getAllAccessLevels_Resp->execution = null;

	$accesslevels = array();
	$execution = null;
	/*Prep return*/


	/*Prep variables*/
	
	/*Prep variables*/


	/*Get All Acceess Levels*/
	/**Prep query*/
	$getAllAccessLevels_Query = "SELECT * FROM accesslevels_tab;";
	/**Prep query*/

	/**Execute query*/
	$getAllAccessLevels_QueryObj = $selectedPdoConn->prepare($getAllAccessLevels_Query);	
	$execution = $getAllAccessLevels_QueryObj->execute();
	/**Execute query*/

	/**Fetch query*/
	if($execution){

		while($allAccessLevels_Assoc = $getAllAccessLevels_QueryObj->fetch(PDO::FETCH_ASSOC)){
			$accesslevels[] = $allAccessLevels_Assoc;
		}
	}
	/**Fetch query*/
	/*Get All Acceess Levels*/


	/*Return response*/
	$getAllAccessLevels_Resp->accesslevels = $accesslevels;
	$getAllAccessLevels_Resp->execution = $execution;

	return $getAllAccessLevels_Resp;
	/*Return response*/
}
?>