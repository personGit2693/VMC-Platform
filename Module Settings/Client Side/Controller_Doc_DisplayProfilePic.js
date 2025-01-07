/*Import*/
import {profilePic} from "./Elements_Page_AccountSettings.js";
import {globalKey} from "../../Global Client Side/Values_Global.js";
/*Import*/


/*Controller*/
function controller_Doc_DisplayProfilePic(){

	const accountPicture = `../../Employee Pictures/${globalKey.account_picture}`;
	
	profilePic.src = accountPicture;
	
}
/*Controller*/


/*Declare Global*/
window.controller_Doc_DisplayProfilePic = controller_Doc_DisplayProfilePic;
/*Declare Global*/


/*Export*/
export default controller_Doc_DisplayProfilePic;
/*Export*/