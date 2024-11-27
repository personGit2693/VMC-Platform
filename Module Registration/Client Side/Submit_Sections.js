/*Import*/
import {elemReference_GetSections} from "./Values_Registration.js";
import {requestSections, sections_Array} from "./Request_Sections.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitSections(controller, dataObj, controllersObj, loaderObj){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*loaderObj.outputLoader();*/
		/*Display Loader*/		


		requestSections(dataObj)
		.then(requestPromise => {
			
			if(requestPromise === true){													

				controllersObj.outputSectionOpt();

				/*Remove loader*/
				/*				
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderId).remove();
				}
				*/
				/*Remove loader*/
			}else{

				console.log(`Submit_Sections Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;				
				controller(elemReference_GetSections);				
			}			
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitSections = submitSections;
/*Declare global*/


/*Export*/
export {submitSections, blockRequest};
/*Export*/
