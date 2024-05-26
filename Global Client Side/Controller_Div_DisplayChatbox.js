/*Import*/
import {assignChatContactName} from "./Values_Global.js";
import outputChatHistoryDiv from "./Output_ChatHistoryDiv.js";
import controller_Docs_ScrollChatToBottom from "./Controller_Docs_ScrollChatToBottom.js";
/*Import*/


/*Controller*/
function controller_Div_DisplayChatbox(chatContactName){

	assignChatContactName(chatContactName);
	outputChatHistoryDiv();
	controller_Docs_ScrollChatToBottom();
}
/*Controller*/


/*Declare Global*/
window.controller_Div_DisplayChatbox = controller_Div_DisplayChatbox;
/*Declare Global*/


/*Export*/
export default controller_Div_DisplayChatbox;
/*Export*/