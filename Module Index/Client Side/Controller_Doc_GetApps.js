/*Import*/
import {assignElemReference_GetApps} from "../../Global Client Side/Values_Global.js";
import {submitGetApps} from "../../Global Client Side/Submit_GetApps.js";
import outputWebAppDiv from "./Output_WebAppDiv.js";
/*Import*/


/*Controller*/
function controller_Doc_GetApps(elem){
	
	assignElemReference_GetApps(elem);

	const dataObj = {};
	const controllersObj = {outputWebAppDiv};
	const loaderObj = {};	

	const serverPath = "./Global Server Side/Response_GetApps.php";	

	submitGetApps(controller_Doc_GetApps, dataObj, controllersObj, loaderObj, serverPath);
}
/*Controller*/


/*Declare Global*/
window.controller_Doc_GetApps = controller_Doc_GetApps;
/*Declare Global*/


/*Export*/
export default controller_Doc_GetApps;
/*Export*/