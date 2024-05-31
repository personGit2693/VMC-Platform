/*Import*/
import {requestJobTitles} from "./Request_JobTitles.js";
/*Import*/


/*Gateway*/
async function gatewayJobTitles(searchJobTitle){
	
	const gatewayPromise = new Promise(function(resolve){

		requestJobTitles(searchJobTitle)
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
window.gatewayJobTitles = gatewayJobTitles;
/*Declare global*/


/*Export*/
export default gatewayJobTitles;
/*Export*/