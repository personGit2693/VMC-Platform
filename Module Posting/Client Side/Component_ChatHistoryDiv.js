/*Import*/
import {chatContactName} from "./Values_Posting.js";
/*Import*/


/*Component*/
function ChatHistoryDiv(){

	let chatHistoryDiv = `<div class="contact-profile-container-small">
		<div class="contact-pic-container-small">
			<img class="contact-picture-small" src="../../src/cat-profile.png">
			<div class="online-indicator-medium"></div>
		</div>

		<div class="contact-name">${chatContactName}</div>
	</div>

	<div class="chat-box">
		<div class="contact-profile-container-big">
			<div class="contact-pic-container-big">
				<img class="contact-picture-big" src="../../src/cat-profile.png">
				<div class="online-indicator-big"></div>
			</div>	
			<div class="contact-name-big">${chatContactName}</div>
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
	</div>

	<div class="chat-input-container">
		<div class="textarea-chat-container">
			<textarea class="chat-input" rows="1" oninput="controller_Textarea_ResizeTextArea(this)" placeholder="Type your message..."></textarea>
		</div>
		
		<button class="chat-send-button">Send</button>
	</div>

	<button class="buzz-chat-button"><img src="../../src/announcementiconwhite.png"></button>
	<button class="close-chat-button" onclick="controller_Btn_CloseChatbox()"><img src="../../src/closeModIcon.png"></button>`;

	return chatHistoryDiv;
}
/*Component*/


/*Export*/
export default ChatHistoryDiv;
/*Export*/