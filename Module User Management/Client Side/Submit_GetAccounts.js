/*Import*/
import {accountsTableWrap} from "./Elements_Page_ManageUser.js";
import {elemReference_GetAccounts} from "./Values_UserManagement.js";
import {accounts, requestGetAccounts} from "./Request_GetAccounts.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitGetAccounts(controller, dataObj, controllersObj, loaderObj){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		loaderObj.outputLoader();
		/*Display Loader*/


		requestGetAccounts(dataObj)
		.then(requestPromise => {
			if(requestPromise === true){
				
				if(elemReference_GetAccounts === accountsTableWrap && dataObj.pageNumber > 1 && accounts.length == 0){
					controllersObj.assignStartRowIndex(false);
				}

				if("outputAccountsDetailsTr" in controllersObj){
					controllersObj.outputAccountsDetailsTr();
				}

				if("outputAccountsDetailsMoreTr" in controllersObj){
					controllersObj.outputAccountsDetailsMoreTr();
				}

				/*Remove loader*/				
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderObj.id).remove();
				}				
				/*Remove loader*/
			}else{				
				console.log(`Submit_GetAccounts Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;				
				controller(elemReference_GetAccounts);				
			}
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitGetAccounts = submitGetAccounts;
/*Declare global*/


/*Export*/
export {submitGetAccounts, blockRequest};
/*Export*/
