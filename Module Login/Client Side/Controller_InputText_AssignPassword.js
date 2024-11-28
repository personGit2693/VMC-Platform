/*Import*/
import {assignValue_Password} from "./Values_Login.js";
/*Import*/


/*Controller*/
function controller_InputText_AssignPassword(elem){	
	assignValue_Password(elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_AssignPassword = controller_InputText_AssignPassword;
/*Declare Global*/


/*Export*/
export default controller_InputText_AssignPassword;
/*Export*/