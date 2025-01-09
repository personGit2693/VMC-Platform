/*Import*/
import {mainPageSide} from "./Elements_Global.js";
import PageLoader from "./Component_PageLoader.js";
/*Import*/


/*Render*/
function viewPageLoader(){

	mainPageSide.innerHTML += PageLoader();
}
/*Render*/


/*Export*/
export default viewPageLoader;
/*Export*/