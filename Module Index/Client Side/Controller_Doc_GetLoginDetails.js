/*Import*/
import {assignElemReference_GetLoginDetails} from "../../Global Client Side/Values_Global.js";
import {submitGetLoginDetails} from "../../Global Client Side/Submit_GetLoginDetails.js";
import outputUserLoginDetails from "./Output_UserLoginDetails.js";
import outputGreetingUserDetails from "./Output_GreetingUserDetails.js";
import outputNavigationMenu from "./Output_NavigationMenu.js";
/*Import*/


/*Controller*/
function controller_Doc_GetLoginDetails(elem){
	
	assignElemReference_GetLoginDetails(elem);

	const dataObj = {};
	const controllersObj = {
		outputUserLoginDetails,
		outputGreetingUserDetails,
		outputNavigationMenu		
	};
	const loaderObj = {};	

	const serverPath = "./Global Server Side/Response_GetLoginDetails.php";
	const logoutPath = "./Global PHP/DestroySessions.php";

	submitGetLoginDetails(controller_Doc_GetLoginDetails, dataObj, controllersObj, loaderObj, serverPath, logoutPath);
}
/*Controller*/


/*Declare Global*/
window.controller_Doc_GetLoginDetails = controller_Doc_GetLoginDetails;
/*Declare Global*/


/*Export*/
export default controller_Doc_GetLoginDetails;
/*Export*/