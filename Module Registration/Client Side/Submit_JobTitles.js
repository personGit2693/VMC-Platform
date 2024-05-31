/*Import*/
import gatewayJobTitles from "./Gateway_JobTitles.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
/*Export variables*/


/*Submit Function*/
function submitJobTitles(output, boxLoader, boxLoader_Id, searchJobTitle){

	if(blockRequest === false){

		blockRequest = true;

		boxLoader();

		gatewayJobTitles(searchJobTitle)
		.then(gatewayPromise => {

			if(document.getElementById(boxLoader_Id) !== null){					
				document.getElementById(boxLoader_Id).remove();
			}

			
			if(gatewayPromise === true){												
				output();				
			}

			blockRequest = false;
		});
	}
}
/*Submit Function*/


/*Declare global*/
window.submitJobTitles = submitJobTitles;
/*Declare global*/


/*Export*/
export {submitJobTitles, blockRequest};
/*Export*/
