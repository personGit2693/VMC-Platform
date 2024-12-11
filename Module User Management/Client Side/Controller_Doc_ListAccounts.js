/*Import*/
import {assignStartRowIndex, resetPageNumber, displayRowNum, startRowIndex, sortAccountScending, sortAccountBy, searchAccount ,assignElemReference_GetAccounts} from "./Values_UserManagement.js";
import {submitGetAccounts} from "./Submit_GetAccounts.js";
import outputAccountsDetailsTr from "./Output_AccountsDetailsTr.js";
import outputAccountsDetailsLoader from "./Output_AccountsDetailsLoader.js";
/*Import*/


/*Controller*/
function controller_Doc_ListAccounts(elem){
	
	assignElemReference_GetAccounts(elem);

	resetPageNumber();

	assignStartRowIndex("");
	
	const dataObj = {displayRowNum, startRowIndex, sortAccountScending, sortAccountBy, searchAccount};
	const controllersObj = {outputAccountsDetailsTr};
	const loaderObj = {outputLoader: outputAccountsDetailsLoader, id:"accountLoader"};	

	

	submitGetAccounts(controller_Doc_ListAccounts, dataObj, controllersObj, loaderObj);
}
/*Controller*/


/*Declare Global*/
window.controller_Doc_ListAccounts = controller_Doc_ListAccounts;
/*Declare Global*/


/*Export*/
export default controller_Doc_ListAccounts;
/*Export*/