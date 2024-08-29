<?php 
function checkAppKey(object $selectedPdoConn, string $secretKey_Param){
	
	/*Prep return*/
	$counted = 0;
	$execution = null;

	$checkAppKey_Resp = new stdClass();
	$checkAppKey_Resp->counted = $counted;
	$checkAppKey_Resp->execution = $execution;	
	/*Prep return*/


	/*Prep variables*/
	
	/*Prep variables*/


	/*Check token on db*/
	/*_Prep query*/
	$checkAppKey_Query = "
		SELECT token_id 
		FROM tokens_tab 
		WHERE token_value = :secretKey_Param		
	";
	/*_Prep query*/

	/*_Execute query*/
	$checkAppKey_QueryObj = $selectedPdoConn->prepare($checkAppKey_Query);
	$checkAppKey_QueryObj->bindValue(':secretKey_Param', $secretKey_Param, PDO::PARAM_STR);	
	$execution = $checkAppKey_QueryObj->execute();
	/*_Execute query*/

	/*_Fetch query*/
	if($execution){
		$counted = $checkAppKey_QueryObj->rowCount();
	}
	/*_Fetch query*/
	/*Check token on db*/


	/*Return response*/
	$checkAppKey_Resp->counted = $counted;
	$checkAppKey_Resp->execution = $execution;

	return $checkAppKey_Resp;
	/*Return response*/
}
?>