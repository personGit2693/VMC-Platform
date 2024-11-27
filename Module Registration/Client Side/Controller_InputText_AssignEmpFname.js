/*Import*/
import {assignValue_EmpFname} from "./Values_Registration.js";
/*Import*/


/*Controller*/
function controller_InputText_AssignEmpFname(elem){	
	assignValue_EmpFname(elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_AssignEmpFname = controller_InputText_AssignEmpFname;
/*Declare Global*/


/*Export*/
export default controller_InputText_AssignEmpFname;
/*Export*/