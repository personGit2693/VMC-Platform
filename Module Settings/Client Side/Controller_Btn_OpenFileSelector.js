/*Import*/
import {fileInput} from "./Elements_Page_Settings.js";
/*Import*/


/*Controller*/
function controller_Btn_OpenFileSelector(inputFile){

	document.getElementById('fileInput').click();
}

if (fileInput){

	fileInput.addEventListener('change', function() {
		const selectedFile = this.files[0];
		if (selectedFile) {
			const reader = new FileReader();
			reader.onload = function(event){
				document.getElementById('profilePic-id').src = event.target.result;
				document.getElementById('profilePic-id1').src = event.target.result;
			};
			reader.readAsDataURL(selectedFile);
		}
	});
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_OpenFileSelector = controller_Btn_OpenFileSelector;
/*Declare Global*/


/*Export*/
export default controller_Btn_OpenFileSelector;
/*Export*/