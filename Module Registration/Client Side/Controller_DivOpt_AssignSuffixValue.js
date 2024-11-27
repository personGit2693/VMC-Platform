/*Import*/
import {assignValue_EmpSuffix} from "./Values_Registration.js";
/*Import*/


/*Controller*/
function controller_DivOpt_AssignSuffixValue(elem){	
	assignValue_EmpSuffix(elem.querySelector(".optValue_RoClass").value);
}
/*Controller*/


/*Declare Global*/
window.controller_DivOpt_AssignSuffixValue = controller_DivOpt_AssignSuffixValue;
/*Declare Global*/


/*Export*/
export default controller_DivOpt_AssignSuffixValue;
/*Export*/