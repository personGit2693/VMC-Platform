/*Import*/
import {registerToEndpoint} from "./Values_Registration.js";
import {smisEndpoint, esrsEndpoint, globalKey} from "../../Global Client Side/Values_Global.js";
/*Import*/


/*Component*/
function AccessBoxDetails(){

	let registrationController = "";
	if(registerToEndpoint == esrsEndpoint){
		registrationController = "controller_Btn_RegisterEsrs(this)";
	}else if(registerToEndpoint == smisEndpoint){
		registrationController = "controller_Btn_RegisterSmis(this)";
	}

	let accessBoxDetails = `
		<div class="lock-icon-container"><img src="../../src/lock-icon.webp"></div>
		<div class="permission-message">You need permission to access this application</div>
		<div class="access-invitation">Want in? Click the "Request Access" button below.</div>
		<div class="user-status">You are logged in as <b>${globalKey.account_fname} ${globalKey.account_lname}</b>.</div>

		<div class="textarea-container">
			<textarea class="message-input" rows="1" oninput="controller_Textarea_ResizeTextArea(this)" placeholder="Message (optional)"></textarea>
		</div>

		<button class="request-button" onclick="${registrationController}">Request Access</button>
	`;

	return accessBoxDetails;
}
/*Component*/


/*Export*/
export default AccessBoxDetails;
/*Export*/