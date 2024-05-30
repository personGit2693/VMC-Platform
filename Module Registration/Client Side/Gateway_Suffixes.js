/*Import*/
import {requestSuffixes} from "./Request_Suffixes.js";
/*Import*/


/*Gateway*/
async function gatewaySuffixes(searchSuffix){
	
	const gatewayPromise = new Promise(function(resolve){

		requestSuffixes(searchSuffix)
		.then(requestPromise => {

			if(requestPromise === true){
				
				resolve(true);
			}
		});
	});

	return await gatewayPromise;
}
/*Gateway*/


/*Declare global*/
window.gatewaySuffixes = gatewaySuffixes;
/*Declare global*/


/*Export*/
export default gatewaySuffixes;
/*Export*/