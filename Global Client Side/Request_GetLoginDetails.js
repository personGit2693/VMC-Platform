/*Import*/
import secretKey from "./Dummy.js";
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Export variables*/
var validAccount = null;
var globalKey = null;
var endpoint = null;
/*Export variables*/


/*Get Login Details*/
async function requestGetLoginDetails(dataObj, serverPath){
	
	const requestPromise = new Promise(function(resolve){
		
		/*Form data*/
		const fData = new FormData(); 
		fData.append("secretKey", secretKey);							
		/*Form data*/


		/*Fetch method*/
		fetch(serverPath, {method: "POST", body: fData})
		.then(res => res.json())
		.then(parseObj => {			
			if(parseObj.validAccess !== true){
				console.log("Invalid Access!");
				resolve(false);
			}else if(parseObj.vmcplatDbConnection.serverConnection !== null){
				console.log("VMC Platform Connection Lost!");
				resolve(false);
			}else if(parseObj.vmcplatDbConnection.selectedPdoConn == null){
				console.log("VMC Platform Object Connection Incorrect!");
				resolve(false);
			}else if(parseObj.validToken !== null){
				console.log(parseObj.validToken);
				resolve(false);				
			}else if(parseObj.execution !== true){
				console.log("Execution Problem in Request_GetLoginDetails!");
				resolve(false);
			}else{
				validAccount = parseObj.validAccount;				
				globalKey = parseObj.globalKey;	
				endpoint = parseObj.endpoint;			
				
				resolve(true);
			}			
		});
		/*Fetch method*/
		
	});


	return await requestPromise;
};
/*Get Login Details*/


/*Export*/
export {endpoint, globalKey, validAccount, requestGetLoginDetails};
/*Export*/