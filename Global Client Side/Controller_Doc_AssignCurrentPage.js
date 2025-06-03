/*Import*/
import {assignCurrentPage} from "./Values_Global.js";
/*Import*/


/*Controller*/
function controller_Doc_AssignCurrentPage(newValue){
	assignCurrentPage(newValue);
}
/*Controller*/


/*Declare Global*/
window.controller_Doc_AssignCurrentPage = controller_Doc_AssignCurrentPage;
/*Declare Global*/


/*Export*/
export default controller_Doc_AssignCurrentPage;
/*Export*/