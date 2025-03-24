/*Import*/
import {pageRegistrationSuccessPath, elemReference_RegisterAbtc} from "./Values_Global.js";
import {requestRegisterAbtc, abtcAccountRegistered, abtcAccountRequested} from "./Request_RegisterAbtc.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitRegisterAbtc(controller, dataObj, controllersObj, loaderObj, serverPath){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*loaderObj.outputLoader();*/
		/*Display Loader*/		


		requestRegisterAbtc(dataObj, serverPath)
		.then(requestPromise => {
			if(requestPromise === true){																	
				
				if(abtcAccountRegistered){
					window.location.href = pageRegistrationSuccessPath;
				}else if(abtcAccountRequested){
					alert("Account Already registered! Contact IMISS for approval!");
					window.location.href = pageRegistrationSuccessPath;
				}else if(abtcAccountRegistered !== true && abtcAccountRequested !== true){
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
				controller(elemReference_RegisterAbtc);				
			}
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitRegisterAbtc = submitRegisterAbtc;
/*Declare global*/


/*Export*/
export {submitRegisterAbtc, blockRequest};
/*Export*/
