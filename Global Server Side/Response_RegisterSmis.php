<?php 
/*Dependency PHP Codes*/
declare(strict_types=1);
date_default_timezone_set('Asia/Manila');
session_start();
$currentDateTime = date("Y-m-d H:i:s", time());
/*Dependency PHP Codes*/


/*Global Required Files*/
require_once "./../Global PHP/Connection.php";
require_once "./../Global PHP/CheckAppKey.php";
/*Global Required Files*/


if(isset($_POST["secretKey"]) && isset($_POST["account_section"]) && isset($_POST["account_id"]) && isset($_POST["account_fname"]) && isset($_POST["account_mname"]) && isset($_POST["account_lname"]) && isset($_POST["account_suffix"]) && isset($_POST["account_password"]) && isset($_POST["account_identifier"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];
	$account_id = trim($_POST["account_id"]);
	$account_fname = trim($_POST["account_fname"]);
	$account_mname = trim($_POST["account_mname"]);
	$account_lname = trim($_POST["account_lname"]);
	$account_suffix = $_POST["account_suffix"];			
	$account_password = $_POST["account_password"];
	$correctPassword = $_SESSION["correctPassword"];
	$account_identifier = $_POST["account_identifier"];
	$account_section = $_POST["account_section"];
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");	
	$smisDbConnection = connectToDb("MMSdb");	
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;
	$smisAccountDetailsRegistered = null;
	$smisAccountCredentialsRegistered = null;
	$smisAccountRequested = null;
	
	$registerSmis_Resp = new stdClass();	
	$registerSmis_Resp->validAccess = true;
	$registerSmis_Resp->vmcplatDbConnection = $vmcplatDbConnection;		
	$registerSmis_Resp->smisDbConnection = $smisDbConnection;	
	$registerSmis_Resp->validToken = $validToken;
	$registerSmis_Resp->execution = $execution;
	$registerSmis_Resp->smisAccountDetailsRegistered = $smisAccountDetailsRegistered;
	$registerSmis_Resp->smisAccountCredentialsRegistered = $smisAccountCredentialsRegistered;
	$registerSmis_Resp->smisAccountRequested = $smisAccountRequested;
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$smisDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$smisDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/**VMC Platform DB Connection*/


	/**SMIS DB Connection*/
	if($smisDbConnection->serverConnection != null){
		echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$smisDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($smisDbConnection->selectedPdoConn == null){
		echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$smisDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/**SMIS DB Connection*/
	/*Check connection*/


	/*Validate secret key*/
	$validateGlobalToken_Obj = checkAppKey($vmcplatDbConnection->selectedPdoConn, $secretKey);

	if($validateGlobalToken_Obj->execution !== true){

		$validToken = "Validating secret key has execution problem!";
		$registerSmis_Resp->validToken = $validToken;

		echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$smisDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$registerSmis_Resp->validToken = $validToken;

		echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		$smisDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){	
		
		/*Check username exist*/
		/*_Prep query*/
		$checkRegistration_Query = "SELECT empNo 
		FROM table_user 
		WHERE empNo = :account_id";
		/*_Prep query*/

		/*_Execute query*/
		$checkRegistration_QueryObj = $smisDbConnection->selectedPdoConn->prepare($checkRegistration_Query);
		$checkRegistration_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);
		$execution = $checkRegistration_QueryObj->execute();
		/*_Execute query*/

		/*_Fetching*/
		if($execution){
			if($checkRegistration_QueryObj->rowCount() !== 0){
				$smisAccountRequested = true;				

				/*Return response*/
				$registerSmis_Resp->execution = $execution;
				$registerSmis_Resp->smisAccountDetailsRegistered = $smisAccountDetailsRegistered;
				$registerSmis_Resp->smisAccountCredentialsRegistered = $smisAccountCredentialsRegistered;
				$registerSmis_Resp->smisAccountRequested = $smisAccountRequested;

				echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);
				/*Return response*/


				/*Disconnect*/
				$vmcplatDbConnection = null;
				$smisDbConnection = null;
				/*Disconnect*/

				return;
			}else if($checkRegistration_QueryObj->rowCount() === 0){
				$smisAccountRequested = false;
			}
		}else{
			/*Return response*/
			$registerSmis_Resp->execution = $execution;
			$registerSmis_Resp->smisAccountDetailsRegistered = $smisAccountDetailsRegistered;
			$registerSmis_Resp->smisAccountCredentialsRegistered = $smisAccountCredentialsRegistered;
			$registerSmis_Resp->smisAccountRequested = $smisAccountRequested;

			echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);
			/*Return response*/

			/*Disconnect*/
			$vmcplatDbConnection = null;
			$smisDbConnection = null;
			/*Disconnect*/

			return;
			/*Return response*/
		}
		/*_Fetching*/
		/*Check username exist*/


		/*Register SMIS new account details*/
		/*_Prep query*/
		$registerSmisDetails_Query = "
			INSERT INTO table_employee(
				emp_id,
				last_name,
				first_name,
				middle_name,
				name_ext,
				office_name				
			)
        	VALUES(
        		:account_id,
        		:account_lname,
        		:account_fname,
        		:account_mname,
        		:account_suffix,
        		:account_section
        	);
		";		
		/*_Prep query*/

		/*_Execute query*/
		$registerSmisDetails_QueryObj = $smisDbConnection->selectedPdoConn->prepare($registerSmisDetails_Query);
		$registerSmisDetails_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);
		$registerSmisDetails_QueryObj->bindValue(':account_lname', $account_lname, PDO::PARAM_STR);		
		$registerSmisDetails_QueryObj->bindValue(':account_fname', $account_fname, PDO::PARAM_STR);		
		$registerSmisDetails_QueryObj->bindValue(':account_mname', $account_mname, PDO::PARAM_STR);
		$registerSmisDetails_QueryObj->bindValue(':account_suffix', $account_suffix, PDO::PARAM_STR);						
		$registerSmisDetails_QueryObj->bindValue(':account_section', $account_section, PDO::PARAM_STR);	
		$execution = $registerSmisDetails_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){

			if($registerSmisDetails_QueryObj->rowCount() != 0){	
				$smisAccountDetailsRegistered = true;				
			}
		}else{
			/*Return response*/
			$registerSmis_Resp->execution = $execution;
			$registerSmis_Resp->smisAccountDetailsRegistered = $smisAccountDetailsRegistered;
			$registerSmis_Resp->smisAccountCredentialsRegistered = $smisAccountCredentialsRegistered;
			$registerSmis_Resp->smisAccountRequested = $smisAccountRequested;

			echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);
			/*Return response*/

			/*Disconnect*/
			$vmcplatDbConnection = null;
			$smisDbConnection = null;
			/*Disconnect*/

			return;
			/*Return response*/
		}		
		/*_Fetching*/
		/*Register SMIS new account details*/


		/*Register SMIS new account credentials*/
		/*_Prep query*/
		 $registerSmisCredentials_QueryObj = $smisDbConnection->selectedPdoConn->prepare("EXEC USER_REGISTRATION ?,?,?");
		/*_Prep query*/

		/*_Execute query*/
		$registerSmisCredentials_QueryObj->bindParam(1, $account_id); 
		$registerSmisCredentials_QueryObj->bindParam(2, $account_id);
		$registerSmisCredentials_QueryObj->bindParam(3, $correctPassword);				
		$execution = $registerSmisCredentials_QueryObj->execute();		
		/*_Execute query*/

		/*_Fetching*/		
		if($execution){			

			$smisAccountCredentialsRegistered = true;
		}else{
			/*Return response*/
			$registerSmis_Resp->execution = $execution;
			$registerSmis_Resp->smisAccountDetailsRegistered = $smisAccountDetailsRegistered;
			$registerSmis_Resp->smisAccountCredentialsRegistered = $smisAccountCredentialsRegistered;
			$registerSmis_Resp->smisAccountRequested = $smisAccountRequested;

			echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);
			/*Return response*/

			/*Disconnect*/
			$vmcplatDbConnection = null;
			$smisDbConnection = null;
			/*Disconnect*/

			return;
			/*Return response*/
		}		
		/*_Fetching*/
		/*Register SMIS new account credentials*/
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;
	$smisDbConnection = null;
	/*Disconnect*/


	/*Return response*/
	$registerSmis_Resp->execution = $execution;
	$registerSmis_Resp->smisAccountDetailsRegistered = $smisAccountDetailsRegistered;
	$registerSmis_Resp->smisAccountCredentialsRegistered = $smisAccountCredentialsRegistered;
	$registerSmis_Resp->smisAccountRequested = $smisAccountRequested;

	echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else{

	/*Return response*/
	$registerSmis_Resp = new stdClass();
	$registerSmis_Resp->validAccess = false;

	echo json_encode($registerSmis_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/
}
?>