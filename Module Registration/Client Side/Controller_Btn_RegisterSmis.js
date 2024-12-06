/*Import*/
import {submitRegisterSmis} from "../../Global Client Side/Submit_RegisterSmis.js";
import {globalKey, assignElemReference_RegisterSmis} from "../../Global Client Side/Values_Global.js";
/*Import*/


/*Controller*/
function controller_Btn_RegisterSmis(elem){	

	assignElemReference_RegisterSmis(elem);

	const serverPath = "../../Global Server Side/Response_RegisterSmis.php";

	const dataObj = {globalKey};
	const controllersObj = {};
	const loaderObj = {};

	submitRegisterSmis(controller_Btn_RegisterSmis, dataObj, controllersObj, loaderObj, serverPath);
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_RegisterSmis = controller_Btn_RegisterSmis;
/*Declare Global*/


/*Export*/
export default controller_Btn_RegisterSmis;
/*Export*/