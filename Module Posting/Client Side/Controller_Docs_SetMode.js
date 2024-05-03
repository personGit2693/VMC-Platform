/*Import*/
import {body, toggleModeButton} from "./Elements_Page_Posting.js";
import {isLightMode} from "./Values_Posting.js";
/*Import*/


/*Controller*/
function controller_Docs_SetMode(){

	body.classList.toggle('light-mode', isLightMode);
	toggleModeButton.textContent = isLightMode ? 'Dark Mode' : 'Light Mode';
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_SetMode = controller_Docs_SetMode;
/*Declare Global*/


/*Export*/
export default controller_Docs_SetMode;
/*Export*/