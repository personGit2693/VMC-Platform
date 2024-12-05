<?php 
/*Dependency PHP Codes*/
declare(strict_types=1);
date_default_timezone_set('Asia/Manila');
session_start();
$currentDateTime = date("Y-m-d H:i:s", time());
$logoutPath = "../../Global PHP/DestroySessions.php";
/*Dependency PHP Codes*/


if(isset($_SESSION["account_id"]) && isset($_SESSION["account_fname"]) && isset($_SESSION["account_mname"]) && isset($_SESSION["account_lname"]) && isset($_SESSION["account_suffix"]) && isset($_SESSION["account_identifier"]) && isset($_SESSION["account_status"]) && isset($_SESSION["account_password"]) && isset($_SESSION["account_section"]) && isset($_SESSION["account_picture"]) && isset($_SESSION["correctPassword"])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/Page_Access.css">
	<title>Access Page</title>
</head>
<body>
	<div class="access-box">
		<div class="lock-icon-container"><img src="../../src/lock-icon.webp"></div>
		<div class="permission-message">You need permission to access this application</div>
		<div class="access-invitation">Want in? Click the "Request Access" button below.</div>
		<div class="user-status">You are logged in as <b>myemail@gmail.com</b>.</div>

		<div class="textarea-container">
			<textarea class="message-input" rows="1" oninput="controller_Textarea_ResizeTextArea(this)" placeholder="Message (optional)"></textarea>
		</div>

		<button class="request-button" onclick="controller_Btn_RegisterEsrs(window)">Request Access</button>
	</div>

	<!--Footer-->
	<hr class="linethis_RoClass">
	<div class="footerWrap_RoClass" id="footerWrap_RoId"></div>
	<!--Footer-->

	<!--Javascripts-->
	
	<!--_Controllers-->
	<script type="module" src="../../Global Client Side/Controller_Textarea_ResizeTextArea.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_RegisterEsrs.js"></script>
	<!--_Controllers-->


	<!--_Executor-->
	<script type="module" src="../Client Side/Executor_Page_Access.js"></script>
	<script type="module" src="../../Global Client Side/Executor_Global.js"></script>
	<!--_Executor-->

	<!--Javascripts-->
</body>
</html>

<?php
}else{
	header("location:".$logoutPath);
}
?>