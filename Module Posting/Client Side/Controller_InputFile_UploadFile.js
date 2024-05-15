/*Import*/
import {fileReader} from "./Values_Posting.js";
import {filePreviewContainer} from "./Elements_Page_Posting.js";
import controller_Docs_DisplaySelectedFile from "./Controller_Docs_DisplaySelectedFile.js";
/*Import*/


/*Controller*/
function controller_InputFile_UploadFile(inputFile){

	const file = inputFile.files[0];

	fileReader.readAsDataURL(file);

	fileReader.onload = function(){
		controller_Docs_DisplaySelectedFile(file);
	};
}
/*Controller*/


/*Declare Global*/
window.controller_InputFile_UploadFile = controller_InputFile_UploadFile;
/*Declare Global*/


/*Export*/
export default controller_InputFile_UploadFile;
/*Export*/