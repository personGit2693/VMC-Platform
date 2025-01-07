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
	<title>Account Settings</title>	
	<link rel="stylesheet" type="text/css" href="../Styles/Page_AccountSettings.css">
	<link rel="shortcut icon" href="../../src/vmclogo.png">
</head>
<body>
	<div class="rolayout_RoClass"> 
		<div class="sidemecha_RoClass lightMode">
			<div class="sidemechaCon_RoClass">
				<!--Navigation Logo-->
				<div id="navLogoWrap">
					<img src="../../src/vmclogo.png" />
					<span class="lightMode">VMC WAC</span>
				</div>
				<!--Navigation Logo-->

				<a href="../../index.php" class="mainNavMenu_RoClass lightMode">					
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/homeiconblack.png'); --activeMainNavMenuIcon:url('../../src/homeiconblack.png')"></div>
					<span class="generalNavMenuText_RoClass">Home</span>
				</a>

				<a href="../../Module User Management/Pages/Page_ManageUser.php" class="mainNavMenu_RoClass lightMode">					
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/user account management icon.png'); --activeMainNavMenuIcon:url('../../src/user account management icon.png')"></div>
					<span class="generalNavMenuText_RoClass">Manage User Accounts</span>
				</a>

				<a href="" class="activeMainNavMenu_RoClass lightMode">					
					<div class="activeMainNavMenuIconWrap_RoClass" style="--activeMainNavMenuIcon:url('../../src/gear_black.png')"></div>
					<span class="generalNavMenuText_RoClass">Settings</span>
				</a>

				<a href="../../Global PHP/DestroySessions.php" class="mainNavMenu_RoClass lightMode">					
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/logouticon black.png'); --activeMainNavMenuIcon:url('../../src/logouticon black.png')"></div>
					<span class="generalNavMenuText_RoClass">Logout</span>
				</a>
			</div>
		</div>
		<div class="mainmecha_RoClass lightMode">
			<div class="mainmechaCon_RoClass layoutOneHead_RoClass lightMode">
				<div class="burger_RoClass"><img class="burgerIcon_RoClass"></div>			
				
				<div class="projTitleAndUserLogin_RoClass">
					<div class="projTitleTxt_RoClass">VMC Web Applications</div>
					<div class="userLogin_RoClass" id="userLoginDetailsWrap">
						<!--Component
						<div class="userLoginIconWrap_RoClass"><img src="../../src/actionofficericon.png"/></div>
						<div class="userLoginDetails_RoClass">Rogelio Cruz</div>
						-->
					</div>
				</div>
			</div>


			<!--Path Guide-->
			<div class="mainmechaCon_RoClass pathGuideWrap">
				<div class="mainmechaCon_RoClass pathName">Home</div>
				<div class="mainmechaCon_RoClass pathArrow"></div>
				<div class="mainmechaCon_RoClass pathName">Settings</div>
			</div>
			<!--Path Guide-->


			<!--Page Big Title-->
			<div class="mainmechaCon_RoClass pageBigTitle">Settings Module</div>
			<!--Page Big Title-->


			<!--Page Account Settings Main Feature-->
			<div class="mainmechaCon_RoClass featureWrap autoReponsiveSection" id="accountSettingsWrap">

				<!--Profile Picture and Change Button-->
				<div class="mainmechaCon_RoClass" id="picAndbuttonWrap">
					<div class="mainmechaCon_RoClass">
						<label for="fileEmpPic" id="profilePicLabelWrap">
							<img id="profilePic-id" />
						</label>
					</div>
					<div class="mainmechaCon_RoClass" id="changeProfilePicBtn">						
						<label for="fileEmpPic"><b>Change Profile Picture</b></label>
						<input type="file" id="fileEmpPic" style="display:none;" accept="image/*" onchange="controller_InputFile_ChangeProfilePic(this)">
						<button id="saveNewPictureBtn" class="normButton_RoClass" onclick="controller_Btn_SaveNewEmployeePicture(this)">Save Picture</button>
					</div>
				</div>
				<!--Profile Picture and Change Button-->


				<!--Login Credentials Reset-->
				<div class="mainmechaCon_RoClass" id="loginCredentialsResetWrap">
					<div id="settingsTitle"><b>Change Password</b></div>

					<div class="cusInputs_RoClass">					
						<input type="password" onkeyup="controller_InputPassword_AssignOldPassword(this)" id="oldInputPassword" onfocusout="lowlightInWrap(this, 'black')" onfocus="highlightInWrap(this, '#FAB142')" required>
						<div class="placeholdme_RoClass">Current Password</div>
						<button class="iconBtn_RoClass" onclick="controller_Btn_TogglePasswordVisibility('oldInputPassword', this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png') "></button>
					</div>

					<div class="cusInputs_RoClass">					
						<input type="password" onkeyup="controller_InputPassword_AssignNewPassword(this)" id="newInputPassword" onfocusout="lowlightInWrap(this, 'black')" onfocus="highlightInWrap(this, '#FAB142')" required>
						<div class="placeholdme_RoClass">New Password</div>
						<button class="iconBtn_RoClass" onclick="controller_Btn_TogglePasswordVisibility('newInputPassword', this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png') "></button>
					</div>

					<div class="cusInputs_RoClass">					
						<input type="password" onkeyup="controller_InputPassword_AssignCNewPassword(this)" id="cNewInputPassword" onfocusout="lowlightInWrap(this, 'black')" onfocus="highlightInWrap(this, '#FAB142')" required>
						<div class="placeholdme_RoClass">Confirm New Password</div>
						<button class="iconBtn_RoClass" onclick="controller_Btn_TogglePasswordVisibility('cNewInputPassword', this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png') "></button>
					</div>

					<button class="normButton_RoClass" onclick="controller_Btn_UpdatePassword(this)">Update Password</button>					
				</div>
				<!--Login Credentials Reset-->
			</div>
			<!--Page Manage User Main Feature-->
			
			<hr class="linethis_RoClass">
			<div class="footerWrap_RoClass lightMode">
				<span class="footerTxt_RoClass">&copy; Valenzuela Medical Center</span>
			</div>
		</div> 
	</div>


	<!--JS Script-->
	<!---Dependecies-->
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeLayOneNavScript.js"></script>
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeScript.js"></script>
	<!---Dependecies-->

	<!---Controllers-->
	<script type="module" src="../Client Side/Controller_InputFile_ChangeProfilePic.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_SaveNewEmployeePicture.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_TogglePasswordVisibility.js"></script>
	<script type="module" src="../Client Side/Controller_InputPassword_AssignOldPassword.js"></script>
	<script type="module" src="../Client Side/Controller_InputPassword_AssignNewPassword.js"></script>
	<script type="module" src="../Client Side/Controller_InputPassword_AssignCNewPassword.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_UpdatePassword.js"></script>
	<!---Controllers-->

	<!---Executor-->
	<script type="module" src="../Client Side/Executor_Page_AccountSettings.js"></script>
	<!---Executor-->		
	<!--JS Script-->
</body>
</html>
<?php
}else{
	header("location:".$logoutPath);
}
?>