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
			</div>
		</div>
		<div class="mainmecha_RoClass lightMode">
			<div class="mainmechaCon_RoClass layoutOneHead_RoClass lightMode">
				<div class="burger_RoClass"><img class="burgerIcon_RoClass"></div>			
				
				<div class="projTitleAndUserLogin_RoClass">
					<div class="projTitleTxt_RoClass">VMC Web Applications</div>
					<div class="userLogin_RoClass">
						<div class="userLoginIconWrap_RoClass"><img src="./src/actionofficericon.png"/></div>
						<div class="userLoginDetails_RoClass">Juan Dela Cruz</div>
					</div>
				</div>
			</div>

			<!--Greetings Area--> 
			<div class="mainmechaCon_RoClass autoReponsiveSection lightMode" id="greetingSection">
				<div class="mainmechaCon_RoClass" id="greetingWrap">
					<img id="greetingUserImage" src="./src/actionofficericon.png" />
						
					<div class="mainmechaCon_RoClass" id="greetingUserDetailsWrap">
						<div class="mainmechaCon_RoClass lightMode" id="greetingUserFName">Hi! welcome back, Juan!</div>
						<div class="mainmechaCon_RoClass sub-textFColor" id="greetingUserEmpNo">Employee number 2024-1136</div>
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
					<a class="link-Btn" href="" id="bannerBtnGoToApp">Go to Systems</a>
				</div>
			</div>
			<!--Banner-->


			<!--List of web applications-->
			<div class="mainmechaCon_RoClass autoReponsiveSection lightMode" id="webAppListSection">
				<div class="mainmechaCon_RoClass sectionsLabel lightMode">List of Systems</div>
				<div class="mainmechaCon_RoClass" id="webAppList">
					<div class="mainmechaCon_RoClass perWebApp">
						<div class="mainmechaCon_RoClass perWebAppIcon_LightMode" style="--perWebAppIcon_BgImage_DarkMode: url('../../src/EMR_White.png'); --perWebAppIcon_BgImage_LightMode: url('../../src/EMR_Black.png');"></div>
						<div class="mainmechaCon_RoClass perWebAppName lightMode">Online Request of Medical Records</div>
					</div>

					<div class="mainmechaCon_RoClass perWebApp">
						<div class="mainmechaCon_RoClass perWebAppIcon_LightMode" style="--perWebAppIcon_BgImage_DarkMode: url('../../src/ONLINESCHED_White.png'); --perWebAppIcon_BgImage_LightMode: url('../../src/ONLINESCHED_Black.png');"></div>
						<div class="mainmechaCon_RoClass perWebAppName lightMode">OPD Online Scheduler</div>
					</div>

					<div class="mainmechaCon_RoClass perWebApp">
						<div class="mainmechaCon_RoClass perWebAppIcon_LightMode" style="--perWebAppIcon_BgImage_DarkMode: url('../../src/HCSS_White.png'); --perWebAppIcon_BgImage_LightMode: url('../../src/HCSS_Black.png');"></div>
						<div class="mainmechaCon_RoClass perWebAppName lightMode">VMC CSAT</div>
					</div>

					<div class="mainmechaCon_RoClass perWebApp">
						<div class="mainmechaCon_RoClass perWebAppIcon_LightMode" style="--perWebAppIcon_BgImage_DarkMode: url('../../src/PETRU_White.png'); --perWebAppIcon_BgImage_LightMode: url('../../src/PETRU_Black.png');"></div>
						<div class="mainmechaCon_RoClass perWebAppName lightMode">Training Management</div>
					</div>

					<div class="mainmechaCon_RoClass perWebApp">
						<div class="mainmechaCon_RoClass perWebAppIcon_LightMode" style="--perWebAppIcon_BgImage_DarkMode: url('../../src/EDTS_White.png'); --perWebAppIcon_BgImage_LightMode: url('../../src/EDTS_Black.png');"></div>
						<div class="mainmechaCon_RoClass perWebAppName lightMode">Document Tracking</div>
					</div>

					<div class="mainmechaCon_RoClass perWebApp">
						<div class="mainmechaCon_RoClass perWebAppIcon_LightMode" style="--perWebAppIcon_BgImage_DarkMode: url('../../src/ESRS_White.png'); --perWebAppIcon_BgImage_LightMode: url('../../src/ESRS_Black.png');"></div>
						<div class="mainmechaCon_RoClass perWebAppName lightMode">Electronic Service Request</div>
					</div>
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
	<!--JS Script-->
</body>
</html>