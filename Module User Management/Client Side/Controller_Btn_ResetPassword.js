/*Import*/
import {submitResetPassword} from "./Submit_ResetPassword.js";
/*Import*/


/*Controller*/
function controller_Btn_ResetPassword(elem){
	
	/*assignElemReference_GetLoginDetails(elem);*/

	const dataObj = {account_id:elem.value};
	const controllersObj = {};
	const loaderObj = {};	

	submitResetPassword(controller_Btn_ResetPassword, dataObj, controllersObj, loaderObj);
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_ResetPassword = controller_Btn_ResetPassword;
/*Declare Global*/


/*Export*/
export default controller_Btn_ResetPassword;
/*Export*/