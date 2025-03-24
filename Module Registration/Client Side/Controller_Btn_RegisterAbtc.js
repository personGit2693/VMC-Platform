/*Import*/
import {submitRegisterAbtc} from "../../Global Client Side/Submit_RegisterAbtc.js";
import {globalKey, assignElemReference_RegisterAbtc} from "../../Global Client Side/Values_Global.js";
/*Import*/


/*Controller*/
function controller_Btn_RegisterAbtc(elem){	

	assignElemReference_RegisterAbtc(elem);

	const serverPath = "../../Global Server Side/Response_RegisterAbtc.php";

	const dataObj = {globalKey};
	const controllersObj = {};
	const loaderObj = {};

	submitRegisterAbtc(controller_Btn_RegisterAbtc, dataObj, controllersObj, loaderObj, serverPath);
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_RegisterAbtc = controller_Btn_RegisterAbtc;
/*Declare Global*/


/*Export*/
export default controller_Btn_RegisterAbtc;
/*Export*/