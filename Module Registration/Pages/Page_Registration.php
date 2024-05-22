<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../Styles/Page_Registration.css">
	<title>Registration Page</title>
</head>
<body>

	<div class="titleandFormWrap_class">			
		<!--Form Body-->
		<div class="formBody_class">

			<!--Page Title-->
			<div class="formTitle_class">Create New Account</div>
			<!--Page Title-->

			<!--Employee ID-->
			<div class="cusInputs_RoClass">				
				<input type="text" class="inputBox_class" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#ffffff')" required>
				<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_purple.png"></div>Employee ID</div>
			</div>
			<!--Employee ID-->

			<!--First Name-->
			<div class="cusInputs_RoClass">					
				<input type="text" class="inputBox_class" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#ffffff')" required>
				<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_purple.png"></div>First Name</div>
			</div>
			<!--First Name-->

			<!--Middle Name-->
			<div class="cusInputs_RoClass">					
				<input type="text" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, gray" required>
				<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_purple.png"></div>Middle Name</div>
			</div>
			<!--Middle Name-->

			<!--Last Name-->
			<div class="cusInputs_RoClass">					
				<input type="text" class="inputBox_class" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#ffffff')" required>
				<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_purple.png"></div>Last Name</div>
			</div>
			<!--Last Name-->

			<!--Suffix Dropdown-->
			<div class="selectDropdownWrap_RoClass" id="suffixDropdown_id" style="z-index: 2;">
				<input type="hidden" class="selectedOptValue_RoClass">
				<div class="displayedSelectedFlex_RoClass" title="Please select from option" onclick="showSelectDropdownOpts(this, '1000px')">
					<div class="displayedSelectedIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
					<div class="displayedSelectedText_RoClass">Suffix(if applicable)</div>
					<div class="displayedSelectedResetBtn_RoClass" style="--selectDropdownResetBtnIcon: url('../../src/closeModIcon_Failed.png');" onclick="resetSelectDropdown(this, 'Please select from option', '../../src/Chevron Down.png', 'Suffix(if applicable)')"></div>
					<div class="displayedSelectedChevron_RoClass" style="--selectDropdownChevron: url('../../src/Chevron Down.png');"></div>						
				</div>
				<!--Suffix Dropdown Options-->
				<div class="selectDropdownOptionsWrap_RoClass">
					<input type="text" placeholder="Search Here" class="searchOpts_RoClass">
					<div class="selectDropdownOptsArea_RoClass">
						<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, ' 1000px ')">
							<input type="hidden" class="optValue_RoClass" value="Opt1">
							<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
							<div class="optText_RoClass">Jr.</div>
						</div>
						<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, ' 1000px ')">
							<input type="hidden" class="optValue_RoClass" value="Opt2">
							<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
							<div class="optText_RoClass">Sr.</div>
						</div>
						<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, ' 1000px ')">
							<input type="hidden" class="optValue_RoClass" value="Opt2">
							<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
							<div class="optText_RoClass">I</div>
						</div>
						<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, ' 1000px ')">
							<input type="hidden" class="optValue_RoClass" value="pt2">
							<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
							<div class="optText_RoClass">II</div>
						</div>
						<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, ' 1000px ')">
							<input type="hidden" class="optValue_RoClass" value="Opt2">
							<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
							<div class="optText_RoClass">III</div>
						</div>
					</div>
				</div>
			</div>
			<!--Suffix Dropdown-->

			<!--Area Dropdown-->
			<div class="selectDropdownWrap_RoClass" id="areaDropdown_id" style="z-index: 1;">
				<input type="hidden" class="selectedOptValue_RoClass">
				<div class="displayedSelectedFlex_RoClass" title="Please select from option" onclick="showSelectDropdownOpts(this, '1000px')">
					<div class="displayedSelectedIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
					<div class="displayedSelectedText_RoClass">Select your Area</div>
					<div class="displayedSelectedResetBtn_RoClass" style="--selectDropdownResetBtnIcon: url('../../src/closeModIcon_Failed.png');" onclick="resetSelectDropdown(this, 'Please select from option', '../../src/Chevron Down.png', 'Select your Area')"></div>
					<div class="displayedSelectedChevron_RoClass" style="--selectDropdownChevron: url('../../src/Chevron Down.png');"></div>						
				</div>

				<!--Area Dropdown Options-->
				<div class="selectDropdownOptionsWrap_RoClass">
					<input type="text" placeholder="Search Here" class="searchOpts_RoClass">
					<div class="selectDropdownOptsArea_RoClass">
						<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, ' 1000px ')">
							<input type="hidden" class="optValue_RoClass" value="Opt1">
							<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
							<div class="optText_RoClass">Oncology</div>
						</div>
						<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, ' 1000px ')">
							<input type="hidden" class="optValue_RoClass" value="Opt2">
							<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
							<div class="optText_RoClass">Radiology</div>
						</div>
						<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, ' 1000px ')">
							<input type="hidden" class="optValue_RoClass" value="Opt2">
							<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
							<div class="optText_RoClass">Opthalmology</div>
						</div>
						<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, ' 1000px ')">
							<input type="hidden" class="optValue_RoClass" value="pt2">
							<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
							<div class="optText_RoClass">Neurology</div>
						</div>
						<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, ' 1000px ')">
							<input type="hidden" class="optValue_RoClass" value="Opt2">
							<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_purple.png');"></div>
							<div class="optText_RoClass">Pediatrics</div>
						</div>
					</div>
				</div>
			</div>
			<!--Area Dropdown-->

			<!--Password-->
			<div class="cusInputs_RoClass">					
				<input id="inputPassword1" type="password" class="inputBox_class" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#ffffff')" required>
				<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_purple.png"></div>Password</div>
				<div class="checkPasswordBtn_Class">
					<button class="iconBtn_RoClass" id="togglePasswordBtn1" onclick="controller_Btn_TogglePasswordVisibility1('inputPassword1')" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png')"></button>
				</div>
			</div>
			<!--Password-->

			<!--Password-->
			<div class="cusInputs_RoClass">					
				<input id="inputPassword2" type="password" class="inputBox_class" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#ffffff')" required>
				<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_purple.png"></div>Confirm Password</div>
				<div class="checkPasswordBtn_Class">
					<button class="iconBtn_RoClass" id="togglePasswordBtn2" onclick="controller_Btn_TogglePasswordVisibility2('inputPassword2')" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png')"></button>
				</div>
			</div>
			<!--Password-->

			<!--Terms and Conditions Agreement-->
			<!--Terms and Conditions Agreement-->

			<!--Submit Button-->
			<button class="normButton_RoClass">Create Account</button>
			<!--Submit Button-->
			<div class="alreadyHaveAccount_class">Already have an account? <a href="">Login</a></div>
		</div>
		<!--Form Body-->		
	</div>

	<hr class="linethis_RoClass">
	<div class=footerWrap_RoClass>
		<span class="footerTxt_RoClass">&copy; 2024 HRIS. All rights reserved. All rights reserved.</span>
	</div>


	<!--_Dependencies-->
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeScript.js"></script>
	<!--_Dependencies-->

	<!--_Controllers-->
	<script type="module" src="../Client Side/Controller_Btn_TogglePasswordVisibility1.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_TogglePasswordVisibility2.js"></script>
	<!--_Controllers-->

	<!--_Executor-->
	<script type="module" src="../Client Side/Executor_Page_Registration.js"></script>
	<!--_Executor-->
</body>
</html>