/*Import*/
import {assignCNewPassword} from "./Values_Settings.js";
/*Import*/


/*Controller*/
function controller_InputPassword_AssignCNewPassword(elem){
	
	assignCNewPassword(elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputPassword_AssignCNewPassword = controller_InputPassword_AssignCNewPassword;
/*Declare Global*/


/*Export*/
export default controller_InputPassword_AssignCNewPassword;
/*Export*/