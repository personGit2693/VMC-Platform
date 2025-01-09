/*Import*/
import {elemReference_UpdatePassword} from "./Values_Settings.js";
import {accountCorrectPassword, accountUpdated, accountNewPassword, requestUpdatePassword} from "./Request_UpdatePassword.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitUpdatePassword(controller, dataObj, controllersObj, loaderObj){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		loaderObj.outputPageLoader();
		/*Display Loader*/


		requestUpdatePassword(dataObj)
		.then(requestPromise => {
			if(requestPromise === true){

				if(accountUpdated !== 0){
					window.location.href = "";
				}else if(accountUpdated === 0){
					alert("No changes made on your password");
				}
				

				/*Remove loader*/
				if(document.getElementById(loaderObj.id1) !== null){
					
					document.getElementById(loaderObj.id1).remove();
				}

				if(document.getElementById(loaderObj.id2) !== null){
					
					document.getElementById(loaderObj.id2).remove();
				}
				/*Remove loader*/
			}else{				
				console.log(`Submit_UpdatePassword Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;
							
				controller(elemReference_UpdatePassword);				
				
			}
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitUpdatePassword = submitUpdatePassword;
/*Declare global*/


/*Export*/
export {submitUpdatePassword, blockRequest};
/*Export*/
