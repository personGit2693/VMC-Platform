/*Import*/
import {profilePic} from "./Elements_Page_AccountSettings.js";
import {fileReader} from "./Values_Settings.js";
import {globalKey} from "../../Global Client Side/Values_Global.js";
/*Import*/


/*Controller*/
function controller_Docs_DisplayCurrentPicture(){

	const currentAccountPicture = `../../Employee Pictures/${globalKey.account_picture}`;

	profilePic.src = currentAccountPicture;		
	
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_DisplayCurrentPicture = controller_Docs_DisplayCurrentPicture;
/*Declare Global*/


/*Export*/
export default controller_Docs_DisplayCurrentPicture;
/*Export*/