/*Import*/
import secretKey from "../../Global Client Side/Dummy.js";
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Export variables*/
var validEmpId = null;
var validAccount = null;
var accountDetails = null;
var correctPassword = null;
var endpoint = null;
/*Export variables*/


/*Login*/
async function requestLogin(dataObj){
	
	const requestPromise = new Promise(function(resolve){
		
		/*Form data*/
		const fData = new FormData(); 
		fData.append("secretKey", secretKey);		
		fData.append("empId", dataObj.empId);	
		fData.append("password", dataObj.password);				
		/*Form data*/


		/*Fetch method*/
		fetch("../Server Side/Response_Login.php", {method: "POST", body: fData})
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
				console.log("Execution Problem in Request_Login!");
				resolve(false);
			}else{
				
				validEmpId = parseObj.validEmpId;				
				validAccount = parseObj.validAccount;
				accountDetails = parseObj.accountDetails;
				correctPassword = parseObj.correctPassword;	
				endpoint = parseObj.endpoint;						
				resolve(true);
			}			
		});
		/*Fetch method*/
		
	});


	return await requestPromise;
};
/*Login*/


/*Export*/
export {validEmpId, validAccount, endpoint, requestLogin};
/*Export*/