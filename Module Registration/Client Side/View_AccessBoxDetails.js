/*Import*/
import {accessBoxWrap} from "./Elements_Page_Access.js";
import AccessBoxDetails from "./Component_AccessBoxDetails.js";
/*Import*/


/*Render*/
function viewAccessBoxDetails(){
	accessBoxWrap.innerHTML = AccessBoxDetails();
}
/*Render*/


/*Export*/
export default viewAccessBoxDetails;
/*Export*/