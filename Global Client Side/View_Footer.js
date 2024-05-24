/*Import*/
import {footerWrap} from "./Elements_Global.js";
import Footer from "./Component_Footer.js";
/*Import*/


/*Render*/
function viewFooter(){
	
	footerWrap[0].innerHTML	= Footer();
}
/*Render*/


/*Export*/
export default viewFooter;
/*Export*/