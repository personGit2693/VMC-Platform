/*Import*/
import {submitRegistrationBtn} from "./Elements_Page_Registration.js";
import {elemReference_Registration} from "./Values_Registration.js";
import {requestRegistration, addedAccount} from "./Request_Registration.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitRegistration(controller, dataObj, controllersObj, loaderObj){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*loaderObj.outputLoader();*/
		/*Display Loader*/		


		requestRegistration(dataObj)
		.then(requestPromise => {
			
			if(requestPromise === true){													

				if(addedAccount != 0){
					alert("Account Added");
				}else if(addedAccount == 0){
					alert("Account Not Added");
				};

				submitRegistrationBtn.innerText = "Create Account";
				submitRegistrationBtn.disabled = false;

				/*Remove loader*/
				/*				
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderObj.id).remove();
				}
				*/
				/*Remove loader*/
			}else{

				console.log(`Submit_Registration Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;				
				controller(elemReference_Registration);				
			}			
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitRegistration = submitRegistration;
/*Declare global*/


/*Export*/
export {submitRegistration, blockRequest};
/*Export*/
