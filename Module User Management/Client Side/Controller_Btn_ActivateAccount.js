/*Import*/
import {globalKey} from "../../Global Client Side/Values_Global.js";
import {accountActivated, accountDeactivated, assignElemReference_ActivateAccount} from "./Values_UserManagement.js";
import {submitActivateAccount} from "./Submit_ActivateAccount.js";
import controller_Doc_ListAccounts from "./Controller_Doc_ListAccounts.js";
/*Import*/


/*Controller*/
function controller_Btn_ActivateAccount(elem){
	
	assignElemReference_ActivateAccount(elem);	

	const accountDetails_Obj = JSON.parse(decodeURIComponent(escape(atob(elem.value))));
	
	const dataObj = {account_id: accountDetails_Obj.account_id, account_status: accountDetails_Obj.account_status, accountActivated, accountDeactivated};
	const controllersObj = {controller_Doc_ListAccounts};
	const loaderObj = {};	

	

	submitActivateAccount(controller_Btn_ActivateAccount, dataObj, controllersObj, loaderObj);
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_ActivateAccount = controller_Btn_ActivateAccount;
/*Declare Global*/


/*Export*/
export default controller_Btn_ActivateAccount;
/*Export*/