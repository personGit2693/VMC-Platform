<?php 
/*Dependency PHP Codes Section*/
declare(strict_types=1);
session_start();
date_default_timezone_set('Asia/Manila');
/*Dependency PHP Codes Section*/


/*Global Required Files*/
require_once "../../Global PHP/Global_Connection.php";
require_once "../../Global PHP/CheckGlobalToken_Class.php";
/*Global Required Files*/


if(isset($_POST["token"]) && isset($_SESSION["tokenSession"]) && isset($_SESSION["acctAgentUnitSession"]) && isset($_SESSION["empIdSession"]) && isset($_SESSION["accIdentSession"]) && isset($_SESSION["sectIdSession"]) && isset($_SESSION["accTypeSession"]) && isset($_SESSION["acctActiveSession"])){
	/*Connection Section*/
	require_once "../../Root/Connection.php";
	/*Connection Section*/


	/*Prep return result array Section*/
	$dates_Obj = new stdClass();
	$dates_Obj->minDate = "";
	$dates_Obj->maxDate = "";
	$execution = null;

	$getMinMaxDates_Resp = new stdClass();	
	$getMinMaxDates_Resp->validAccess = true;
	$getMinMaxDates_Resp->logoutPagePath = $logoutPagePath;
	$getMinMaxDates_Resp->serverConnection = $serverConnection;		
	$getMinMaxDates_Resp->dates_Obj = $dates_Obj;	
	$getMinMaxDates_Resp->execution = $execution;	
	/*Prep return result array Section*/


	/*Prep variables Section*/
	$agentaccId = $_SESSION["empIdSession"];
	$agentaccUnitId = $_SESSION["acctAgentUnitSession"];
	/*Prep variables Section*/


	/*String query*/
	$filterStatus = intval($_POST["filterStatus"]);
	/*String query*/


	/*Check connection lost*/
	if($serverConnection != null){
		echo json_encode($getMinMaxDates_Resp);
		return;
	}
	/*Check connection lost*/
	

	/*Get min and max request date*/
	/*_Prep query*/
	$getMinMaxDates_Query = "SELECT IFNULL(CONVERT(MIN(request_tab.request_date), DATE), '') AS 'fromDate',  
	IFNULL(CONVERT(MAX(request_tab.request_date), DATE), '') AS 'toDate' 
	FROM request_tab 
	INNER JOIN category_tab 
	ON request_tab.category_id = category_tab.category_id 
	WHERE request_tab.status_id = :filterStatus 			
	AND category_tab.agentunit_id = :agentaccUnitId;
	";
	/*_Prep query*/

	/*_Execute query*/
	$getMinMaxDates_QueryObj = $servrequest_conn->prepare($getMinMaxDates_Query);		
	$getMinMaxDates_QueryObj->bindValue(':filterStatus', intval($filterStatus), PDO::PARAM_INT);
	$getMinMaxDates_QueryObj->bindValue(':agentaccUnitId', intval($agentaccUnitId), PDO::PARAM_INT); 				
	$execution = $getMinMaxDates_QueryObj->execute();		
	/*_Execute query*/

	/*_Fetching*/
	if($execution){
		if($minMaxDate_Assoc = $getMinMaxDates_QueryObj->fetch(PDO::FETCH_ASSOC)){
			$dates_Obj->minDate = $minMaxDate_Assoc["fromDate"];
			$dates_Obj->maxDate = $minMaxDate_Assoc["toDate"];				
		}			
	}
	/*_Fetching*/
	/*Get min and max request date*/		


	/*Return response Section*/
	$getMinMaxDates_Resp->execution = $execution;		
	$getMinMaxDates_Resp->dates_Obj = $dates_Obj;

	echo json_encode($getMinMaxDates_Resp);
	/*Return response Section*/
}else if(!isset($_POST["token"]) || !isset($_SESSION["tokenSession"]) || !isset($_SESSION["acctAgentUnitSession"]) || !isset($_SESSION["empIdSession"]) || !isset($_SESSION["accIdentSession"]) || !isset($_SESSION["sectIdSession"]) || !isset($_SESSION["accTypeSession"]) || !isset($_SESSION["acctActiveSession"])){	
	/*Return response Section*/
	if(!isset($_SERVER["HTTP_REFERER"])){
		header("location:".$logoutPagePath);
	}else if(isset($_SERVER["HTTP_REFERER"])){

		$getMinMaxDates_Resp = new stdClass();
		$getMinMaxDates_Resp->validAccess = false;		

		echo json_encode($getMinMaxDates_Resp);
	}	
	/*Return response Section*/
}
?>