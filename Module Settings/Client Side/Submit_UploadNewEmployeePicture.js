/*Import*/
import {newEmpPicName, requestUploadNewEmployeePicture} from "./Request_UploadNewEmployeePicture.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitUploadNewEmployeePicture(controller, dataObj, controllersObj, loaderObj){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*
		loaderObj.outputLoader();
		*/
		/*Display Loader*/


		requestUploadNewEmployeePicture(dataObj)
		.then(requestPromise => {
			if(requestPromise === true){
				
				controllersObj.controller_Doc_GetLoginDetails(window);

				alert("Account's Picture has been updated!");

				/*Remove loader*/
				/*				
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderObj.id).remove();
				}
				*/				
				/*Remove loader*/
			}else{				
				console.log(`Submit_UploadNewEmployeePicture Resolve ${requestPromise}`);
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
window.submitUploadNewEmployeePicture = submitUploadNewEmployeePicture;
/*Declare global*/


/*Export*/
export {submitUploadNewEmployeePicture, blockRequest};
/*Export*/
