/*Import*/
import {newPassword, resetPassword, requestResetPassword} from "./Request_ResetPassword.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitResetPassword(controller, dataObj, controllersObj, loaderObj){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*
		loaderObj.outputLoader();
		*/
		/*Display Loader*/


		requestResetPassword(dataObj)
		.then(requestPromise => {
			if(requestPromise === true){
				
				alert(`New Password for Employee:${dataObj.account_id} "${newPassword}" `);

				/*Remove loader*/
				/*				
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderObj.id).remove();
				}
				*/				
				/*Remove loader*/
			}else{				
				console.log(`Submit_GetAccounts Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;
				/*				
				controller(elemReference_GetAccounts);				
				*/
			}
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitResetPassword = submitResetPassword;
/*Declare global*/


/*Export*/
export {submitResetPassword, blockRequest};
/*Export*/
