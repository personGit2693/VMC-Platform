/*Import*/
import {globalKey} from "./Values_Global.js";
/*Import*/


/*Controller*/
function controller_Div_LoginToApp(link){
	const globalKey_Base = btoa(unescape(encodeURIComponent(JSON.stringify(globalKey))));

	window.location.href = `${link}?credentials_Base=${globalKey_Base}`;
}
/*Controller*/


/*Declare Global*/
window.controller_Div_LoginToApp = controller_Div_LoginToApp;
/*Declare Global*/


/*Export*/
export default controller_Div_LoginToApp;
/*Export*/