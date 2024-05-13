/*Import*/
import {chatBox} from "./Elements_Page_Posting.js";
/*Import*/


/*Controller*/
function controller_Btn_CloseChatbox(){

	chatBox.style.visibility = 'hidden';
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_CloseChatbox = controller_Btn_CloseChatbox;
/*Declare Global*/


/*Export*/
export default controller_Btn_CloseChatbox;
/*Export*/