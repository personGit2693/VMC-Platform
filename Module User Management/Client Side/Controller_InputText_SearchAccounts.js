/*Import*/
import {assignSearchAccount, pageNumber, assignStartRowIndex, resetPageNumber, displayRowNum, startRowIndex, sortAccountScending, sortAccountBy, searchAccount ,assignElemReference_GetAccounts} from "./Values_UserManagement.js";
import {submitGetAccounts} from "./Submit_GetAccounts.js";
import outputAccountsDetailsTr from "./Output_AccountsDetailsTr.js";
import outputAccountsDetailsLoader from "./Output_AccountsDetailsLoader.js";
/*Import*/


/*Controller*/
function controller_InputText_SearchAccounts(elem){
	
	assignElemReference_GetAccounts(elem);

	resetPageNumber();

	assignStartRowIndex("");

	assignSearchAccount(elem.value);
	
	const dataObj = {pageNumber, displayRowNum, startRowIndex, sortAccountScending, sortAccountBy, searchAccount};
	const controllersObj = {outputAccountsDetailsTr};
	const loaderObj = {outputLoader: outputAccountsDetailsLoader, id:"accountLoader"};	

	submitGetAccounts(controller_InputText_SearchAccounts, dataObj, controllersObj, loaderObj);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_SearchAccounts = controller_InputText_SearchAccounts;
/*Declare Global*/


/*Export*/
export default controller_InputText_SearchAccounts;
/*Export*/