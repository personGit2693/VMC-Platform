/*Import*/
import {suffixDetails_Array} from "./Request_Suffixes.js";
import gatewaySuffixes from "./Gateway_Suffixes.js";
/*Import*/


/*Export variables*/
var blockRequest = false;
/*Export variables*/


/*Submit Function*/
function submitSuffixes(output, boxLoader, boxLoader_Id, searchSuffix){

	if(blockRequest === false){

		blockRequest = true;

		boxLoader();

		gatewaySuffixes(searchSuffix)
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
window.submitSuffixes = submitSuffixes;
/*Declare global*/


/*Export*/
export {submitSuffixes, blockRequest};
/*Export*/
