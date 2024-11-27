/*Import*/
import {assignValue_EmpSection} from "./Values_Registration.js";
/*Import*/


/*Controller*/
function controller_DivOpt_AssignSectionValue(elem){	
	assignValue_EmpSection(elem.querySelector(".optValue_RoClass").value);
}
/*Controller*/


/*Declare Global*/
window.controller_DivOpt_AssignSectionValue = controller_DivOpt_AssignSectionValue;
/*Declare Global*/


/*Export*/
export default controller_DivOpt_AssignSectionValue;
/*Export*/