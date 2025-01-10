/*Import*/
import secretKey from "../../Global Client Side/Dummy.js";
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Export variables*/
var accountUpdated = null;
var accountNewStatus = null;
/*Export variables*/


/*Activate Account*/
async function requestActivateAccount(dataObj){
	
	const requestPromise = new Promise(function(resolve){
		
		/*Form data*/
		const fData = new FormData(); 
		fData.append("secretKey", secretKey);							
		fData.append("account_id", dataObj.account_id);
		fData.append("account_status", dataObj.account_status);
		fData.append("accountActivated", dataObj.accountActivated);
		fData.append("accountDeactivated", dataObj.accountDeactivated);
		/*Form data*/


		/*Fetch method*/
		fetch("../Server Side/Response_ActivateAccount.php", {method: "POST", body: fData})
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
				console.log("Execution Problem in Request_ActivateAccount!");
				resolve(false);
			}else{
				accountUpdated = parseObj.accountUpdated;
				accountNewStatus = parseObj.accountNewStatus;
				
				resolve(true);
			}			
		});
		/*Fetch method*/
		
	});


	return await requestPromise;
};
/*Activate Account*/


/*Export*/
export {accountNewStatus, accountUpdated, requestActivateAccount};
/*Export*/