<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/Page_Management_Post.css">
	<title>Post Management Page</title>
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
				<img src="../../src/cat-profile.png">
			</div>
		</div>
	</div>
	<!--Top Section-->

	<!--Mid Section-->
	<div class="rolayout_RoClass" id="rolayout_RoId">
		<!--Left Side Content-->
		<div class="sidemecha_RoClass" id="sidemecha_RoId" style="--naviBgColor:transparent;">
			<div class="sidemechaCon_RoClass">
				<div class="company-logo"><img src="../../src/vmclogo.png"></div>

				<!--With Sub Menus-->
				<div class="mainNavMenu_RoClass" onclick="collapseMenu(this)">			
					<div class="mainNavMenuIconWrap_RoClass" style="--mainNavMenuIcon:url('../../src/sccc icon green.png'); --activeMainNavMenuIcon:url('../../src/sccc icon green.png')"></div>
					<span class="generalNavMenuText_RoClass">APPS</span><div class="chevronIconWrap_RoClass"><img src="../../src/Chevron Right_hover.png"/></div>
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

		<!--Main Content-->
		<div class="mainmecha_RoClass" id="mainmecha_RoId" style="--mainBodyBgColor:transparent;">
			<div class="mainmechaCon_RoClass layoutOneHead_RoClass" id="mainmechaCon_RoId" style="--projectTitle_BgColor:transparent;">
				<div class="burger_RoClass" id="burger_RoId"><img class="burgerIcon_RoClass"></div>

				<div class="toggle-mode-new"></div>
				
				<div class="pending-notification">Pending Notification</div>

				<div class="post-status-summary">
					<div class="pending-info-container">
						<img src="../../src/pending-icon.png">
						<div class="pending-info">Pending Approval</div>
						<div class="pending-count">1</div>
					</div>
					
					<div class="pending-info-container">
						<img src="../../src/pending-icon.png">
						<div class="pending-info">Pending Removal</div>
						<div class="pending-count">1</div>
					</div>

					<div class="pending-info-container">
						<img src="../../src/pending-icon.png">
						<div class="pending-info">Overall Pending</div>
						<div class="pending-count">2</div>
					</div>
				</div>

				<!--Post Approval Box-->

				<div class="post-review">Posts for Review</div>

				<div class="post-approval-box posts">
					<div class="post-list">
						<div class="date-submitted">Date Submitted: 4/19/2024, 8:39:45 PM</div>

						<div class="action-buttons">
							<div class="post-status">Pending Approval</div>
							<button class="approve-button">Approve</button>
							<button class="decline-button">Decline</button>
						</div>

						<div class="user-profile-box user-profile">
							<img src="../../src/cat-profile.png">
							<div class="user-name">John Smith</div>
							<div class="chosen-category">Category 1</div>
						</div>
						
						<div class="post-title-class">Grab Car Saver</div>

						<div class="post-content-class">
							<p>
								Yan ang lowbog! 🤿 Pwede ka gumala every day this summer sa baba ng rates ng GrabCar Saver, available in Manila, Pampanga, Bacolod, and Iloilo. 🚗 May extra 10% OFF on 60 rides when you subscribe to RideSaver for only P99. BOOK now! 💚
							</p>
							Learn more: <a href="">grb.to/RideSaver</a> 
							<p>
								“Tibay” refers to 2x more Calcium, B-Vitamins (B1, B6, B12) & Vitamin C vs selected regular powdered milk brands.
							</p>

							<p>ASC Ref No. G0113N010524G</p>
						</div>

						<div class="file-preview-container-class">
							<img class="file-preview-element" src="../../src/grab.jpg">
						</div>
					</div>
				</div>
				<!--Post Approval Box-->

				<!--Post Removal Box-->
				<div class="post-removal-box posts">
					<div class="post-list">
						<div class="date-submitted">Date Submitted: 4/19/2024, 8:39:45 PM</div>

						<div class="action-buttons">
							<div class="post-status">Pending Removal</div>
							<button class="approve-button">Approve</button>
							<button class="decline-button">Decline</button>
						</div>

						<div class="user-profile-box user-profile">
							<img src="../../src/cat-profile.png">
							<div class="user-name">John Smith</div>
							<div class="chosen-category">Category 1</div>
						</div>
						
						<div class="post-title-class">Grab Car Saver</div>

						<div class="post-content-class">
							<p>
								Yan ang lowbog! 🤿 Pwede ka gumala every day this summer sa baba ng rates ng GrabCar Saver, available in Manila, Pampanga, Bacolod, and Iloilo. 🚗 May extra 10% OFF on 60 rides when you subscribe to RideSaver for only P99. BOOK now! 💚
							</p>
							Learn more: <a href="">grb.to/RideSaver</a> 
							<p>
								“Tibay” refers to 2x more Calcium, B-Vitamins (B1, B6, B12) & Vitamin C vs selected regular powdered milk brands.
							</p>

							<p>ASC Ref No. G0113N010524G</p>
						</div>

						<div class="file-preview-container-class">
							<img class="file-preview-element" src="../../src/grab.jpg">
						</div>
					</div>
				</div>
				<!--Post Removal Box-->
			</div>
		</div>
		<!--Main Content-->
	</div>
	<!--Mid Section-->

	<!--Footer-->
	<hr class="linethis_RoClass">
	<div class="footerWrap_RoClass" id="footerWrap_RoId"></div>
	<!--Footer-->

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
	<!--_Dependencies-->

	<!--_Controllers-->
	<script type="module" src="../../Global Client Side/Controller_Btn_ChangeMode.js"></script>
	<script type="module" src="../../Global Client Side/Controller_Div_ToggleContacts.js"></script>
	<script type="module" src="../../Global Client Side/Controller_Div_DisplayChatbox.js"></script>
	<script type="module" src="../../Global Client Side/Controller_Btn_CloseChatbox.js"></script>
	<!--_Controllers-->

	<!--_Executor-->
	<script type="module" src="../Client Side/Executor_Page_Management.js"></script>
	<script type="module" src="../../Global Client Side/Executor_Global.js"></script>
	<!--_Executor-->
	<!--Javascripts-->
</body>
</html>