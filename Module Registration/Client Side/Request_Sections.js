/*Import*/
import secretKey from "../../Global Client Side/Dummy.js";
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Export variables*/
var sections_Array = null;
/*Export variables*/


/*Get Monitoring*/
async function requestSections(dataObj){
	
	const requestPromise = new Promise(function(resolve){
		
		/*Form data*/
		const fData = new FormData(); 
		fData.append("secretKey", secretKey);		
		fData.append("searchSection", dataObj.searchSection);				
		/*Form data*/


		/*Fetch method*/
		fetch("../Server Side/Response_Sections.php", {method: "POST", body: fData})
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
			}else if(parseObj.mmsDbConnection.serverConnection !== null){
				console.log("MMS DB Connection Lost!");
				resolve(false);
			}else if(parseObj.mmsDbConnection.selectedPdoConn == null){
				console.log("MMS Object Connection Incorrect!");
				resolve(false);
			}else if(parseObj.validToken){
				console.log(parseObj.validToken);
				resolve(false);				
			}else if(parseObj.execution !== true){
				console.log("Execution Problem in Request_Sections!");
				resolve(false);
			}else{
				
				sections_Array = parseObj.sections_Array;				
				resolve(true);
			}			
		});
		/*Fetch method*/
		
	});


	return await requestPromise;
};
/*Get Monitoring*/


/*Export*/
export {requestSections, sections_Array};
/*Export*/