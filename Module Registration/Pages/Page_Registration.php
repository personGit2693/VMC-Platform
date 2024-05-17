<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/Registration Page.css">
	<title>Registration Page</title>
</head>
<body>
	<!--Page Title-->
	<div class="formTitle_class">Sign Up</div>
	<!--Page Title-->
	<div class="formBody_class">

		<!--Employee ID-->
		<div class="cusInputs_RoClass">					
			<input type="text" onfocusout="lowlightInWrap(this, black)" onfocus="highlightInWrap(this, gray)" required>
			<div class="placeholdme_RoClass">Employee ID</div>
		</div>
		<!--Employee ID-->

		<!--First Name-->
		<div class="cusInputs_RoClass">					
			<input type="text" onfocusout="lowlightInWrap(this, black)" onfocus="highlightInWrap(this, gray)" required>
			<div class="placeholdme_RoClass">First Name</div>
		</div>
		<!--First Name-->

		<!--Middle Name-->
		<div class="cusInputs_RoClass">					
			<input type="text" onfocusout="lowlightInWrap(this, black)" onfocus="highlightInWrap(this, gray" required>
			<div class="placeholdme_RoClass">Middle Name</div>
		</div>
		<!--Middle Name-->

		<!--Last Name-->
		<div class="cusInputs_RoClass">					
			<input type="text" onfocusout="lowlightInWrap(this, black)" onfocus="highlightInWrap(this, gray)" required>
			<div class="placeholdme_RoClass">Last Name</div>
		</div>
		<!--Last Name-->

		<!--Suffix Dropdown-->
		<div class="selectDropdownWrap_RoClass">
			<input type="hidden" class="selectedOptValue_RoClass">
			<div class="displayedSelectedFlex_RoClass" title="Please select from option" onclick="showSelectDropdownOpts(this, '1000px')">
				<div class="displayedSelectedText_RoClass">Suffix(if applicable)</div>
				<div class="displayedSelectedIcon_RoClass" style="--optIcon: url('../../src/closeModIcon_Failed.png');"></div>
				<div class="displayedSelectedResetBtn_RoClass" style="--selectDropdownResetBtnIcon: url('../../src/closeModIcon_Failed.png');" onclick="resetSelectDropdown(this, 'Please select from option', '../../src/Chevron Down.png', 'Suffix(if applicable)')"></div>
				<div class="displayedSelectedChevron_RoClass" style="--selectDropdownChevron: url('../../src/Chevron Down.png');"></div>						
			</div>
			<!--Position Dropdown Options-->
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
		<div class="selectDropdownWrap_RoClass">
			<input type="hidden" class="selectedOptValue_RoClass">
			<div class="displayedSelectedFlex_RoClass" title="Please select from option" onclick="showSelectDropdownOpts(this, '1000px')">
				<div class="displayedSelectedText_RoClass">Select your Area</div>
				<div class="displayedSelectedIcon_RoClass" style="--optIcon: url('../../src/closeModIcon_Failed.png');"></div>
				<div class="displayedSelectedResetBtn_RoClass" style="--selectDropdownResetBtnIcon: url('../../src/closeModIcon_Failed.png');" onclick="resetSelectDropdown(this, 'Please select from option', '../../src/Chevron Down.png', 'Select your Area')"></div>
				<div class="displayedSelectedChevron_RoClass" style="--selectDropdownChevron: url('../../src/Chevron Down.png');"></div>						
			</div>
			<!--Position Dropdown Options-->
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
			<input type="password" onfocusout="lowlightInWrap(this, black)" onfocus="highlightInWrap(this, gray)" required>
			<div class="placeholdme_RoClass">Password</div>
		</div>
		<!--Password-->

		<!--Password-->
		<div class="cusInputs_RoClass">					
			<input type="password" onfocusout="lowlightInWrap(this, black)" onfocus="highlightInWrap(this, gray)" required>
			<div class="placeholdme_RoClass">Confirm your Password</div>
		</div>
		<!--Password-->
	</div>
<!--_Dependencies-->
<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeScript.js"></script>
<!--_Dependencies-->
</body>
</html>