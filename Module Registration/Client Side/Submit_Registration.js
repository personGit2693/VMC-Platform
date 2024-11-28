/*Import*/
import {submitRegistrationBtn} from "./Elements_Page_Registration.js";
import {elemReference_Registration} from "./Values_Registration.js";
import {endpoint, requestRegistration, addedAccount} from "./Request_Registration.js";
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
					window.location.href = endpoint;
				}else if(addedAccount == 0 || addedAccount === null){					
					alert("Account Not Added");
				};				

				/*Remove loader*/
				/*				
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderObj.id).remove();
				}
				*/
				/*Remove loader*/
			}else{
				alert("Employee Number already taken");
				console.log(`Submit_Registration Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;				
				controller(elemReference_Registration);				
			}

			submitRegistrationBtn.innerText = "Create Account";
			submitRegistrationBtn.disabled = false;			
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
