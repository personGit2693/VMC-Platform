/*Import*/
import {fileReader} from "./Values_Settings.js";
/*Import*/


/*Controller*/
function controller_InputFile_ChangeProfilePic(inputFile){

	const file = inputFile.files[0];

	fileReader.readAsDataURL(file);

	fileReader.onload = function(){
		document.getElementById('profilePic-id').src = fileReader.result;
		document.getElementById('profilePic-id1').src = fileReader.result;
	};
}
/*Controller*/


/*Declare Global*/
window.controller_InputFile_ChangeProfilePic = controller_InputFile_ChangeProfilePic;
/*Declare Global*/


/*Export*/
export default controller_InputFile_ChangeProfilePic;
/*Export*/