/*Import*/
import {elemReference_GetApps} from "./Values_Global.js";
import {apps, requestGetApps} from "./Request_GetApps.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
var pendingSubmit = 0;
/*Export variables*/


/*Submit Function*/
function submitGetApps(controller, dataObj, controllersObj, loaderObj, serverPath){	

	if(blockRequest === false){

		blockRequest = true;

		/*Display Loader*/
		/*loaderObj.outputLoader();*/
		/*Display Loader*/		


		requestGetApps(dataObj, serverPath)
		.then(requestPromise => {
			if(requestPromise === true){																	
				
				controllersObj.outputWebAppDiv();

				/*Remove loader*/
				/*
				if(document.getElementById(loaderObj.id) !== null){
					
					document.getElementById(loaderObj.id).remove();
				}
				*/
				/*Remove loader*/
			}else{				
				console.log(`Submit_GetApps Resolve ${requestPromise}`);
			}			

			blockRequest = false;			

			if(pendingSubmit !== 0){

				pendingSubmit--;				
				controller(elemReference_GetApps);				
			}
		});
	}else if(blockRequest === true){

		pendingSubmit++;
	}
}
/*Submit Function*/


/*Declare global*/
window.submitGetApps = submitGetApps;
/*Declare global*/


/*Export*/
export {submitGetApps, blockRequest};
/*Export*/
