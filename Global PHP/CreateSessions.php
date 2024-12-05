<?php
function createSessions(array $accountDetails, string $correctPassword){

	$_SESSION["account_id"] = $accountDetails["account_id"];
	$_SESSION["account_fname"] = $accountDetails["account_fname"];
	$_SESSION["account_mname"] = $accountDetails["account_mname"];
	$_SESSION["account_lname"] = $accountDetails["account_lname"];
	$_SESSION["account_suffix"] = $accountDetails["account_suffix"];
	$_SESSION["account_password"] = $accountDetails["account_password"];
	$_SESSION["account_identifier"] = $accountDetails["account_identifier"];
	$_SESSION["account_status"] = $accountDetails["account_status"];
	$_SESSION["account_section"] = $accountDetails["account_section"];
	$_SESSION["account_picture"] = $accountDetails["account_picture"];
	$_SESSION["correctPassword"] = $correctPassword;
}
?>