/*Import*/
import secretKey from "../../Global Client Side/Dummy.js";
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Export variables*/
var accounts = null;
/*Export variables*/


/*Get accounts details*/
async function requestGetAccounts(dataObj){
	
	const requestPromise = new Promise(function(resolve){
		
		/*Form data*/
		const fData = new FormData(); 
		fData.append("secretKey", secretKey);							
		fData.append("searchAccount", dataObj.searchAccount);
		fData.append("sortAccountBy", dataObj.sortAccountBy);
		fData.append("sortAccountScending", dataObj.sortAccountScending);
		fData.append("startRowIndex", dataObj.startRowIndex);
		fData.append("displayRowNum", dataObj.displayRowNum);
		/*Form data*/


		/*Fetch method*/
		fetch("../Server Side/Response_GetAccounts.php", {method: "POST", body: fData})
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
				console.log("Execution Problem in Request_GetAccounts!");
				resolve(false);
			}else{
				accounts = parseObj.accounts;
				
				resolve(true);
			}			
		});
		/*Fetch method*/
		
	});


	return await requestPromise;
};
/*Get accounts details*/


/*Export*/
export {accounts, requestGetAccounts};
/*Export*/