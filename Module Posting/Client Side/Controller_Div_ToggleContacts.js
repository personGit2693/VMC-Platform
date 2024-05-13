/*Import*/
import {chatContainer} from "./Elements_Page_Posting.js";
/*Import*/


/*Controller*/
function controller_Div_ToggleContacts(){

	if (chatContainer.style.display === 'none') {
		chatContainer.style.display = 'block';
	} else {
		chatContainer.style.display = 'none';
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Div_ToggleContacts = controller_Div_ToggleContacts;
/*Declare Global*/


/*Export*/
export default controller_Div_ToggleContacts;
/*Export*/