/*Prep variables*/
var secretKey = null;
/*Prep variables*/


/*Export variables*/
var sections_Array = null;
/*Export variables*/


/*Get Job Title Details*/
async function requestSections(searchSection){
	
	const requestPromise = new Promise(function(resolve){		

		/*Fetch method*/
		fetch("../../Security/Secret Key.php")
		.then(res => res.text())
		.then(skey => {

			/*_Prep Data*/
			secretKey = skey;			

			const fData = new FormData(); 
			fData.append("secretKey", secretKey);
			fData.append("searchSection", searchSection);
			/*_Prep Data*/

			/*_Submit Data to Server Side*/
			fetch("../Server Side/Response_Sections.php", {method: "POST", body: fData})
			.then(res => res.json())
			.then(parseObj => {

				if(parseObj.validAccess !== true){

					console.log("Invalid Access!");

				}else if(parseObj.serverConnection !== null){

					console.log("Connection Lost!");

				}else if(parseObj.validToken !== null){

					console.log("Invalid Token!");

				}else if(parseObj.execution !== true){

					console.log("Execution Problem in Request Sections!");

				}else if(parseObj.validAccess === true && parseObj.serverConnection === null && parseObj.validToken === null && parseObj.execution === true){

					sections_Array = parseObj.sections_Array;

					resolve(true);
				}				
			});
			/*_Submit Data to Server Side*/
		});
		/*Fetch method*/
	});


	return await requestPromise;
};
/*Get Suffix Details*/


/*Export*/
export {requestSections, sections_Array};
/*Export*/