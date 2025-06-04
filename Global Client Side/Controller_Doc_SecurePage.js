/*Import*/
import {accountAccess} from "./Values_Global.js";
/*Import*/


/*Controller*/
function controller_Doc_SecurePage(accessLevelKey, logoutPath){
	
	if(!accountAccess.includes(accessLevelKey)){
		window.location.href = logoutPath;
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Doc_SecurePage = controller_Doc_SecurePage;
/*Declare Global*/


/*Export*/
export default controller_Doc_SecurePage;
/*Export*/