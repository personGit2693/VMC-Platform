/*Import*/
import {assignNewPassword} from "./Values_Settings.js";
/*Import*/


/*Controller*/
function controller_InputPassword_AssignNewPassword(elem){
	
	assignNewPassword(elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputPassword_AssignNewPassword = controller_InputPassword_AssignNewPassword;
/*Declare Global*/


/*Export*/
export default controller_InputPassword_AssignNewPassword;
/*Export*/