/*Import*/
import {assignOldPassword} from "./Values_Settings.js";
/*Import*/


/*Controller*/
function controller_InputPassword_AssignOldPassword(elem){
	
	assignOldPassword(elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputPassword_AssignOldPassword = controller_InputPassword_AssignOldPassword;
/*Declare Global*/


/*Export*/
export default controller_InputPassword_AssignOldPassword;
/*Export*/