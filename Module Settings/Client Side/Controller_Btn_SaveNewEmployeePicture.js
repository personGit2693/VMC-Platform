/*Import*/
import {assignElemReference_UploadNewEmployeePicture, selectedFileEmpPic} from "./Values_Settings.js";
import {submitUploadNewEmployeePicture} from "./Submit_UploadNewEmployeePicture.js";
/*Import*/


/*Controller*/
function controller_Btn_SaveNewEmployeePicture(elem){
	
	assignElemReference_UploadNewEmployeePicture(elem);

	const dataObj = {selectedFileEmpPic};
	const controllersObj = {};
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