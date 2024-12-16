/*Import*/
import secretKey from "../../Global Client Side/Dummy.js";
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Export variables*/
var newPassword = null;
var resetPassword = null;
/*Export variables*/


/*Get accounts details*/
async function requestResetPassword(dataObj){
	
	const requestPromise = new Promise(function(resolve){
		
		/*Form data*/
		const fData = new FormData(); 
		fData.append("secretKey", secretKey);							
		fData.append("account_id", dataObj.account_id);		
		/*Form data*/


		/*Fetch method*/
		fetch("../Server Side/Response_ResetPassword.php", {method: "POST", body: fData})
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
				console.log("Execution Problem in Request_ResetPassword!");
				resolve(false);
			}else{
				newPassword = parseObj.newPassword;
				resetPassword = parseObj.resetPassword;
				
				resolve(true);
			}			
		});
		/*Fetch method*/
		
	});


	return await requestPromise;
};
/*Get accounts details*/


/*Export*/
export {newPassword, resetPassword, requestResetPassword};
/*Export*/