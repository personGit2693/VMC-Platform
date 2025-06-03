<?php 
function GetAccountAccess(object $selectedPdoConn, string $account_id){
	
	/*Prep return*/
	$getAccountAccess_Resp = new stdClass();
	$getAccountAccess_Resp->accountAccess = array();	
	$getAccountAccess_Resp->execution = null;

	$accountAccess = array();
	$execution = null;
	/*Prep return*/


	/*Prep variables*/
	
	/*Prep variables*/


	/*Get Account Access*/
	/**Prep query*/
	$getAccountAccess_Query = "SELECT * FROM accessleveltags_tab WHERE account_id = :account_id;";
	/**Prep query*/

	/**Execute query*/
	$getAccountAccess_QueryObj = $selectedPdoConn->prepare($getAccountAccess_Query);
	$getAccountAccess_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);	
	$execution = $getAccountAccess_QueryObj->execute();
	/**Execute query*/

	/**Fetch query*/
	if($execution){

		while($accountAccess_Assoc = $getAccountAccess_QueryObj->fetch(PDO::FETCH_ASSOC)){
			$accountAccess[] = $accountAccess_Assoc["accesslevel_id"];
		}
	}
	/**Fetch query*/
	/*Get Account Access*/


	/*Return response*/
	$getAccountAccess_Resp->accountAccess = $accountAccess;
	$getAccountAccess_Resp->execution = $execution;

	return $getAccountAccess_Resp;
	/*Return response*/
}
?>