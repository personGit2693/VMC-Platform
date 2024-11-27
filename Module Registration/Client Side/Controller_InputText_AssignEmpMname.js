/*Import*/
import {assignValue_EmpMname} from "./Values_Registration.js";
/*Import*/


/*Controller*/
function controller_InputText_AssignEmpMname(elem){	
	assignValue_EmpMname(elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_AssignEmpMname = controller_InputText_AssignEmpMname;
/*Declare Global*/


/*Export*/
export default controller_InputText_AssignEmpMname;
/*Export*/