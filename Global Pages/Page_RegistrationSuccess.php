<?php 
/*Dependency PHP Codes*/
declare(strict_types=1);
date_default_timezone_set('Asia/Manila');
session_start();
$currentDateTime = date("Y-m-d H:i:s", time());
$logoutPath = "../Global PHP/DestroySessions.php";
/*Dependency PHP Codes*/


if(isset($_SESSION["account_id"]) && isset($_SESSION["account_fname"]) && isset($_SESSION["account_mname"]) && isset($_SESSION["account_lname"]) && isset($_SESSION["account_suffix"]) && isset($_SESSION["account_identifier"]) && isset($_SESSION["account_status"]) && isset($_SESSION["account_password"]) && isset($_SESSION["account_section"]) && isset($_SESSION["account_picture"]) && isset($_SESSION["correctPassword"])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>App Account Registered</title>
		<link rel="stylesheet" type="text/css" href="../Module Registration/Styles/Page_RegistrationSuccess.css">
		<link rel="shortcut icon" href="../src/vmclogo.png">		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
	</head>
	<body>
		<div id="mainContainer-Id">
			<div id="iconContainer-Id">
				<div id="iconWrapper">
					<img src="../src/successcheck.png" id="checkIcon-Id">
				</div>
			</div>					
			<div id="messageTxt">Contact IMISS Staff to activate your account!</div>										
			<div id="systemMessTxt">We've received your request for new account and we'll be in touch!</div>					
			<div id="buttonWrapper">
				<a href="../Module Login/Pages/Page_Login.php" id="returnBtnLinkFlex">
					<div id="returnBtnTxtItem">Return to other web apps</div>
					<div id="returnBtnImageItem">
						<img src="../src/logouticon white.png">
					</div>
				</a>
			</div>					
		</div>
	</body>
</html>

<?php
}
else{
	header("location:".$logoutPath);
}
?>