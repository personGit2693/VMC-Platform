/*Import*/
import {profilePic} from "./Elements_Page_AccountSettings.js";
import {fileReader, assignSelectedFileEmpPic} from "./Values_Settings.js";
/*Import*/


/*Controller*/
function controller_InputFile_ChangeProfilePic(elem){

	const file = elem.files[0];

	fileReader.readAsDataURL(file);

	fileReader.onload = function(){
		profilePic.src = fileReader.result;
		assignSelectedFileEmpPic(elem.files[0]);
	};
}
/*Controller*/


/*Declare Global*/
window.controller_InputFile_ChangeProfilePic = controller_InputFile_ChangeProfilePic;
/*Declare Global*/


/*Export*/
export default controller_InputFile_ChangeProfilePic;
/*Export*/