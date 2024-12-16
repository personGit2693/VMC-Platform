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
			<a class="topMenus home-logo" href=""><img src="../../src/homeiconwhite.png"></a>

			<!--Search Textbox-->
			<input type="text" class="searchInput_RoClass" placeholder="Search..." style="--inputSearchIcon: url('../../src/searchIcon.png')">
			<!--Search Textbox-->
		</div>

		<div class="top-right-menu">
			<div class="toggle-mode-original">
				<button class="toggle-mode-class" id="toggle-mode-id" onclick="controller_Btn_ChangeMode()">Light Mode</button>
			</div>

			<div class="topMenus chat-toggle-button" onclick="controller_Div_ToggleContacts();">
				<img src="../../src/chat-icon.png">
			</div>

			<a class="topMenus gear-icon" href=""><img src=../../src/gear_white.png></a>

			<div class="user-profile">
				<img id="profilePic-id1" src="../../src/cat-profile.png">
			</div>
		</div>
	</div>
	<!--Top Section-->

	<div class="rolayout_RoClass" id="rolayout_RoId">
		<!--Left Side Content-->
		<div class="sidemecha_RoClass" id="sidemecha_RoId" style="--naviBgColor:transparent;">
			<div class="sidemechaCon_RoClass">
				<div class="company-logo"><img src="../../src/vmclogo.png"></div>

				<!--With Sub Menus-->
				<div class="mainNavMenu_RoClass" onclick="collapseMenu(this)">			
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/sccc icon green.png'); --activeMainNavMenuIcon:url('../../src/sccc icon green.png')"></div>
					<span class="generalNavMenuText_RoClass">VMC APPS</span><div class="chevronIconWrap_RoClass"><img src="../../src/Chevron Right_hover.png"/></div>
				</div>

				<div style="max-height: 0px;" class="subNavMenuWrap_RoClass">
					<a href="http://localhost/VMC Platform/Module Registration/Pages/Page_Access.php" target="_blank" class="subNavMenu_RoClass">				
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>

					<a href="" class="subNavMenu_RoClass">					
						<div class="subNavMenuIconWrap_RoClass" style="--subNavMenuIcon:url('../../src/rounded heart.png'); --activeSubNavMenuIcon:url('../../src/rounded heart.png')"></div>
						<span class="generalNavMenuText_RoClass">Application</span>
					</a>
				</div>
			</div>
		</div>
		<!--Left Side Content-->
		
		<div class="mainmecha_RoClass">
			<!--Header-->
			<div class="mainmechaCon_RoClass layoutOneHead_RoClass" style=" --projectTitle_BgColor:var(--bg-color-1); ">
				<!--Burger-->
				<div class="burger_RoClass" id="burger_RoId"><img class="burgerIcon_RoClass"></div>
				<!--Burger-->

				<div class="toggle-mode-new"></div>
	
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

						<div class="nameAndTitle-Wrap">
							<div class="nameEditWrap_class">
								<div id="nameDisplay-id" contenteditable="false">Rogelio Cruz Jr</div>
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
									<button class="iconBtn_RoClass" id="togglePasswordBtn" onclick="controller_Btn_TogglePasswordVisibility('inputPassword1', this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png')"></button>
								</div>
							</div>

							<div class="passwordAndCheckPasswordWrap_Class">
								<div class="cusInputs_RoClass">					
									<input id="inputPassword2" type="password" onfocusout="lowlightInWrap(this)" onfocus="highlightInWrap(this)" required>
									<div class="placeholdme_RoClass">New Password</div>	
								</div>
								<div class="checkPasswordBtn_Class">
									<button class="iconBtn_RoClass" id="togglePasswordBtn" onclick="controller_Btn_TogglePasswordVisibility('inputPassword2',this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png')"></button>
								</div>
							</div>

							<div class="passwordAndCheckPasswordWrap_Class">
								<div class="cusInputs_RoClass">					
									<input id="inputPassword3" type="password" onfocusout="lowlightInWrap(this,)" onfocus="highlightInWrap(this)" required>
									<div class="placeholdme_RoClass">Confirm New Password</div>	
								</div>
								<div class="checkPasswordBtn_Class">
									<button class="iconBtn_RoClass" id="togglePasswordBtn" onclick="controller_Btn_TogglePasswordVisibility('inputPassword3', this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png')"></button>
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
					<!--2nd Div
					<div class="settingsSeconddiv_Class">
						
						<div class="settingsPreferencesControl_Class">Preferences</div><br>
							
							<div class="preferencesOptions_Class">
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

							</div>
							<br><br>
							
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
							
					</div>
					2nd Div-->
				</div>
				<!--Settings Content-->
			</div>
			<!--Main Body-->						
		</div> 
	</div>

	<!--Bottom Section / Footer-->
	<hr class="linethis_RoClass">
	<div class="footerWrap_RoClass" id="footerWrap_RoId">
		<!--<span class="footerTxt_RoClass" id="footerTxt_RoId">&copy; 2024 Human Resource Information System. All rights reserved.</span>-->
	</div>
	<!--Bottom Section / Footer-->

	<!--Chat Section-->
	<div class="chat-container" style="display: none;">
		<div class="contacts">
			<div class="contact-text">Contacts</div>

			<input type="text" class="searchInput_RoClass" id="search-contact-id" placeholder="Enter Name" style="--inputSearchIcon: url('../../src/searchIcon.png')">
		</div>

		<div class="contact-container" onclick="controller_Div_DisplayChatbox('Angelo Arellano')">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="online-indicator-small"></div>
			</div>
			
			<div class="profile-name">Angelo Arellano</div>
		</div>

		<div class="contact-container" onclick="controller_Div_DisplayChatbox('Jane Luna')">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="online-indicator-small"></div>
			</div>

			<div class="profile-name">Jane Luna</div>
		</div>

		<div class="contact-container" onclick="controller_Div_DisplayChatbox('Richard Bautista')">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">Richard Baustista</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>

		<div class="contact-container">
			<div class="profile-img-container">
				<img class="profile-img" src="../../src/cat-profile.png">
				<div class="offline-indicator-small"></div>
			</div>

			<div class="profile-name">First Last</div>
		</div>
	</div>

	<div class="chat-box-container" style="visibility: hidden;"></div>
	<!--Chat Section-->

	<!--Javascripts-->
	<!--_Dependencies-->
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeLayOneNavScript.js"></script>
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeScript.js"></script>
	<!--_Dependencies-->

	<!--_Hector JS-->
	<!--<script src="../Client Side/Module_Settings.js"></script>-->
	<!--_Hector JS-->

	<!--_Controllers-->
	<script type="module" src="../../Global Client Side/Controller_Btn_ChangeMode.js"></script>
	<script type="module" src="../../Global Client Side/Controller_Div_ToggleContacts.js"></script>
	<script type="module" src="../../Global Client Side/Controller_Div_DisplayChatbox.js"></script>
	<script type="module" src="../../Global Client Side/Controller_Textarea_ResizeTextArea.js"></script>
	<script type="module" src="../../Global Client Side/Controller_Btn_CloseChatbox.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_TogglePasswordVisibility.js"></script>
	<script type="module" src="../Client Side/Controller_InputFile_ChangeProfilePic.js"></script>
	<!--_Controllers-->

	<!--_Executor-->
	<script type="module" src="../Client Side/Executor_Page_Settings.js"></script>
	<script type="module" src="../../Global Client Side/Executor_Global.js"></script>
	<!--_Executor-->
	<!--Javascripts-->

</body>
</html>