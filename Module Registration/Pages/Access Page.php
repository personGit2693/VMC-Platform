<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/Access Page.css">
	<title>Access Page</title>
</head>
<body>
	<div class="access-container">
		<div class="access-box">
			<div class="lock-icon-container"><img src="../../src/lock-icon.png"></div>
			<div class="permission-message">You need permission to access this application</div>
			<div class="access-invitation">Want in? Click the "Request Access" button below.</div>
			<div class="user-status">You are logged in as <b>myemail@gmail.com</b>.</div>

			<div class="textarea-container">
				<textarea class="message-input" rows="1" oninput="controller_Textarea_ResizeTextArea(this)" placeholder="Message (optional)"></textarea>
			</div>

			<button class="request-button" onclick="controller_Btn_RequestAccess()">Request Access</button>
		</div>
	</div>

	<!--Javascripts-->
	
	<!--_Controllers-->
	<script type="module" src="../Client Side/Controller_Textarea_ResizeTextArea.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_RequestAccess.js"></script>
	<!--_Controllers-->

	<!--Javascripts-->
</body>
</html>