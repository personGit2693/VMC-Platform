/*Import*/
import {requestSections} from "./Request_Sections.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
/*Export variables*/


/*Submit Function*/
function submitSections(output, boxLoader, boxLoader_Id, searchSection){

	if(blockRequest === false){

		blockRequest = true;

		boxLoader();

		requestSections(searchSection)
		.then(requestPromise => {

			if(document.getElementById(boxLoader_Id) !== null){					
				document.getElementById(boxLoader_Id).remove();
			}

			
			if(requestPromise === true){												
				output();				
			}

			blockRequest = false;
		});
	}
}
/*Submit Function*/


/*Declare global*/
window.submitSections = submitSections;
/*Declare global*/


/*Export*/
export {submitSections, blockRequest};
/*Export*/
