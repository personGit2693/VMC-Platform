/*Prep variables*/

/*Prep variables*/


/*Export variables*/
var suffixDetails_Array = null;
/*Export variables*/


/*Get Suffixes Details*/
async function requestSuffixes(){
	
	const requestPromise = new Promise(function(resolve){
		
		/*Form data*/
		const fData = new FormData(); 
		fData.append("token", token);
		fData.append("internal_clientTypeId", internal_clientTypeId);
		fData.append("office_id", office_id);
		fData.append("dateFrom", dateFrom);
		fData.append("dateTo", dateTo);
		/*Form data*/


		/*Fetch method*/
		fetch("../Server Side/Response_Suffixes.php", {method: "POST", body: fData})
		.then(res => res.json())
		.then(parseObj => {

			if(parseObj.validAccess !== true){

				console.log("Invalid Access!");

			}else if(parseObj.serverConnection !== null){

				console.log("Connection Lost!");

			}else if(parseObj.validToken !== null){

				console.log("Invalid Token!");

			}else if(parseObj.execution !== true){

				console.log("Execution Problem in Request CSM Respondent Details!");

			}else if(parseObj.validAccess === true && parseObj.serverConnection === null && parseObj.validToken === null && parseObj.execution === true){

				suffixDetails_Array = parseObj.suffixDetails_Array;

				resolve(true);
			}
		});
		/*Fetch method*/
		
	});


	return await requestPromise;
};
/*Get Suffix Details*/


/*Export*/
export {requestSuffixes, suffixDetails_Array};
/*Export*/