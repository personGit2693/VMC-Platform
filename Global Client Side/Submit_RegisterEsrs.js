/*Import*/
import {pageRegistrationSuccessPath, elemReference_RegisterEsrs} from "./Values_Global.js";
import {esrsAccountRequested, esrsAccountRegistered, requestRegisterEsrs} from "./Request_RegisterEsrs.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitRegisterEsrs(controller, dataObj, controllersObj, loaderObj, serverPath){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*loaderObj.outputLoader();*/
		/*Display Loader*/		


		requestRegisterEsrs(dataObj, serverPath)
		.then(requestPromise => {
			if(requestPromise === true){																	
				
				if(esrsAccountRegistered){
					window.location.href = pageRegistrationSuccessPath;
				}else if(esrsAccountRequested){
					alert("Account Already registered! Contact IMISS for approval!");
					window.location.href = pageRegistrationSuccessPath;
				}else if(esrsAccountRegistered !== true && esrsAccountRequested !== true){
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
window.submitRegisterEsrs = submitRegisterEsrs;
/*Declare global*/


/*Export*/
export {submitRegisterEsrs, blockRequest};
/*Export*/
