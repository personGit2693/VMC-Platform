/*Import*/
import {pageRegistrationSuccessPath, elemReference_RegisterEsrs} from "./Values_Global.js";
import {smisAccountDetailsRegistered, smisAccountCredentialsRegistered, smisAccountRequested, requestRegisterSmis} from "./Request_RegisterSmis.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitRegisterSmis(controller, dataObj, controllersObj, loaderObj, serverPath){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*loaderObj.outputLoader();*/
		/*Display Loader*/		


		requestRegisterSmis(dataObj, serverPath)
		.then(requestPromise => {
			if(requestPromise === true){																	
				
				if(smisAccountDetailsRegistered === true && smisAccountCredentialsRegistered === true){
					window.location.href = pageRegistrationSuccessPath;
				}else if(smisAccountRequested === true){
					alert("Account Already registered! Contact IMISS for approval!");
					window.location.href = pageRegistrationSuccessPath;
				}else if((smisAccountDetailsRegistered !== true || smisAccountCredentialsRegistered !== true) && smisAccountRequested !== true){					
					console.log("Submit_RegisterEsrs Error occured!");
				};

				/*Remove loader*/
				/*
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderObj.id).remove();
				}
				*/
				/*Remove loader*/
			}else{				
				console.log(`Submit_RegisterEsrs Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;				
				controller(elemReference_RegisterEsrs);				
			}
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitRegisterSmis = submitRegisterSmis;
/*Declare global*/


/*Export*/
export {submitRegisterSmis, blockRequest};
/*Export*/
