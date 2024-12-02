/*Import*/
import secretKey from "../../Global Client Side/Dummy.js";
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Export variables*/
var addedAccount = null;
var endpoint = null;
/*Export variables*/


/*Get Monitoring*/
async function requestRegistration(dataObj){
	
	const requestPromise = new Promise(function(resolve){
		
		/*Form data*/
		const sectionDetailsObj = JSON.parse(decodeURIComponent(atob(dataObj.empSection)));		

		const fData = new FormData(); 
		fData.append("secretKey", secretKey);		
		fData.append("empId", dataObj.empId);				
		fData.append("empFname", dataObj.empFname);
		fData.append("empMname", dataObj.empMname);
		fData.append("empLname", dataObj.empLname);
		fData.append("empSuffix", dataObj.empSuffix);
		fData.append("empSection", sectionDetailsObj.office);
		fData.append("empPassword", dataObj.empPassword);
		/*Form data*/


		/*Fetch method*/
		fetch("../Server Side/Response_Registration.php", {method: "POST", body: fData})
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
			}else if(parseObj.validToken){
				console.log(parseObj.validToken);
				resolve(false);				
			}else if(parseObj.execution !== true){
				console.log("Execution Problem in Request_Registration!");
				resolve(false);
			}else{
				
				addedAccount = parseObj.addedAccount;
				endpoint = parseObj.endpoint;			
				resolve(true);
			}			
		});
		/*Fetch method*/
		
	});


	return await requestPromise;
};
/*Get Monitoring*/


/*Export*/
export {endpoint, requestRegistration, addedAccount};
/*Export*/