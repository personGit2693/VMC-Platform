/*Import*/

/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
const fileReader = new FileReader();
var selectedFileEmpPic = "";
/*Prep export variables*/


/*Assign, Reset, Populate*/
function resetSelectedFileEmpPic(){
	selectedFileEmpPic = "";
}

function assignSelectedFileEmpPic(newValue){

	selectedFileEmpPic = newValue;
}
/*Assign, Reset, Populate*/


/*Export*/
export {
	assignSelectedFileEmpPic,
	resetSelectedFileEmpPic,
	selectedFileEmpPic,
	fileReader
};
/*Export*/