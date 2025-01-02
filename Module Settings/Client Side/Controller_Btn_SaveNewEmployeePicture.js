/*Import*/
import controller_Doc_GetLoginDetails from "./Controller_Doc_GetLoginDetails.js";
import {selectedFileEmpPic} from "./Values_Settings.js";
import {submitUploadNewEmployeePicture} from "./Submit_UploadNewEmployeePicture.js";
/*Import*/


/*Controller*/
function controller_Btn_SaveNewEmployeePicture(elem){
	
	/*assignElemReference_GetLoginDetails(elem);*/

	const dataObj = {selectedFileEmpPic: selectedFileEmpPic};
	const controllersObj = {controller_Doc_GetLoginDetails};
	const loaderObj = {};	

	submitUploadNewEmployeePicture(controller_Btn_SaveNewEmployeePicture, dataObj, controllersObj, loaderObj);
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_SaveNewEmployeePicture = controller_Btn_SaveNewEmployeePicture;
/*Declare Global*/


/*Export*/
export default controller_Btn_SaveNewEmployeePicture;
/*Export*/