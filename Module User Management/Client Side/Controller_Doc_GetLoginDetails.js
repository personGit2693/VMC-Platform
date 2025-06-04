/*Import*/
import {assignElemReference_GetLoginDetails, assignAccountAccess} from "../../Global Client Side/Values_Global.js";
import {submitGetLoginDetails} from "../../Global Client Side/Submit_GetLoginDetails.js";
import outputUserLoginDetails from "./Output_UserLoginDetails.js";
import outputNavigationMenu from "./../../Global Client Side/Output_NavigationMenu.js";
import controller_Doc_SecurePage from "./../../Global Client Side/Controller_Doc_SecurePage.js";
/*Import*/


/*Controller*/
function controller_Doc_GetLoginDetails(elem){
	
	assignElemReference_GetLoginDetails(elem);

	const dataObj = {};
	const controllersObj = {outputUserLoginDetails, outputNavigationMenu, assignAccountAccess, controller_Doc_SecurePage};
	const loaderObj = {};	

	const serverPath = "../../Global Server Side/Response_GetLoginDetails.php";
	const logoutPath = "../../Global PHP/DestroySessions.php";
	const accessLevelKey = "User Management Navigation";

	submitGetLoginDetails(controller_Doc_GetLoginDetails, dataObj, controllersObj, loaderObj, serverPath, logoutPath, accessLevelKey);
}
/*Controller*/


/*Declare Global*/
window.controller_Doc_GetLoginDetails = controller_Doc_GetLoginDetails;
/*Declare Global*/


/*Export*/
export default controller_Doc_GetLoginDetails;
/*Export*/