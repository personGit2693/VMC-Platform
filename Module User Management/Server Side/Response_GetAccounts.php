<?php 
/*Dependency PHP Codes*/
declare(strict_types=1);
date_default_timezone_set('Asia/Manila');
session_start();
$currentDateTime = date("Y-m-d H:i:s", time());
/*Dependency PHP Codes*/


/*Global Required Files*/
require_once "../../Global PHP/Connection.php";
require_once "../../Global PHP/CheckAppKey.php";
/*Global Required Files*/


if(isset($_POST["secretKey"]) && isset($_POST["startRowIndex"]) && isset($_POST["displayRowNum"]) && isset($_POST["sortAccountScending"]) && isset($_POST["sortAccountBy"]) && isset($_POST["searchAccount"]) && isset($_SESSION["account_id"]) && isset($_SESSION["account_fname"]) && isset($_SESSION["account_mname"]) && isset($_SESSION["account_lname"]) && isset($_SESSION["account_suffix"]) && isset($_SESSION["account_password"]) && isset($_SESSION["account_identifier"]) && isset($_SESSION["account_status"]) && isset($_SESSION["account_section"]) && isset($_SESSION["account_picture"]) && isset($_SESSION["correctPassword"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];	
	$searchAccount = $_POST["searchAccount"];	
	$sortAccountBy = $_POST["sortAccountBy"];
	$sortAccountScending = $_POST["sortAccountScending"];
	$startRowIndex = $_POST["startRowIndex"];
	$displayRowNum = $_POST["displayRowNum"];
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");	
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;
	$accounts = array();
	
	$getAccounts = new stdClass();	
	$getAccounts->validAccess = true;
	$getAccounts->vmcplatDbConnection = $vmcplatDbConnection;		
	$getAccounts->validToken = $validToken;
	$getAccounts->execution = $execution;
	$getAccounts->accounts = $accounts;	
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($getAccounts, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($getAccounts, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/**VMC Platform DB Connection*/
	/*Check connection*/


	/*Validate secret key*/
	$validateGlobalToken_Obj = checkAppKey($vmcplatDbConnection->selectedPdoConn, $secretKey);

	if($validateGlobalToken_Obj->execution !== true){

		$validToken = "Validating secret key has execution problem!";
		$getAccounts->validToken = $validToken;

		echo json_encode($getAccounts, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$getAccounts->validToken = $validToken;

		echo json_encode($getAccounts, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){	
				
		/*Get accounts details*/
		/*_Prep query*/
		$getAccountsDetails_Query = "
			SELECT accounts_tab.account_id AS 'account_id',
			accounts_tab.account_status AS 'account_status',
			accounts_tab.account_fname AS 'account_fname',
			accounts_tab.account_mname AS 'account_mname',
			accounts_tab.account_lname AS 'account_lname',
			accounts_tab.account_suffix AS 'account_suffix',
			accounts_tab.account_section AS 'account_section',
			accounts_tab.account_picture AS 'account_picture',
			accounts_tab.account_datetime AS 'account_datetime'
			FROM accounts_tab 
			INNER JOIN (
				SELECT account_id,
				CONCAT(
					account_fname,' ',
					account_mname,' ',
					account_lname,' ',
					account_suffix,' ',
					account_section,' ',
					account_picture,' ',
					account_datetime,' '
				) AS 'searchAccountColumn'
				FROM accounts_tab				 
			) AS searchAccount_tab 
			ON accounts_tab.account_id = searchAccount_tab.account_id 		
		";

		if(!empty($searchAccount)){
			$getAccountsDetails_Query .= "WHERE searchAccount_tab.searchAccountColumn LIKE :searchAccount";
		}

		$getAccountsDetails_Query .= "
			ORDER BY :sortAccountBy :sortAccountScending 
			LIMIT :startRowIndex, :displayRowNum;
		";		
		/*_Prep query*/

		/*_Execute query*/
		$getAccountsDetails_QueryObj = $vmcplatDbConnection->selectedPdoConn->prepare($getAccountsDetails_Query);
		$getAccountsDetails_QueryObj->bindValue(':sortAccountBy', $sortAccountBy, PDO::PARAM_STR);
		$getAccountsDetails_QueryObj->bindValue(':sortAccountScending', $sortAccountScending, PDO::PARAM_STR);
		$getAccountsDetails_QueryObj->bindValue(':startRowIndex', intval($startRowIndex), PDO::PARAM_INT);
		$getAccountsDetails_QueryObj->bindValue(':displayRowNum', intval($displayRowNum), PDO::PARAM_INT);

		if(!empty($searchAccount)){
			$getAccountsDetails_QueryObj->bindValue(':searchAccount', '%'.$searchAccount.'%', PDO::PARAM_STR);	
		}		

		$execution = $getAccountsDetails_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){

			while($accountsDetails_Assoc = $getAccountsDetails_QueryObj->fetch(PDO::FETCH_ASSOC)){
				$accounts[] = $accountsDetails_Assoc;
			}			
		}		
		/*_Fetching*/
		/*Get accounts details*/
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;	
	/*Disconnect*/


	/*Return response*/
	$getAccounts->execution = $execution;
	$getAccounts->accounts = $accounts;	

	echo json_encode($getAccounts, JSON_NUMERIC_CHECK);
	/*Return response*/

}else{

	/*Return response*/
	$getAccounts = new stdClass();
	$getAccounts->validAccess = false;

	echo json_encode($getAccounts, JSON_NUMERIC_CHECK);
	/*Return response*/
}
?>