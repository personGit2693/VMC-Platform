/*Import*/
import {accountsTableWrap} from "./Elements_Page_ManageUser.js";
import {elemReference_ActivateAccount} from "./Values_UserManagement.js";
import {accountUpdated, accountNewStatus, requestActivateAccount} from "./Request_ActivateAccount.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitActivateAccount(controller, dataObj, controllersObj, loaderObj){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*loaderObj.outputLoader();*/
		/*Display Loader*/


		requestActivateAccount(dataObj)
		.then(requestPromise => {
			if(requestPromise === true){							

				if(accountUpdated !== 0 && accountUpdated !== null){

					let accountNewStatus_Result = "";

					if(accountNewStatus == dataObj.accountActivated){
						accountNewStatus_Result = "Activated";
					}else if(accountNewStatus == dataObj.accountDeactivated){
						accountNewStatus_Result = "Deactivated";
					}

					alert(`${dataObj.account_id} has been ${accountNewStatus_Result}`);
				}

				controllersObj.controller_Doc_ListAccounts(elemReference_ActivateAccount);

				/*Remove loader*/
				/*				
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderObj.id).remove();
				}
				*/				
				/*Remove loader*/
			}else{				
				console.log(`Submit_ActivateAccount Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;				
				controller(elemReference_ActivateAccount);
			}
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitActivateAccount = submitActivateAccount;
/*Declare global*/


/*Export*/
export {submitActivateAccount, blockRequest};
/*Export*/
