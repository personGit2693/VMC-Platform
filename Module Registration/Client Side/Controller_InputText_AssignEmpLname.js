/*Import*/
import {assignValue_EmpLname} from "./Values_Registration.js";
/*Import*/


/*Controller*/
function controller_InputText_AssignEmpLname(elem){	
	assignValue_EmpLname(elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_AssignEmpLname = controller_InputText_AssignEmpLname;
/*Declare Global*/


/*Export*/
export default controller_InputText_AssignEmpLname;
/*Export*/