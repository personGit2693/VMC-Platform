/*Import*/
import {assignGlobalKey, elemReference_GetLoginDetails} from "./Values_Global.js";
import {endpoint, validAccount, globalKey, requestGetLoginDetails} from "./Request_GetLoginDetails.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitGetLoginDetails(controller, dataObj, controllersObj, loaderObj, serverPath, logoutPath){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*loaderObj.outputLoader();*/
		/*Display Loader*/		


		requestGetLoginDetails(dataObj, serverPath)
		.then(requestPromise => {
			if(requestPromise === true){													

				if(validAccount === true){
					assignGlobalKey(globalKey);					

					if("assignRegisterToEndpoint" in controllersObj){
						controllersObj.assignRegisterToEndpoint(endpoint);
					}

					if("outputAccessBoxDetails" in controllersObj){
						controllersObj.outputAccessBoxDetails();
					}

					if("outputUserLoginDetails" in controllersObj){
						controllersObj.outputUserLoginDetails();
					}

					if("outputGreetingUserDetails" in controllersObj){
						controllersObj.outputGreetingUserDetails();
					}

					if("controller_Doc_DisplayProfilePic" in controllersObj){
						controllersObj.controller_Doc_DisplayProfilePic();
					}

					if("outputNavigationMenu" in controllersObj){
						controllersObj.outputNavigationMenu();
					}					
				}else{
					window.location.href = logoutPath;
				}
				

				/*Remove loader*/
				/*
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderObj.id).remove();
				}
				*/
				/*Remove loader*/
			}else{				
				console.log(`Submit_GetLoginDetails Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;				
				controller(elemReference_GetLoginDetails);				
			}
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitGetLoginDetails = submitGetLoginDetails;
/*Declare global*/


/*Export*/
export {submitGetLoginDetails, blockRequest};
/*Export*/
