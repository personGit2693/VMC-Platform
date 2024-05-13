/*For Dark / Light Mode toggle*/
/*
const toggleModeButton = document.getElementById('toggle-mode-id');
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
*/
/*For Dark / Light Mode toggle*/

/*For textarea auto resize*/
/*
function autoResizeTextarea(textarea) {
	textarea.style.height = 'auto';
	textarea.style.height = (textarea.scrollHeight) + 'px';
}
*/
/*For textarea auto resize*/

/*For handling file selection*/
/*
document.getElementById('file-upload-id').addEventListener('change', function(event) {
	const file = event.target.files[0];
	const fileReader = new FileReader();

	fileReader.onload = function(event) {
		const filePreviewContainer = document.getElementById('file-preview-container-id');
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
*/

/*
function removeFilePreview() {
	const fileInput = document.getElementById('file-upload-id');
	const filePreviewContainer = document.getElementById('file-preview-container-id');

	fileInput.value = '';

	filePreviewContainer.innerHTML = '';
}
*/
/*For handling file selection*/

/*Show / Hide toggle for comment section*/
/*
function toggleCommentSection() {
	const commentSection = document.getElementById("comment-section-id");

	if (commentSection.style.display === "none") {
		commentSection.style.display = "block";
	} else {
		commentSection.style.display = "none";
	}
}
*/
/*
function toggleModalCommentSection() {
	const modalCommentSection = document.getElementById("modal-comment-section-id");

	if (modalCommentSection.style.display === "none") {
		modalCommentSection.style.display = "block";
	} else {
		modalCommentSection.style.display = "none";
	}
}
*/
/*Show / Hide toggle for comment section*/

/*For right side content controls / functions*/
/*
window.addEventListener('DOMContentLoaded', () => {
	const burgerIcon = document.querySelector('.burger-icon');
	const rightSideContent = document.querySelector('.right-side-container');
	const img = burgerIcon.querySelector('img');

	function toggleRightSideContent() {
		if (window.innerWidth <= 1080) {
			rightSideContent.style.display = 'none';
			burgerIcon.style.display = 'block';
			img.src = '../../src/burgericon.png';
		} else {
			rightSideContent.style.display = 'block';
			burgerIcon.style.display = 'none';
		}
	}

	function toggleIcon() {
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
*/
/*For right side content controls / functions*/


/*Show / Hide toggle for chat container*/
/*
document.querySelector('.chat-toggle-button').addEventListener('click', function() {
	var chatContainer = document.querySelector('.chat-container');

	if (chatContainer.style.display === 'none') {
		chatContainer.style.display = 'block';
	} else {
		chatContainer.style.display = 'none';
	}
});
*/
/*Show / Hide toggle for chat container*/

/*Function for toggling the chat box container*/
/*
function toggleChatBox(contactName) {
	var chatBox = document.querySelector('.chat-box-container');

	if (chatBox.style.visibility === 'hidden') {
		chatBox.style.visibility = 'visible';
	}

	var chatHistory = getSampleChatHistory(contactName);
	chatBox.innerHTML = chatHistory;

	scrollChatBoxToBottom();
}

function scrollChatBoxToBottom() {
	var chatBox = document.querySelector('.chat-box');
	chatBox.scrollTop = chatBox.scrollHeight;
}
*/
/*
function closeChatBox() {
	var chatBox = document.querySelector('.chat-box-container');
	chatBox.style.visibility = 'hidden';
}
*/

