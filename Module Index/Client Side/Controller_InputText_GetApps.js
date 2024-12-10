/*Import*/
import {assignElemReference_GetApps} from "../../Global Client Side/Values_Global.js";
import {assignSearchApp, searchApp} from "./Values_Index.js";
import {submitGetApps} from "../../Global Client Side/Submit_GetApps.js";
import outputWebAppDiv from "./Output_WebAppDiv.js";
/*Import*/


/*Controller*/
function controller_InputText_GetApps(elem){
	
	assignElemReference_GetApps(elem);	
	assignSearchApp(elem.value);

	const dataObj = {searchApp:searchApp};
	const controllersObj = {outputWebAppDiv};
	const loaderObj = {};	

	const serverPath = "./Global Server Side/Response_GetApps.php";	

	submitGetApps(controller_InputText_GetApps, dataObj, controllersObj, loaderObj, serverPath);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_GetApps = controller_InputText_GetApps;
/*Declare Global*/


/*Export*/
export default controller_InputText_GetApps;
/*Export*/