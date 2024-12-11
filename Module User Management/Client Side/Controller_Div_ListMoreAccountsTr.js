/*Import*/
import {assignStartRowIndex, displayRowNum, startRowIndex, sortAccountScending, sortAccountBy, searchAccount, assignElemReference_GetAccounts} from "./Values_UserManagement.js";
import {submitGetAccounts} from "./Submit_GetAccounts.js";
import outputAccountsDetailsMoreTr from "./Output_AccountsDetailsMoreTr.js";
import outputAccountsDetailsMoreLoader from "./Output_AccountsDetailsMoreLoader.js";
/*Import*/


/*Controller*/
function controller_Div_ListMoreAccountsTr(elem){
	
	if((elem.scrollTop + elem.offsetHeight) >= elem.scrollHeight){		

		if(blockRequest === false){		

			assignElemReference_GetAccounts(elem);

			assignStartRowIndex(true);

			const dataObj = {displayRowNum, startRowIndex, sortAccountScending, sortAccountBy, searchAccount};
			const controllersObj = {outputAccountsDetailsMoreTr};
			const loaderObj = {outputLoader: outputAccountsDetailsMoreLoader, id:"moreAccountsLoader"};				

			submitGetAccounts(controller_Div_ListMoreAccountsTr, dataObj, controllersObj, loaderObj);
		}		
	}	
}
/*Controller*/


/*Declare Global*/
window.controller_Div_ListMoreAccountsTr = controller_Div_ListMoreAccountsTr;
/*Declare Global*/


/*Export*/
export default controller_Div_ListMoreAccountsTr;
/*Export*/