<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../Styles/Page_Login.css">
	<link rel="shortcut icon" href="../../src/vmclogo.png">		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">			
</head>
<body>
	
	<div id="loginSection">
		<div id="vmcLogoWrap">
			<img src="../../src/vmclogo.png">
		</div>
		<div id="loginWin_ID">
			<div id="signInTxt_ID">Sign in</div>
			<div id="stayTxt_ID">VMC Web Application Center</div>

			<div class="cusInputs_RoClass" id="usernameInputWrap">
				<input type="text" onfocusout="lowlightInWrap(this, 'black')" onfocus="highlightInWrap(this, '#285FF3')" onkeyup="controller_InputText_AssignEmpId(this)" autocomplete="off" id="empId" required>
				<div class="placeholdme_RoClass">Employee I.D</div>
			</div>

			<div class="cusInputs_RoClass" id="passwordInputWrap">
				<input type="password" onfocusout="lowlightInWrap(this, 'black')" onfocus="highlightInWrap(this, '#285FF3')" onkeyup="controller_InputText_AssignPassword(this)" autocomplete="off" id="password" required>
				<div class="placeholdme_RoClass">Password</div>
			</div>
						
			<button class="signInBtn-Class" id="signInBtn" onclick="controller_Btn_Login(this)">Sign in</button>

			<div id="noAccountYetTxt">No account yet? click here to <a href="../../Module Registration/Pages/Page_Registration.php">Register</a></div>
		</div>		
	</div>


	<!--Footer Section-->	
	<hr class="linethis_RoClass">
	<div class="footerWrap_RoClass lightMode">
		<span class="footerTxt_RoClass">&copy; Valenzuela Medical Center.</span>
	</div>
	<!--Footer Section-->


	<!--Loader-->
	<div class="thisIsJapan_RoClass" style="--putOnTop: 1;"></div>
	<div class="spinnerLoad_RoClass" style="--topSpinBlurrer: 1;">
		<img src="../../src/Spinner.gif">
	</div>
	<!--Loader-->


	<!--Javascripts-->
	<!---Dependencies-->
	<script type="text/javascript" src="../../Rogrid/Scripts/RogridNodeScript.js?v1"></script>
	<!---Dependencies-->

	<!---Controllers-->
	<script type="module" src="../Client Side/Controller_InputText_AssignEmpId.js"></script>
	<script type="module" src="../Client Side/Controller_InputText_AssignPassword.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_Login.js"></script>
	<!---Controllers-->

	<!---Executor-->
	<script type="module" src="../Client Side/Executor_Page_Login.js"></script>
	<!---Executor-->
	<!--Javascripts-->	
</body>
</html>