<?php 
/*Dependency PHP Codes*/
declare(strict_types=1);
date_default_timezone_set('Asia/Manila');
session_start();
$currentDateTime = date("Y-m-d H:i:s", time());
$logoutPath = "./Global PHP/DestroySessions.php";
/*Dependency PHP Codes*/


if(isset($_SESSION["account_id"]) && isset($_SESSION["account_fname"]) && isset($_SESSION["account_mname"]) && isset($_SESSION["account_lname"]) && isset($_SESSION["account_suffix"]) && isset($_SESSION["account_identifier"]) && isset($_SESSION["account_status"]) && isset($_SESSION["account_password"]) && isset($_SESSION["account_section"]) && isset($_SESSION["account_picture"]) && isset($_SESSION["correctPassword"])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VMC Platform</title>	
	<link rel="stylesheet" type="text/css" href="./Module Index/Styles/index.css">
	<link rel="shortcut icon" href="./src/vmclogo.png">
</head>
<body>
	<div class="rolayout_RoClass"> 
		<div class="sidemecha_RoClass lightMode">
			<div class="sidemechaCon_RoClass">
				<!--Navigation Logo-->
				<div id="navLogoWrap">
					<img src="./src/vmclogo.png" />
					<span class="lightMode">VMC WAC</span>
				</div>
				<!--Navigation Logo-->

				<a href="" class="activeMainNavMenu_RoClass lightMode">					
					<div class="activeMainNavMenuIconWrap_RoClass" style="--activeMainNavMenuIcon:url('../../src/homeiconblack.png')"></div>
					<span class="generalNavMenuText_RoClass">Home</span>
				</a>

				<a href="./Module User Management/Pages/Page_ManageUser.php" class="mainNavMenu_RoClass lightMode">					
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/user account management icon.png'); --activeMainNavMenuIcon:url('../../src/user account management icon.png')"></div>
					<span class="generalNavMenuText_RoClass">Manage User Accounts</span>
				</a>

				<a href="./Module Settings/Pages/Page_AccountSettings.php" class="mainNavMenu_RoClass lightMode">					
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/gear_black.png'); --activeMainNavMenuIcon:url('../../src/gear_black.png')"></div>
					<span class="generalNavMenuText_RoClass">Settings</span>
				</a>

				<a href="./Global PHP/DestroySessions.php" class="mainNavMenu_RoClass lightMode">					
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
						<div class="userLoginIconWrap_RoClass"><img src="./src/actionofficericon.png"/></div>
						<div class="userLoginDetails_RoClass">Juan Dela Cruz</div>
						-->
					</div>
				</div>
			</div>

			<!--Greetings Area--> 
			<div class="mainmechaCon_RoClass autoReponsiveSection lightMode" id="greetingSection">
				<div class="mainmechaCon_RoClass" id="greetingWrap">
					<img id="greetingUserImage" src="./Employee Pictures/actionofficericon.png" />
						
					<div class="mainmechaCon_RoClass" id="greetingUserDetailsWrap">
						<!--
						<div class="mainmechaCon_RoClass lightMode" id="greetingUserFName">Hi! welcome back, Juan!</div>
						<div class="mainmechaCon_RoClass sub-textFColor" id="greetingUserEmpNo">Employee number 2024-1136</div>
						-->
					</div>
				</div>

				<div class="mainmechaCon_RoClass" id="greetingWebApps"></div>
			</div>
			<!--Greetings Area--> 


			<!--Banner-->				
			<div class="mainmechaCon_RoClass autoReponsiveSection" id="bannerWrap">
				<div class="mainmechaCon_RoClass" id="bannerDetailsWrap">
					<div class="mainmechaCon_RoClass" id="bannerDetailsMainTxt">Valenzuela Medical Center Web Applications Center</div>
					<div class="mainmechaCon_RoClass" id="bannerDetailsSubTxt">VMC Web apps are now accessible from any device with a web browser and can be updated centrally</div>
					<a class="link-Btn" href="" id="bannerBtnGoToApp">Download our Guidelines</a>
				</div>
			</div>
			<!--Banner-->


			<!--List of web applications-->
			<div class="mainmechaCon_RoClass autoReponsiveSection lightMode" id="webAppListSection">
				<div class="mainmechaCon_RoClass sectionsLabel lightMode"><span>List of Systems:</span> <input type="text" class="searchInput_RoClass lightMode" onkeyup="controller_InputText_GetApps(this)" placeholder="Search..." style="--inputSearchIcon: url('../../src/searchIcon.png')"/></div>
				<div class="mainmechaCon_RoClass" id="webAppList">
					<!--Components-->
				</div>
			</div>
			<!--List of web applications-->

			<hr class="linethis_RoClass">
			<div class="footerWrap_RoClass lightMode">
				<span class="footerTxt_RoClass">&copy; Valenzuela Medical Center</span>
			</div>
		</div> 
	</div>


	<!--JS Script-->
	<!---Dependecies-->
	<script type="text/javascript" src="./Rogrid/Scripts/RogridNodeLayOneNavScript_Index.js"></script>
	<!---Dependecies-->

	<!---Controllers-->
	<script type="module" src="./Global Client Side/Controller_Div_LoginToApp.js"></script>
	<script type="module" src="./Module Index/Client Side/Controller_InputText_GetApps.js"></script>
	<!---Controllers-->

	<!---Executor-->
	<script type="module" src="./Module Index/Client Side/Executor_index.js"></script>
	<!---Executor-->		
	<!--JS Script-->
</body>
</html>
<?php
}else{
	header("location:".$logoutPath);
}
?>