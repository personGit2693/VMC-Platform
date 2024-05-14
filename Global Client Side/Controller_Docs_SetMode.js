/*Import*/
import {body, toggleModeButton} from "./Elements_Global.js";
import {isLightMode} from "./Values_Global.js";
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