/*Import*/
import {chatBox} from "./Elements_Page_Posting.js";
/*Import*/


/*Controller*/
function controller_Docs_ScrollChatToBottom(){

	chatBox.scrollTop = chatBox.scrollHeight;
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_ScrollChatToBottom = controller_Docs_ScrollChatToBottom;
/*Declare Global*/


/*Export*/
export default controller_Docs_ScrollChatToBottom;
/*Export*/