<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../Styles/Page_Registration.css">
	<title>Registration Page</title>
</head>
<body>	
	<!--Form Body-->
	<div class="formBody_class">

		<!--Page Title-->
		<div class="formTitle_class">Create New Account</div>
		<!--Page Title-->

		<!--Employee ID-->
		<div class="cusInputs_RoClass" id="cusInputs-empId">				
			<input type="text" class="inputBox_class" id="empId" onkeyup="controller_InputText_AssignEmpId(this), controller_Univ_ValidateRegistration()" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#FAB142')" required>
			<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_black.png"></div>Employee ID</div>
		</div>
		<!--Employee ID-->

		<!--First Name-->
		<div class="cusInputs_RoClass" id="cusInputs-empFname">					
			<input type="text" class="inputBox_class" id="empFname" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#FAB142')" onkeyup="controller_InputText_AssignEmpFname(this), controller_Univ_ValidateRegistration()" required>
			<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_black.png"></div>First Name</div>
		</div>
		<!--First Name-->

		<!--Middle Name-->
		<div class="cusInputs_RoClass" id="cusInputs-empMname">					
			<input type="text" id="empMname" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#FAB142')" onkeyup="controller_InputText_AssignEmpMname(this), controller_Univ_ValidateRegistration()" required>
			<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_black.png"></div>Middle Name</div>
		</div>
		<!--Middle Name-->

		<!--Last Name-->
		<div class="cusInputs_RoClass" id="cusInputs-empLname">					
			<input type="text" class="inputBox_class" id="empLname" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#FAB142')" onkeyup="controller_InputText_AssignEmpLname(this), controller_Univ_ValidateRegistration()" required>
			<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_black.png"></div>Last Name</div>
		</div>
		<!--Last Name-->

		<!--Suffix Dropdown-->
		<div class="selectDropdownWrap_RoClass" id="suffixDropdown_id" style="z-index: 2;">
			<input type="hidden" class="selectedOptValue_RoClass" id="suffixDropdownVal">
			<div class="displayedSelectedFlex_RoClass" title="Please select from option" onclick="showSelectDropdownOpts(this, '300px')">
				<div class="displayedSelectedIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
				<div class="displayedSelectedText_RoClass">Suffix(if applicable)</div>
				<div class="displayedSelectedResetBtn_RoClass" style="--selectDropdownResetBtnIcon: url('../../src/closeModIcon_Failed.png');" onclick="resetSelectDropdown(this, 'Please select from option', '../../src/avataricon_black.png', 'Suffix(if applicable)'), controller_DivOpt_ResetSuffixValue(), controller_Univ_ValidateRegistration()"></div>
				<div class="displayedSelectedChevron_RoClass" style="--selectDropdownChevron: url('../../src/Chevron Down.png');"></div>						
			</div>
			<!--Suffix Dropdown Options-->
			<div class="selectDropdownOptionsWrap_RoClass">
				<input type="text" placeholder="Search Here" class="searchOpts_RoClass">
				<div class="selectDropdownOptsArea_RoClass">										
					<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '300px'), controller_DivOpt_AssignSuffixValue(this), controller_Univ_ValidateRegistration()">
						<input type="hidden" class="optValue_RoClass" value="Jr">
						<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
						<div class="optText_RoClass">Jr</div>
					</div>
					<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '300px'), controller_DivOpt_AssignSuffixValue(this), controller_Univ_ValidateRegistration()">
						<input type="hidden" class="optValue_RoClass" value="Sr">
						<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
						<div class="optText_RoClass">Sr</div>
					</div>
					<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '300px'), controller_DivOpt_AssignSuffixValue(this), controller_Univ_ValidateRegistration()">
						<input type="hidden" class="optValue_RoClass" value="III">
						<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
						<div class="optText_RoClass">III</div>
					</div>
					<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '300px'), controller_DivOpt_AssignSuffixValue(this), controller_Univ_ValidateRegistration()">
						<input type="hidden" class="optValue_RoClass" value="IV">
						<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
						<div class="optText_RoClass">IV</div>
					</div>
					<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '300px'), controller_DivOpt_AssignSuffixValue(this), controller_Univ_ValidateRegistration()">
						<input type="hidden" class="optValue_RoClass" value="V">
						<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
						<div class="optText_RoClass">V</div>
					</div>
				</div>
			</div>
		</div>
		<!--Suffix Dropdown-->

		<!--Area Dropdown-->
		<div class="selectDropdownWrap_RoClass" id="sectionDropdown-id" style="z-index: 1;">
			<input type="hidden" class="selectedOptValue_RoClass" id="sectionDropdownVal">
			<div class="displayedSelectedFlex_RoClass" title="Please select from option" onclick="showSelectDropdownOpts(this, '300px')">
				<div class="displayedSelectedIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
				<div class="displayedSelectedText_RoClass">Select your Area</div>
				<div class="displayedSelectedResetBtn_RoClass" style="--selectDropdownResetBtnIcon: url('../../src/closeModIcon_Failed.png');" onclick="resetSelectDropdown(this, 'Please select from option', '../../src/avataricon_black.png', 'Select your Area'), controller_DivOpt_ResetSectionValue(), controller_Univ_ValidateRegistration()"></div>
				<div class="displayedSelectedChevron_RoClass" style="--selectDropdownChevron: url('../../src/Chevron Down.png');"></div>						
			</div>

			<!--Area Dropdown Options-->
			<div class="selectDropdownOptionsWrap_RoClass" id="sectionOptWrap">
				<input type="text" placeholder="Search Here" class="searchOpts_RoClass" onkeyup="controller_InputText_GetSections(this)">
				<div class="selectDropdownOptsArea_RoClass">
					<!--
					<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '1000px')">
						<input type="hidden" class="optValue_RoClass" value="Opt1">
						<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
						<div class="optText_RoClass">Oncology</div>
					</div>
					<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '1000px')">
						<input type="hidden" class="optValue_RoClass" value="Opt2">
						<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
						<div class="optText_RoClass">Radiology</div>
					</div>
					<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '1000px')">
						<input type="hidden" class="optValue_RoClass" value="Opt2">
						<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
						<div class="optText_RoClass">Opthalmology</div>
					</div>
					<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '1000px')">
						<input type="hidden" class="optValue_RoClass" value="pt2">
						<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
						<div class="optText_RoClass">Neurology</div>
					</div>
					<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '1000px')">
						<input type="hidden" class="optValue_RoClass" value="Opt2">
						<div class="optIcon_RoClass" style="--optIcon: url('../../src/avataricon_black.png');"></div>
						<div class="optText_RoClass">Pediatrics</div>
					</div>
					-->
				</div>
			</div>
		</div>
		<!--Area Dropdown-->

		<!--Password-->
		<div class="cusInputs_RoClass" id="cusInputs-empPassword1">					
			<input id="empPassword1" type="password" class="inputBox_class" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#FAB142')" onkeyup="controller_InputText_AssignEmpPassword1(this), controller_Univ_ValidateRegistration()" required>
			<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_black.png"></div>Password</div>
			<div class="checkPasswordBtn_Class">
				<button class="iconBtn_RoClass" onclick="controller_Btn_TogglePasswordVisibility('empPassword1', this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png')"></button>
			</div>
		</div>
		<!--Password-->

		<!--Confirm Password-->
		<div class="cusInputs_RoClass" id="cusInputs-empPassword2">					
			<input id="empPassword2" type="password" class="inputBox_class" onfocusout="lowlightInWrap(this, '#ffffff')" onfocus="highlightInWrap(this, '#FAB142')" onkeyup="controller_InputText_AssignEmpPassword2(this), controller_Univ_ValidateRegistration()" required>
			<div class="placeholdme_RoClass"><div class="textBoxImgWrap_class"><img src="../../src/avataricon_black.png"></div>Confirm Password</div>
			<div class="checkPasswordBtn_Class">
				<button class="iconBtn_RoClass" id="togglePasswordBtn2" onclick="controller_Btn_TogglePasswordVisibility('empPassword2', this)" style="--iconBtnBgIcon: url('../../src/passwordeyeopen.png')"></button>
			</div>
		</div>
		<!--Confirm Password-->		

		<!--Submit Button-->
		<button class="normButton_RoClass" id="submitRegistrationBtn" onclick="controller_Univ_ValidateRegistration(this)">Create Account</button>
		<!--Submit Button-->
		
		<div class="alreadyHaveAccount_class">Already have an account? <a href="">Login</a></div>
	</div>
	<!--Form Body-->		

	<!--Bottom Section / Footer-->
	<hr class="linethis_RoClass">
	<div class="footerWrap_RoClass" id="footerWrap_RoId">
		<!--<span class="footerTxt_RoClass" id="footerTxt_RoId">&copy; 2024 Human Resource Information System. All rights reserved.</span>-->
	</div>
	<!--Bottom Section / Footer-->


	<!--_Dependencies-->
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeScript.js"></script>
	<!--_Dependencies-->

	<!--_Controllers-->
	<script type="module" src="../Client Side/Controller_Btn_TogglePasswordVisibility.js"></script>
	<script type="module" src="../Client Side/Controller_DivOpt_AssignSuffixValue.js"></script>
	<script type="module" src="../Client Side/Controller_DivOpt_AssignSectionValue.js"></script>
	<script type="module" src="../Client Side/Controller_InputText_GetSections.js"></script>
	<script type="module" src="../Client Side/Controller_InputText_AssignEmpId.js"></script>
	<script type="module" src="../Client Side/Controller_InputText_AssignEmpFname.js"></script>
	<script type="module" src="../Client Side/Controller_InputText_AssignEmpMname.js"></script>
	<script type="module" src="../Client Side/Controller_InputText_AssignEmpLname.js"></script>
	<script type="module" src="../Client Side/Controller_InputText_AssignEmpPassword1.js"></script>
	<script type="module" src="../Client Side/Controller_InputText_AssignEmpPassword2.js"></script>
	<script type="module" src="../Client Side/Controller_Univ_ValidateRegistration.js"></script>
	<script type="module" src="../Client Side/Controller_DivOpt_ResetSectionValue.js"></script>
	<script type="module" src="../Client Side/Controller_DivOpt_ResetSuffixValue.js"></script>
	<!--_Controllers-->

	<!--_Executor-->
	<script type="module" src="../Client Side/Executor_Page_Registration.js"></script>
	<script type="module" src="../../Global Client Side/Executor_Global.js"></script>
	<!--_Executor-->
</body>
</html>