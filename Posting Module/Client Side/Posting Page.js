/*For Dark / Light Mode toggle*/
const toggleModeButton = document.getElementById('toggle-mode');
const body = document.body;

function setMode(isLightMode) {
	body.classList.toggle('light-mode', isLightMode);
	toggleModeButton.textContent = isLightMode ? 'Dark Mode' : 'Light Mode';
}

const isLightMode = localStorage.getItem('isLightMode') === 'true';

setMode(isLightMode);

toggleModeButton.addEventListener('click', () => {
	const newMode = !body.classList.contains('light-mode');

	setMode(newMode);
	localStorage.setItem('isLightMode', newMode);
});
/*For Dark / Light Mode toggle*/

/*For textarea auto resize*/
function autoResizeTextarea(textarea) {
	textarea.style.height = 'auto';
	textarea.style.height = (textarea.scrollHeight) + 'px';
}
/*For textarea auto resize*/

/*For handling file selection*/
document.getElementById('file-upload').addEventListener('change', function(event) {
	const file = event.target.files[0];
	const fileReader = new FileReader();

	fileReader.onload = function(event) {
		const filePreviewContainer = document.getElementById('file-preview-container');
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

		previewElement.src = event.target.result;

		const removeButton = document.createElement('button');
		removeButton.textContent = 'x';
		removeButton.classList.add('remove-file-button');
		removeButton.addEventListener('click', function() {
			removeFilePreview();
		});

		filePreviewContainer.appendChild(previewElement);
		filePreviewContainer.appendChild(removeButton);
	};

	fileReader.readAsDataURL(file);
});

function removeFilePreview() {
	const fileInput = document.getElementById('file-upload');
	const filePreviewContainer = document.getElementById('file-preview-container');

	fileInput.value = '';

	filePreviewContainer.innerHTML = '';
}
/*For handling file selection*/

/*Show / Hide toggle for comment section*/
function toggleCommentSection() {
	const commentSection = document.getElementById("comment-section");

	if (commentSection.style.display === "none") {
		commentSection.style.display = "block";
	} else {
		commentSection.style.display = "none";
	}
}
/*Show / Hide toggle for comment section*/

/*For right side content controls / functions*/
window.addEventListener('DOMContentLoaded', () => {
	const burgerIcon = document.querySelector('.burger-icon');
	const rightSideContent = document.querySelector('.right-side-container');

	function toggleRightSideContent() {
		if (window.innerWidth <= 1080) {
			rightSideContent.style.display = 'none';
			burgerIcon.style.display = 'block';
		} else {
			rightSideContent.style.display = 'block';
			burgerIcon.style.display = 'none';
		}
	}

	function toggleIcon() {
		const img = burgerIcon.querySelector('img');

		if (img.src.includes('burgericon.png')) {
			img.src = '../../src/burgericon_active.png';
		} else {
			img.src = '../../src/burgericon.png';
		}
	}

	toggleRightSideContent();

	burgerIcon.addEventListener('click', () => {
		if (rightSideContent.style.display === 'none') {
			rightSideContent.style.display = 'block';
		} else {
			rightSideContent.style.display = 'none';
		}

		toggleIcon();
	});

	window.addEventListener('resize', toggleRightSideContent);
});
/*For right side content controls / functions*/

/*Show / Hide toggle for chat container*/
document.querySelector('.chat-toggle-button').addEventListener('click', function() {
	var chatContainer = document.querySelector('.chat-container');

	if (chatContainer.style.display === 'none') {
		chatContainer.style.display = 'block';
	} else {
		chatContainer.style.display = 'none';
	}
});
/*Show / Hide toggle for chat container*/