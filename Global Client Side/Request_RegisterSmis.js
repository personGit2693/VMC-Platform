/*Import*/
import secretKey from "./Dummy.js";
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Export variables*/
var smisAccountDetailsRegistered = null;
var smisAccountCredentialsRegistered = null;
var smisAccountRequested = null;
/*Export variables*/


/*Register SMIS new account*/
async function requestRegisterSmis(dataObj, serverPath){
	
	const requestPromise = new Promise(function(resolve){
		
		/*Form data*/
		const fData = new FormData(); 
		fData.append("secretKey", secretKey);							
		fData.append("account_id", dataObj.globalKey.account_id);
		fData.append("account_password", dataObj.globalKey.account_password);
		fData.append("account_fname", dataObj.globalKey.account_fname);
		fData.append("account_mname", dataObj.globalKey.account_mname);
		fData.append("account_lname", dataObj.globalKey.account_lname);
		fData.append("account_suffix", dataObj.globalKey.account_suffix);
		fData.append("account_identifier", dataObj.globalKey.account_identifier);
		fData.append("account_section", dataObj.globalKey.account_section);
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
			}else if(parseObj.smisDbConnection.serverConnection !== null){
				console.log("SMIS Connection Lost!");
				resolve(false);
			}else if(parseObj.smisDbConnection.selectedPdoConn == null){
				console.log("SMIS Connection Incorrect!");
				resolve(false);
			}else if(parseObj.validToken !== null){
				console.log(parseObj.validToken);
				resolve(false);				
			}else if(parseObj.execution !== true){
				console.log("Execution Problem in Request_RegisterSmis!");
				resolve(false);
			}else{
				smisAccountDetailsRegistered = parseObj.smisAccountDetailsRegistered;	
				smisAccountCredentialsRegistered = parseObj.smisAccountCredentialsRegistered;
				smisAccountRequested = parseObj.smisAccountRequested;							
				
				resolve(true);
			}			
		});
		/*Fetch method*/
	});


	return await requestPromise;
};
/*Register SMIS new account*/


/*Export*/
export {smisAccountDetailsRegistered, smisAccountCredentialsRegistered, smisAccountRequested, requestRegisterSmis};
/*Export*/