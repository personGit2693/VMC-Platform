/*Import*/

/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
var elemReference_UploadNewEmployeePicture = null;

const fileReader = new FileReader();
var selectedFileEmpPic = "";
var oldPassword = "";
var newPassword = "";
var cNewPassword = "";
var submitUpdatePassword = false;
/*Prep export variables*/


/*Assign, Reset, Populate*/
function resetElemReference_UploadNewEmployeePicture(){
	elemReference_UploadNewEmployeePicture = null;
}

function assignElemReference_UploadNewEmployeePicture(newValue){
	elemReference_UploadNewEmployeePicture = newValue;
}

function resetSubmitUpdatePassword(){
	submitUpdatePassword = false;
}

function assignSubmitUpdatePassword(newValue){
	submitUpdatePassword = newValue;
}

function resetCNewPassword(){
	cNewPassword = "";
}

function assignCNewPassword(newValue){
	cNewPassword = newValue;
}

function resetNewPassword(){
	newPassword = "";
}

function assignNewPassword(newValue){
	newPassword = newValue;
}

function resetOldPassword(){
	oldPassword = "";
}

function assignOldPassword(newValue){
	oldPassword = newValue;
	console.log(oldPassword);
}

function resetSelectedFileEmpPic(){
	selectedFileEmpPic = "";
}

function assignSelectedFileEmpPic(newValue){

	selectedFileEmpPic = newValue;
}
/*Assign, Reset, Populate*/


/*Export*/
export {
	elemReference_UploadNewEmployeePicture,
	resetElemReference_UploadNewEmployeePicture,
	assignElemReference_UploadNewEmployeePicture,
	resetSubmitUpdatePassword,
	assignSubmitUpdatePassword,
	submitUpdatePassword,
	oldPassword,
	newPassword,
	cNewPassword,
	resetCNewPassword,
	assignCNewPassword,
	resetNewPassword,
	assignNewPassword,
	resetOldPassword,
	assignOldPassword,
	assignSelectedFileEmpPic,
	resetSelectedFileEmpPic,
	selectedFileEmpPic,
	fileReader
};
/*Export*/