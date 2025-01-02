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

				<a href="../../Module Settings/Pages/Page_ManageUser.php" class="activeMainNavMenu_RoClass lightMode">					
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/user account management icon.png'); --activeMainNavMenuIcon:url('../../src/user account management icon.png')"></div>
					<span class="generalNavMenuText_RoClass">Manage User Accounts</span>
				</a>

				<a href="" class="mainNavMenu_RoClass lightMode">					
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
			<div class="mainmechaCon_RoClass featureWrap autoReponsiveSection">
				<!--Profile Picture and Change Button-->
				<div id="picAndbuttonwrap_id">
					<div id="imgWrapper_id"><label for="fileInput"><img id="profilePic-id" src="../../src/actionofficericon.png"></label></div>
					<div id="changeProfilePicBtn_id">
						<!--
						<button class="normButton_RoClass" type="button">
							Change Profile Picture 
						</button>
						-->
						<label for="fileInput">Change Profile Picture</label>
						<input type="file" id="fileInput" style="display:none;" accept="image/*" onchange="controller_InputFile_ChangeProfilePic(this)">
					</div>
				</div>
				<!--Profile Picture and Change Button-->


				<!--Login Credentials Reset-->
				<div class="changeCredentialsWrap_class">
					<div id="SettingsTitle_id">Change Password</div>
					<div class="inputBoxesWrap_class">
						
						<div class="passwordAndCheckPasswordWrap_Class">
							<div class="cusInputs_RoClass">					
								<input id="inputPassword1" type="password" onfocusout="lowlightInWrap(this)" onfocus="highlightInWrap(this)" required>
								<div class="placeholdme_RoClass">Old Password</div>	
							</div>
							<!--
							<div class="checkPasswordBtn_Class">
								<button class="iconBtn_RoClass" id="togglePasswordBtn" onclick="controller_Btn_TogglePasswordVisibility('inputPassword1', this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png')"></button>
							</div>
							-->
						</div>

						<div class="passwordAndCheckPasswordWrap_Class">
							<div class="cusInputs_RoClass">					
								<input id="inputPassword2" type="password" onfocusout="lowlightInWrap(this)" onfocus="highlightInWrap(this)" required>
								<div class="placeholdme_RoClass">New Password</div>	
							</div>
							<!--
							<div class="checkPasswordBtn_Class">
								<button class="iconBtn_RoClass" id="togglePasswordBtn" onclick="controller_Btn_TogglePasswordVisibility('inputPassword2',this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png')"></button>
							</div>
							-->
						</div>

						<div class="passwordAndCheckPasswordWrap_Class">
							<div class="cusInputs_RoClass">					
								<input id="inputPassword3" type="password" onfocusout="lowlightInWrap(this,)" onfocus="highlightInWrap(this)" required>
								<div class="placeholdme_RoClass">Confirm New Password</div>	
							</div>
							<!--
							<div class="checkPasswordBtn_Class">
								<button class="iconBtn_RoClass" id="togglePasswordBtn" onclick="controller_Btn_TogglePasswordVisibility('inputPassword3', this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png')"></button>
							</div>
							-->
						</div>

						<!--Reset Button-->		
						<div>
							<div id="changeCredentials_id"><button class="normButton_RoClass">Update Password</button></div>
						</div>
						<!--Reset Button-->
					</div>
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
	<!--<script type="module" src="../Client Side/Controller_Div_ListMoreAccountsTr.js"></script>-->	
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