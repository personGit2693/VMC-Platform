/*Prep variables*/
var secretKey = null;
/*Prep variables*/


/*Export variables*/
var jobTitleDetails_Array = null;
/*Export variables*/


/*Get Job Title Details*/
async function requestJobTitles(searchJobTitle){
	
	const requestPromise = new Promise(function(resolve){		

		/*Fetch method*/
		fetch("../../Security/Secret Key.php")
		.then(res => res.text())
		.then(skey => {

			/*_Prep Data*/
			secretKey = skey;			

			const fData = new FormData(); 
			fData.append("secretKey", secretKey);
			fData.append("searchJobTitle", searchJobTitle);
			/*_Prep Data*/

			/*_Submit Data to Server Side*/
			fetch("../Server Side/Response_JobTitles.php", {method: "POST", body: fData})
			.then(res => res.json())
			.then(parseObj => {

				if(parseObj.validAccess !== true){

					console.log("Invalid Access!");

				}else if(parseObj.mms_Connection !== null || parseObj.platform_Connection !== null){

					console.log("Connection Lost!");

				}else if(parseObj.validToken !== null){

					console.log("Invalid Token!");

				}else if(parseObj.execution !== true){

					console.log("Execution Problem in Request Job Titles!");

				}else if(parseObj.validAccess === true && parseObj.mms_Connection === null && parseObj.platform_Connection === null && parseObj.validToken === null && parseObj.execution === true){

					jobTitleDetails_Array = parseObj.jobTitleDetails_Array;

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
export {requestJobTitles, jobTitleDetails_Array};
/*Export*/