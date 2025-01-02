/*Import*/
import secretKey from "../../Global Client Side/Dummy.js";
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Export variables*/
var newEmpPicName = null;
/*Export variables*/


/*Get accounts details*/
async function requestUploadNewEmployeePicture(dataObj){
	
	const requestPromise = new Promise(function(resolve){
		
		/*Form data*/
		const fData = new FormData(); 
		fData.append("secretKey", secretKey);							
		fData.append("selectedFileEmpPic", dataObj.selectedFileEmpPic);		
		/*Form data*/


		/*Fetch method*/
		fetch("../Server Side/Response_UploadNewEmployeePicture.php", {method: "POST", body: fData})
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
				console.log("Execution Problem in Request_UploadNewEmployeePicture!");
				resolve(false);
			}else{
				newEmpPicName = parseObj.newEmpPicName;				
				
				resolve(true);
			}			
		});
		/*Fetch method*/
		
	});


	return await requestPromise;
};
/*Get accounts details*/


/*Export*/
export {newEmpPicName, requestUploadNewEmployeePicture};
/*Export*/