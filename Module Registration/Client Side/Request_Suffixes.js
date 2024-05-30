/*Prep variables*/
var secretKey = null;
/*Prep variables*/


/*Export variables*/
var suffixDetails_Array = null;
/*Export variables*/


/*Get Suffixes Details*/
async function requestSuffixes(searchSuffix){
	
	const requestPromise = new Promise(function(resolve){		

		/*Fetch method*/
		fetch("../../Global PHP/Secret Key.txt")
		.then(res => res.text())
		.then(skey => {

			/*_Prep Data*/
			secretKey = skey;			

			const fData = new FormData(); 
			fData.append("secretKey", secretKey);
			fData.append("searchSuffix", searchSuffix);
			/*_Prep Data*/

			/*_Submit Data to Server Side*/
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

					console.log("Execution Problem in Request Suffixes!");

				}else if(parseObj.validAccess === true && parseObj.serverConnection === null && parseObj.validToken === null && parseObj.execution === true){

					suffixDetails_Array = parseObj.suffixDetails_Array;

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
export {requestSuffixes, suffixDetails_Array};
/*Export*/