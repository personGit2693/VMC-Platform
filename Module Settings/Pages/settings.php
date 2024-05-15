<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/settings.css">
	<title>Settings Page</title>
</head>
<body>
	<!--Top Section-->
	<div class="top-section">
		<div class="top-left-menu">
			<a class="home-logo" href=""><img src="../../src/homeiconwhite.png"></a>

			<!--Search Textbox-->
			<input type="text" class="searchInput_RoClass" id="searchInput_RoId" placeholder="Search..." style="--inputSearchIcon: url('../../src/searchIcon.png')">
			<!--Search Textbox-->
		</div>

		<div class="top-right-menu">
			<button class="toggle-mode-class" id="toggle-mode-id" onclick="controller_Btn_ChangeMode()">Light Mode</button>			
			<a class="topMenus gear-icon" href=""><img src=../../src/gear_white.png></a>

			<div class="user-profile">
				<img id="profilePic-id1" src="../../src/cat-profile.png">
			</div>
		</div>
	</div>
	<!--Top Section-->

	<div class="rolayout_RoClass" id="rolayout_RoId">

		<!---Side Menu---->
		<div class="sidemecha_RoClass" id="sidemecha_RoId" style="--naviBgColor:transparent;">
			<div class="sidemechaCon_RoClass">
				<div class="company-logo"><img src="../../src/vmclogo.png"></div>
				<!--With Sub Menus-->
				<div class="mainNavMenu_RoClass" onclick="collapseMenu(this)">			
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/sccc icon green.png'); --activeMainNavMenuIcon:url('../../src/sccc icon green.png')"></div>
					<span class="generalNavMenuText_RoClass">APPS</span><div class="chevronIconWrap_RoClass"><img src="../../src/Chevron Right_hover.png"/></div>
				</div>

				<div style="max-height: 0px;" class="subNavMenuWrap_RoClass">
					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon white.png'); --activeSubNavMenuIcon:url('../../src/sccc icon white.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/sccc icon green.png'); --activeSubNavMenuIcon:url('../../src/sccc icon green.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>
				</div>
			</div>
		</div>
		<!---Side Menu---->
		
		<div class="mainmecha_RoClass">
			<!--Header-->
			<div class="mainmechaCon_RoClass layoutOneHead_RoClass" style=" --projectTitle_BgColor:var(--bg-color-1); ">
				<!--Burger-->
				<div class="burger_RoClass"><img class="burgerIcon_RoClass"></div>
				<!--Burger-->
	
				<!--Settings Content-Title-->
				<div class="projTitleAndUserLogin_RoClass">
					<div class="projTitleTxt_RoClass"><p class="setting_Title_Class">Settings</p></div>	
				</div>
				<!--Settings Content-Title-->
				
			</div>
			<!--Header--> 

			<div class="mainmechaCon_RoClass" style="color:var(--text-color-1);">
				<!--Settings Content-->
				<div class="SettingsClass">
					<!--Account Details-->
					<div id="SettingsTitle_id">Account Details</div>
					<div class="userLoginIconWrap_RoClass" id="profilePic-Wrap">

						<!--Profile Picture and Change Button-->
						<div id="picAndbuttonwrap_id">
							<div id="imgWrapper_id"><img id="profilePic-id" src="../../src/ernesto.webp"></div>
							<div id="changeProfilePicBtn_id">
								<button class="normButton_RoClass" type="button" onclick="controller_Btn_OpenFileSelector()">
									Change Profile Picture 
								</button>
								<input type="file" id="fileInput" style="display:none;" accept="image/*">
							</div>
						</div>
						<!--Profile Picture and Change Button-->

						<div class="nameAndTitle-Wrap">
							<div class="nameEditWrap_class">
								<div id="nameDisplay-id" contenteditable="false">Ernesto Dela Cruz</div>
								<!--<div id="changeNameimgWrapper_id"><img id="changeNamePic-id" src="../../src/edit icon pen.png"></div>-->
							</div>
						</div>
					</div>
					<!--Account Details-->

					<!--Login Credentials Reset-->
					<div class="changeCredentialsWrap_class">
						<div id="SettingsTitle_id">Change Password</div>
						<div class="inputBoxesWrap_class">
							
							<div class="passwordAndCheckPasswordWrap_Class">
								<div class="cusInputs_RoClass">					
									<input id="inputPassword1" type="password" onfocusout="lowlightInWrap(this)" onfocus="highlightInWrap(this)" required>
									<div class="placeholdme_RoClass">Old Password</div>	
								</div>
								<div class="checkPasswordBtn_Class">
									<button class="iconBtn_RoClass" id="togglePasswordBtn" onclick="controller_Btn_TogglePasswordVisibility('inputPassword1')" style="--iconBtnBgIcon: url('../../src/passwordcheck.webp')"></button>
								</div>
							</div>

							<div class="passwordAndCheckPasswordWrap_Class">
								<div class="cusInputs_RoClass">					
									<input id="inputPassword2" type="password" onfocusout="lowlightInWrap(this)" onfocus="highlightInWrap(this)" required>
									<div class="placeholdme_RoClass">New Password</div>	
								</div>
								<div class="checkPasswordBtn_Class">
									<button class="iconBtn_RoClass" id="togglePasswordBtn" onclick="controller_Btn_TogglePasswordVisibility('inputPassword2')" style="--iconBtnBgIcon: url('../../src/passwordcheck.webp')"></button>
								</div>
							</div>

							<div class="passwordAndCheckPasswordWrap_Class">
								<div class="cusInputs_RoClass">					
									<input id="inputPassword3" type="password" onfocusout="lowlightInWrap(this,)" onfocus="highlightInWrap(this)" required>
									<div class="placeholdme_RoClass">Confirm New Password</div>	
								</div>
								<div class="checkPasswordBtn_Class">
									<button class="iconBtn_RoClass" id="togglePasswordBtn" onclick="controller_Btn_TogglePasswordVisibility('inputPassword3')" style="--iconBtnBgIcon: url('../../src/passwordcheck.webp')"></button>
								</div>
							</div>

							<!--Reset Button-->		
							<div>
								<div id="changeCredentials_id"><button class="normButton_RoClass">Update Password</button></div>
							</div>
						<!--Reset Button-->
						</div>
					</div>

					<!--Login Credentials Reset-->
					<!--2nd Div-->
					<div class="settingsSeconddiv_Class">
						<!--Preferences--->
						<div class="settingsPreferencesControl_Class">Preferences</div><br>
							<!---Searches Preferences-->
							<!--<div class="preferencesOptions_Class">
								<div><p class="radioChoicesTitle">Keep Searches For</p></div>
								<div class="radioCircleFlex_RoClass" id="radoption1-id">						
									<label for=" circleRadioBtn1 " class="customRadioCircle_RoClass"><span class="innerCircle_RoClass"></span></label>
									<input type="radio" id=" circleRadioBtn1 " name="circlesample" data-rogridradio-check="false" onclick="radioCircleSelected(this, ' yellow ')" autocomplete="off">
									<div class="radioCircleTxtLabel_RoClass" id="radoption1Font-id">3 days</div>
								</div>

								<div class="radioCircleFlex_RoClass" id="radoption1-id">						
									<label for=" circleRadioBtn2 " class="customRadioCircle_RoClass"><span class="innerCircle_RoClass"></span></label>
									<input type="radio" id=" circleRadioBtn2 " name="circlesample" data-rogridradio-check="false" onclick="radioCircleSelected(this, ' yellow ')" autocomplete="off">
									<div class="radioCircleTxtLabel_RoClass" id="radoption1Font-id">7 days</div>
								</div>

								<div class="radioCircleFlex_RoClass" id="radoption1-id">						
									<label for=" circleRadioBtn3 " class="customRadioCircle_RoClass"><span class="innerCircle_RoClass"></span></label>
									<input type="radio" id=" circleRadioBtn3 " name="circlesample" data-rogridradio-check="false" onclick="radioCircleSelected(this, ' yellow ')" autocomplete="off">
									<div class="radioCircleTxtLabel_RoClass" id="radoption1Font-id">15 days</div>
								</div>

								<div class="radioCircleFlex_RoClass" id="radoption1-id">						
									<label for=" circleRadioBtn4 " class="customRadioCircle_RoClass"><span class="innerCircle_RoClass"></span></label>
									<input type="radio" id=" circleRadioBtn4 " name="circlesample" data-rogridradio-check="false" onclick="radioCircleSelected(this, ' yellow ')" autocomplete="off">
									<div class="radioCircleTxtLabel_RoClass" id="radoption1Font-id">30 days</div>
								</div>

								<div class="radioCircleFlex_RoClass" id="radoption1-id">						
									<label for=" circleRadioBtn5 " class="customRadioCircle_RoClass"><span class="innerCircle_RoClass"></span></label>
									<input type="radio" id=" circleRadioBtn5 " name="circlesample" data-rogridradio-check="false" onclick="radioCircleSelected(this, ' yellow ')" autocomplete="off">
									<div class="radioCircleTxtLabel_RoClass" id="radoption1Font-id">Default(See all searches for the whole year)</div>
								</div>

							</div><br><br>-->
							<!--Searches Preferences-->
							<div class="preferencesOptions_Class" style="margin-bottom:10px;">
								<div><p class="notificationTitle_class">Notifications</p></div>
								<div class="checkboxesNotification_Class">
							
									<div class="cusCheckBoxPaper_RoClass">
										<label for="checkBoxEmail_id">Receive Email Notification:<div class="boxme_RoClass"><img src="../../src/DoneIcon.png"></div></label>
										<input type="checkbox" id="checkBoxEmail_id" onchange="checkCusCheckBox(this)" autocomplete="off">
									</div>

									<div class="cusCheckBoxPaper_RoClass">
										<label for="checkBoxSMS_id">Receive SMS Notification:<div class="boxme_RoClass"><img src="../../src/DoneIcon.png"></div></label>
										<input type="checkbox" id="checkBoxSMS_id" onchange="checkCusCheckBox(this)" autocomplete="off">
									</div>

									<div class="cusCheckBoxPaper_RoClass">
										<label for="checkBoxBrowser_id">Receive Browser Notification:<div class="boxme_RoClass"><img src="../../src/DoneIcon.png"></div></label>
										<input type="checkbox" id="checkBoxBrowser_id" onchange="checkCusCheckBox(this)" autocomplete="off">
									</div>

								</div>
							</div>
						</div>
						<!--Preferences-->	
					</div>
					<!--2nd Div-->
				</div>
				<!--Settings Content-->
			</div>
			<!--Main Body-->

			<!--Footer-->
			<hr class="linethis_RoClass">
			<div class=footerWrap_RoClass id="footerWrap_RoId">
				<span class="footerTxt_RoClass" id="footerTxt_RoId">&copy; 2024 HRIS. All rights reserved.</span>
			</div>
			<!--Footer-->				
		</div> 
	</div>

	<!--Javascripts-->

	<!--_Dependencies-->
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeLayOneNavScript.js"></script>
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeScript.js"></script>
	<!--_Dependencies-->

	<!--_Hector JS-->
	<script src="../Client Side/Module_Settings.js"></script>
	<!--_Hector JS-->

	<!--_Controllers-->
	<script type="module" src="../../Global Client Side/Controller_Btn_ChangeMode.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_TogglePasswordVisibility.js"></script>
	<!--script type="module" src="../Client Side/Controller_Btn_OpenFileSelector.js"></script-->	
	<!--_Controllers-->

	<!--_Executor-->
	<script type="module" src="../Client Side/Executor_Page_Settings.js"></script>
	<!--_Executor-->

	<!--Javascripts-->

</body>
</html>