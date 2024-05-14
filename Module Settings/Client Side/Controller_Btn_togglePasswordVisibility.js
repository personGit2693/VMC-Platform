/*Import*/
import {passwordInput} from "./Elements_Page_Setttings.js";
import {passwordInput} from "./Values_Settings.js";
import controller_Docs_SetMode from './Controller_Docs_SetMode.js';
/*Import*/


/*Controller*/
function controller_Btn_togglePasswordVisibility(inputId) {
	const passwordInput = document.getElementById(inputId);

	if (passwordInput.type === "password"){
		passwordInput.type = "text";
	}

	else{
		passwordInput.type ="password";
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_togglePasswordVisibility = controller_Btn_togglePasswordVisibility;
/*Declare Global*/


/*Export*/
export default controller_Btn_togglePasswordVisibility;
/*Export*/