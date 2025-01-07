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


if(isset($_POST["secretKey"]) && isset($_FILES["selectedFileEmpPic"])){
	
	/*Required Files*/
	
	/*Required Files*/


	/*Query string*/
	$secretKey = $_POST["secretKey"];	
	$selectedFileEmpPic = $_FILES["selectedFileEmpPic"];	
	/*Query string*/


	/*Prep variables*/
	$vmcplatDbConnection = connectToDb("vmc_platform");
	$account_id = $_SESSION["account_id"];	
	/*Prep variables*/
	

	/*Prep response*/
	$validToken = null;
	$execution = null;
	$newEmpPicName = null;	
	
	$uploadNewEmployeePicture_Resp = new stdClass();	
	$uploadNewEmployeePicture_Resp->validAccess = true;
	$uploadNewEmployeePicture_Resp->vmcplatDbConnection = $vmcplatDbConnection;		
	$uploadNewEmployeePicture_Resp->validToken = $validToken;
	$uploadNewEmployeePicture_Resp->execution = $execution;	
	$uploadNewEmployeePicture_Resp->newEmpPicName = $newEmpPicName;
	/*Prep response*/


	/*Check connection*/	
	/**VMC Platform DB Connection*/
	if($vmcplatDbConnection->serverConnection != null){
		echo json_encode($uploadNewEmployeePicture_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}else if($vmcplatDbConnection->selectedPdoConn == null){
		echo json_encode($uploadNewEmployeePicture_Resp, JSON_NUMERIC_CHECK);

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
		$uploadNewEmployeePicture_Resp->validToken = $validToken;

		echo json_encode($uploadNewEmployeePicture_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;

	}else if($validateGlobalToken_Obj->counted === 0){

		$validToken = "secret key can't be found!";
		$uploadNewEmployeePicture_Resp->validToken = $validToken;

		echo json_encode($uploadNewEmployeePicture_Resp, JSON_NUMERIC_CHECK);

		/*_Disconnect*/
		$vmcplatDbConnection = null;
		/*_Disconnect*/

		return;
	}
	/*Validate secret key*/


	if($validToken === null){	
		
		/*Upload File*/
		$folderName = "../../Employee Pictures/";

		/*Generate Anti Cache*/
		$alphanumeric = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
		$shuffled_AlphaNum = str_shuffle($alphanumeric);
		$getHalfShuffled_Value = substr($shuffled_AlphaNum, 0, strlen($alphanumeric)/2);
		$uniqueIdentifier =  rand(1000,9999).$getHalfShuffled_Value.rand(1000,9999);
		/*Generate Anti Cache*/

		$selectedFileEmpPic_Basename = $folderName.basename($selectedFileEmpPic["name"]);

		$selectedFileEmpPic_Extension = pathinfo($selectedFileEmpPic_Basename, PATHINFO_EXTENSION);

		$selectedFileEmpPic_Name = $uniqueIdentifier.".".$selectedFileEmpPic_Extension;

		$execution = move_uploaded_file($selectedFileEmpPic["tmp_name"], $folderName.$selectedFileEmpPic_Name);
		/*Upload File*/


		/*Update Account Picture*/
		if($execution){
				
			/*_Prep query*/
			$uploadNewEmployeePicture_Query = "
				UPDATE accounts_tab 
				SET account_picture = :selectedFileEmpPic_Name 
				WHERE account_id = :account_id;
			";				
			/*_Prep query*/

			/*_Execute query*/
			$uploadNewEmployeePicture_QueryObj = $vmcplatDbConnection->selectedPdoConn->prepare($uploadNewEmployeePicture_Query);
			$uploadNewEmployeePicture_QueryObj->bindValue(':selectedFileEmpPic_Name', $selectedFileEmpPic_Name, PDO::PARAM_STR);
			$uploadNewEmployeePicture_QueryObj->bindValue(':account_id', $account_id, PDO::PARAM_STR);		
			$execution = $uploadNewEmployeePicture_QueryObj->execute();		
			/*_Execute query*/

			/*_Fetching*/		
			if($execution){
				$newEmpPicName = $_SESSION["account_picture"] = $selectedFileEmpPic_Name;
			}		
			/*_Fetching*/
		}
		/*Update Account Picture*/						
	}
	

	/*Disconnect*/
	$vmcplatDbConnection = null;
	/*Disconnect*/


	/*Return response*/
	$uploadNewEmployeePicture_Resp->execution = $execution;
	$uploadNewEmployeePicture_Resp->newEmpPicName = $newEmpPicName;

	echo json_encode($uploadNewEmployeePicture_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/

}else{

	/*Return response*/
	$uploadNewEmployeePicture_Resp = new stdClass();
	$uploadNewEmployeePicture_Resp->validAccess = false;

	echo json_encode($uploadNewEmployeePicture_Resp, JSON_NUMERIC_CHECK);
	/*Return response*/
}
?>