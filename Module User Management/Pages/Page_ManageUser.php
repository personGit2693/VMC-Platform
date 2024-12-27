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
	<title>Manage User Accounts</title>	
	<link rel="stylesheet" type="text/css" href="../Styles/Page_ManageUser.css">
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

				<a href="" class="activeMainNavMenu_RoClass lightMode">					
					<div class="activeMainNavMenuIconWrap_RoClass" style="--activeMainNavMenuIcon:url('../../src/user account management icon.png')"></div>
					<span class="generalNavMenuText_RoClass">Manage User Accounts</span>
				</a>

				<a href="../../Module Settings/Pages/settings.php" class="mainNavMenu_RoClass lightMode">					
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/gear_black.png'); --activeMainNavMenuIcon:url('../../src/gear_black.png')"></div>
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
				<div class="mainmechaCon_RoClass pathName">Manage User Accounts</div>
			</div>
			<!--Path Guide-->


			<!--Page Big Title-->
			<div class="mainmechaCon_RoClass pageBigTitle">User Management Module</div>
			<!--Page Big Title-->


			<!--Page Manage User Main Feature-->
			<div class="mainmechaCon_RoClass" id="manageUserFeatureWrap">
				<div class="mainmechaCon_RoClass searchOnTableLabel">Search Accounts</div>
				<div class="mainmechaCon_RoClass searchOnTableInputWrap">
					<input type="text" class="searchInput_RoClass lightMode" onkeyup="controller_InputText_SearchAccounts(this)" placeholder="Type Account Details" style="--inputSearchIcon: url('../../src/searchIcon.png')">
				</div>

				<div class="mainmechaCon_RoClass tableWrap scrollWebkit" id="accountsTableWrap" onscroll="controller_Div_ListMoreAccountsTr(this)">
					<table>
						<thead>
							<tr>
								<th>Employee Number</th>
								<th>Employee Name</th>
								<th>Account Status</th>
								<th>Employee Location</th>
								<th>Date Created</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody id="accountsTableBody">
							<!--							
							<tr>
								<td data-label="Employee Number"><img src="../../src/actionofficericon.png"/>9999-2021</td>	
								<td data-label="Employee Name">Test Test</td>
								<td data-label="Account Status">Active</td>	
								<td data-label="Account Status">Budget Office (BUD)</td>	
								<td data-label="Date Created">2024-12-11 07:36:56</td>
								<td data-label="Actions">
									<div class="cusDroplistBtn_RoClass">
										<div class="masterBtnWrap_RoClass" onclick="showActionButtons(this)">
											<button>Actions</button>
											<div><img src="../../src/Chevron Down.png"></div>
										</div>					
										<div class="droplistWrap_RoClass">
											<button class="listBtn_RoClass">Reset Password</button>
											<button class="listBtn_RoClass">Edit Details</button>
										</div>
									</div>
								</td>
							</tr>
							-->							
						</tbody>
					</table>
				</div>				
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
	<script type="module" src="../Client Side/Controller_Div_ListMoreAccountsTr.js"></script>
	<script type="module" src="../Client Side/Controller_InputText_SearchAccounts.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_ResetPassword.js"></script>
	<!---Controllers-->

	<!---Executor-->
	<script type="module" src="../Client Side/Executor_Page_ManageUser.js"></script>
	<!---Executor-->		
	<!--JS Script-->
</body>
</html>
<?php
}else{
	header("location:".$logoutPath);
}
?>