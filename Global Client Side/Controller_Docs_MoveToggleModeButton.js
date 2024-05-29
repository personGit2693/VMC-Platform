/*Import*/
import {toggleModeButton, toggleModeNewLocation, toggleModeOrigLocation} from "./Elements_Global.js";
/*Import*/


/*Controller*/
function controller_Docs_MoveToggleModeButton(){

	if (window.innerWidth <= 500) {
		
		if (!toggleModeNewLocation.contains(toggleModeButton)) {
			toggleModeNewLocation.appendChild(toggleModeButton);
		}

	} else {

		if (!toggleModeOrigLocation.contains(toggleModeButton)) {
			toggleModeOrigLocation.appendChild(toggleModeButton);
		}
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_MoveToggleModeButton = controller_Docs_MoveToggleModeButton;
/*Declare Global*/


/*Export*/
export default controller_Docs_MoveToggleModeButton;
/*Export*/