// Sample chat history for demonstration purposes
/*
function getSampleChatHistory(contactName) {

	if (contactName === 'Angelo Arellano') {
		return `
			<div class="contact-profile-container-small">
				<div class="contact-pic-container-small">
					<img class="contact-picture-small" src="../../src/cat-profile.png">
					<div class="online-indicator-medium"></div>
				</div>

				<div class="contact-name">Angelo Arellano</div>
			</div>

			<div class="chat-box">
				<div class="contact-profile-container-big">
					<div class="contact-pic-container-big">
						<img class="contact-picture-big" src="../../src/cat-profile.png">
						<div class="online-indicator-big"></div>
					</div>	

					<div class="contact-name-big">Angelo Arellano</div>
				</div>

				<div class="right-chat-container">
					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">Pre</div>
						<div class="right-chat">Kailan mo babayaran utang mo, tagal na nun ah</div>
					</div>

					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore.
						</div>
					</div>
				</div>

				<div class="left-chat-container">
					<div class="chat-and-date-left">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="left-chat-pic-container">
							<img class="left-chat-pic" src="../../src/cat-profile.png">

							<div class="left-chat">Left chat sample.</div>
						</div>
					</div>

					<div class="chat-and-date-left">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="left-chat-pic-container">
							<img class="left-chat-pic" src="../../src/cat-profile.png">

							<div class="left-chat">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
					</div>
				</div>

				<div class="right-chat-container">
					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">Right chat sample.</div>
					</div>

					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">My apologies, but I can't right now.</div>
					</div>
				</div>

				<div class="left-chat-container">
					<div class="chat-and-date-left">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="left-chat-pic-container">
							<img class="left-chat-pic" src="../../src/cat-profile.png">

							<div class="left-chat">Okay!</div>
						</div>
					</div>
				</div>
			</div>

			<div class="chat-input-container">
				<div class="textarea-chat-container">
					<textarea class="chat-input" rows="1" oninput="controller_Textarea_ResizeTextArea(this)" placeholder="Type your message..."></textarea>
				</div>
				
				<button class="chat-send-button">Send</button>
			</div>

			<button class="buzz-chat-button"><img src="../../src/buzz-icon.png"></button>
			<button class="close-chat-button" onclick="closeChatBox()">X</button>
		`;
	} else if (contactName === 'Jane Luna') {
		return `
			<div class="contact-profile-container-small">
				<div class="contact-pic-container-small">
					<img class="contact-picture-small" src="../../src/cat-profile.png">
					<div class="online-indicator-medium"></div>
				</div>

				<div class="contact-name">Jane Luna</div>
			</div>

			<div class="chat-box">
				<div class="contact-profile-container-big">
					<div class="contact-pic-container-big">
						<img class="contact-picture-big" src="../../src/cat-profile.png">
						<div class="online-indicator-big"></div>
					</div>

					<div class="contact-name-big">Jane Luna</div>
				</div>

				<div class="right-chat-container">
					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">Jane, nahanap ko na wallet mo kaso wala ng laman.</div>
						<div class="right-chat">Hahaha</div>
					</div>

					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore.
						</div>
					</div>
				</div>

				<div class="left-chat-container">
					<div class="chat-and-date-left">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="left-chat-pic-container">
							<img class="left-chat-pic" src="../../src/cat-profile.png">

							<div class="left-chat">Left chat sample.</div>
						</div>
					</div>

					<div class="chat-and-date-left">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="left-chat-pic-container">
							<img class="left-chat-pic" src="../../src/cat-profile.png">

							<div class="left-chat">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
					</div>
				</div>

				<div class="right-chat-container">
					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">Right chat sample.</div>
					</div>

					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">My apologies, but I can't right now.</div>
					</div>
				</div>

				<div class="left-chat-container">
					<div class="chat-and-date-left">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="left-chat-pic-container">
							<img class="left-chat-pic" src="../../src/cat-profile.png">

							<div class="left-chat">Okay!</div>
						</div>
					</div>
				</div>
			</div>

			<div class="chat-input-container">
				<div class="textarea-chat-container">
					<textarea class="chat-input" rows="1" oninput="controller_Textarea_ResizeTextArea(this)" placeholder="Type your message..."></textarea>
				</div>
				
				<button class="chat-send-button">Send</button>
			</div>

			<button class="buzz-chat-button"><img src="../../src/buzz-icon.png"></button>
			<button class="close-chat-button" onclick="closeChatBox()">X</button>
		`;
	} else if (contactName === 'Richard Bautista') {
		return `
			<div class="contact-profile-container-small">
				<div class="contact-pic-container-small">
					<img class="contact-picture-small" src="../../src/cat-profile.png">
					<div class="offline-indicator-medium"></div>
				</div>

				<div class="contact-name">Richard Bautista</div>
			</div>

			<div class="chat-box">
				<div class="contact-profile-container-big">
					<div class="contact-pic-container-big">
						<img class="contact-picture-big" src="../../src/cat-profile.png">
						<div class="offline-indicator-big"></div>
					</div>

					<div class="contact-name-big">Richard Bautista</div>
				</div>

				<div class="right-chat-container">
					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">aw</div>
						<div class="right-chat">San ka na Richard?</div>
					</div>

					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore.
						</div>
					</div>
				</div>

				<div class="left-chat-container">
					<div class="chat-and-date-left">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="left-chat-pic-container">
							<img class="left-chat-pic" src="../../src/cat-profile.png">

							<div class="left-chat">Left chat sample.</div>
						</div>
					</div>

					<div class="chat-and-date-left">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="left-chat-pic-container">
							<img class="left-chat-pic" src="../../src/cat-profile.png">

							<div class="left-chat">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
					</div>
				</div>

				<div class="right-chat-container">
					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">Right chat sample.</div>
					</div>

					<div class="chat-and-date-right">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="right-chat">My apologies, but I can't right now.</div>
					</div>
				</div>

				<div class="left-chat-container">
					<div class="chat-and-date-left">
						<div class="chat-date-sent">4/19/2024, 8:39:45 PM</div>

						<div class="left-chat-pic-container">
							<img class="left-chat-pic" src="../../src/cat-profile.png">

							<div class="left-chat">Okay!</div>
						</div>
					</div>
				</div>
			</div>

			<div class="chat-input-container">
				<div class="textarea-chat-container">
					<textarea class="chat-input" rows="1" oninput="controller_Textarea_ResizeTextArea(this)" placeholder="Type your message..."></textarea>
				</div>
				
				<button class="chat-send-button">Send</button>
			</div>

			<button class="buzz-chat-button"><img src="../../src/buzz-icon.png"></button>
			<button class="close-chat-button" onclick="closeChatBox()">X</button>
		`;
	}
}
*/
/*Function for toggling the chat box container*/
