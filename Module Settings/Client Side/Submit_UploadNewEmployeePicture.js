/*Import*/
import {elemReference_UploadNewEmployeePicture} from "./Values_Settings.js";
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
		loaderObj.outputPageLoader();		
		/*Display Loader*/


		requestUploadNewEmployeePicture(dataObj)
		.then(requestPromise => {
			if(requestPromise === true){

				window.location.href = "";

				/*Remove loader*/
				if(document.getElementById(loaderObj.id1) !== null){
					
					document.getElementById(loaderObj.id1).remove();
				}

				if(document.getElementById(loaderObj.id2) !== null){
					
					document.getElementById(loaderObj.id2).remove();
				}						
				/*Remove loader*/
			}else{				
				console.log(`Submit_UploadNewEmployeePicture Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;
							
				controller(elemReference_UploadNewEmployeePicture);				
				
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
