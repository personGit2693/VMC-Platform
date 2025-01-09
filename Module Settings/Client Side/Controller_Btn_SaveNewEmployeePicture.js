/*Import*/
import outputPageLoader from "../../Global Client Side/Output_PageLoader.js";
import {assignElemReference_UploadNewEmployeePicture, selectedFileEmpPic} from "./Values_Settings.js";
import {submitUploadNewEmployeePicture} from "./Submit_UploadNewEmployeePicture.js";
/*Import*/


/*Controller*/
function controller_Btn_SaveNewEmployeePicture(elem){
	
	if(selectedFileEmpPic !== ""){
		assignElemReference_UploadNewEmployeePicture(elem);

		const dataObj = {selectedFileEmpPic};
		const controllersObj = {};
		const loaderObj = {outputPageLoader, id1:"thisIsJapan_RoId", id2:"spinnerLoad_RoId"};	

		submitUploadNewEmployeePicture(controller_Btn_SaveNewEmployeePicture, dataObj, controllersObj, loaderObj);
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_SaveNewEmployeePicture = controller_Btn_SaveNewEmployeePicture;
/*Declare Global*/


/*Export*/
export default controller_Btn_SaveNewEmployeePicture;
/*Export*/