/*Import*/
import {body} from "./Elements_Global.js";
import {isLightMode, assignIsLightMode} from "./Values_Global.js";
import controller_Docs_SetMode from './Controller_Docs_SetMode.js';
/*Import*/


/*Controller*/
function controller_Btn_ChangeMode(){

	const newMode = !body.classList.contains('light-mode');

	assignIsLightMode(newMode);
	
	controller_Docs_SetMode();	

	localStorage.setItem('isLightMode', newMode);
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_ChangeMode = controller_Btn_ChangeMode;
/*Declare Global*/


/*Export*/
export default controller_Btn_ChangeMode;
/*Export*/