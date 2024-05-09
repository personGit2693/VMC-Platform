/*Import*/
import {resetFileInput, fileReader} from "./Values_Posting.js";
import {filePreviewContainer} from "./Elements_Page_Posting.js";
/*Import*/


/*Controller*/
function controller_Docs_DisplaySelectedFile(file){

	filePreviewContainer.innerHTML = '';

	const fileType = file.type.split('/')[0];

	let previewElement;

	if (fileType === 'image') {
		previewElement = document.createElement('img');
		previewElement.classList.add('file-preview-element');
	} else if (fileType === 'video') {
		previewElement = document.createElement('video');
		previewElement.classList.add('file-preview-element');
		previewElement.setAttribute('controls', ''); 
	} else {
		previewElement = document.createElement('div');
		previewElement.textContent = file.name;
	}

	previewElement.src = fileReader.result;

	const removeButton = document.createElement('button');
	removeButton.textContent = 'x';
	removeButton.classList.add('remove-file-button');
	removeButton.addEventListener('click', function() {
		resetFileInput();
		filePreviewContainer.innerHTML = '';
	});

	filePreviewContainer.appendChild(previewElement);
	filePreviewContainer.appendChild(removeButton);	
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_DisplaySelectedFile = controller_Docs_DisplaySelectedFile;
/*Declare Global*/


/*Export*/
export default controller_Docs_DisplaySelectedFile;
/*Export*/