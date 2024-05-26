/*Import*/
import {chatBox} from "./Elements_Global.js";
import ChatHistoryDiv from "./Component_ChatHistoryDiv.js";
/*Import*/


/*Render*/
function viewChatHistoryDiv(){

	if (chatBox.style.visibility === 'hidden') {
		
		chatBox.style.visibility = 'visible';
	}

	chatBox.innerHTML = ChatHistoryDiv();
}
/*Render*/


/*Export*/
export default viewChatHistoryDiv;
/*Export*/