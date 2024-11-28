<?php
function getIdentifier(object $selectedPdoConn, string $empId){

	/*Prep Response*/
	$identifier = null;
	$identifierFound = 0;

	$getIdentifier_Obj = new stdClass();
	$getIdentifier_Obj->identifier = $identifier;
	$getIdentifier_Obj->identifierFound = $identifierFound;
	/*Prep Response*/

	
	/*Get Identifier*/
	/*_Prep query*/
	$getIdentifier_Query = "
		SELECT account_identifier 
		FROM accounts_tab
		WHERE account_id = :empId;
	";		
	/*_Prep query*/

	/*_Execute query*/
	$getIdentifier_QueryObj = $selectedPdoConn->prepare($getIdentifier_Query);
	$getIdentifier_QueryObj->bindValue(':empId', $empId, PDO::PARAM_STR);		

	$execution = $getIdentifier_QueryObj->execute();	
	/*_Execute query*/

	/*_Fetching*/
	if($execution){
		$identifierFound = $getIdentifier_QueryObj->rowCount();

		if($identifier_Assoc = $getIdentifier_QueryObj->fetch(PDO::FETCH_ASSOC)){
			$identifier = $identifier_Assoc["account_identifier"];			
		}
	}
	/*_Fetching*/
	/*Get Identifier*/


	/*Return*/
	$getIdentifier_Obj->identifier = $identifier;
	$getIdentifier_Obj->identifierFound = $identifierFound;

	return $getIdentifier_Obj;
	/*Return*/
		
}
?>