/*Import*/
import {signInBtn} from "./Elements_Login.js";
import {elemReference_Login} from "./Values_Login.js";
import {validEmpId, validAccount, endpoint, requestLogin} from "./Request_Login.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitLogin(controller, dataObj, controllersObj, loaderObj){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*loaderObj.outputLoader();*/
		/*Display Loader*/		


		requestLogin(dataObj)
		.then(requestPromise => {
			if(requestPromise === true){													

				if(validEmpId != true){
					alert("Employee I.D is not yet registered");
				}else if(validAccount != true){
					alert("Account is not valid");
				}else{
					window.location.href = endpoint;
				}

				/*Remove loader*/
				/*
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderObj.id).remove();
				}
				*/
				/*Remove loader*/
			}else{				
				console.log(`Submit_Login Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;				
				controller(elemReference_Login);				
			}

			signInBtn.innerText = "Sign In";
			signInBtn.disabled = false;			
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitLogin = submitLogin;
/*Declare global*/


/*Export*/
export {submitLogin, blockRequest};
/*Export*/
