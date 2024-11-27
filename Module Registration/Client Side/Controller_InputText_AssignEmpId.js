/*Import*/
import {assignValue_EmpId} from "./Values_Registration.js";
/*Import*/


/*Controller*/
function controller_InputText_AssignEmpId(elem){	
	assignValue_EmpId(elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_AssignEmpId = controller_InputText_AssignEmpId;
/*Declare Global*/


/*Export*/
export default controller_InputText_AssignEmpId;
/*Export*/