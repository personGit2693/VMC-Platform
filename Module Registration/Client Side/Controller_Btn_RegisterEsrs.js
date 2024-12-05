/*Import*/
import {submitRegisterEsrs} from "../../Global Client Side/Submit_RegisterEsrs.js";
import {globalKey, assignElemReference_RegisterEsrs} from "../../Global Client Side/Values_Global.js";
/*Import*/


/*Controller*/
function controller_Btn_RegisterEsrs(elem){	

	assignElemReference_RegisterEsrs(elem);

	const serverPath = "../../Global Server Side/Response_RegisterEsrs.php";

	const dataObj = {globalKey};
	const controllersObj = {};
	const loaderObj = {};

	submitRegisterEsrs(controller_Btn_RegisterEsrs, dataObj, controllersObj, loaderObj, serverPath);
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_RegisterEsrs = controller_Btn_RegisterEsrs;
/*Declare Global*/


/*Export*/
export default controller_Btn_RegisterEsrs;
/*Export*/