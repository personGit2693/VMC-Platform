/*Import*/
import {img, burgerIcon, rightSideContent} from "./Elements_Page_Posting.js";
/*Import*/


/*Controller*/
function controller_Docs_ToggleRightSideContent(){

	if (window.innerWidth <= 1080) {
	
		rightSideContent.style.display = 'none';
		burgerIcon.style.display = 'block';
		img.src = '../../src/burgericon.png';

	} else {

		rightSideContent.style.display = 'block';
		burgerIcon.style.display = 'none';
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_ToggleRightSideContent = controller_Docs_ToggleRightSideContent;
/*Declare Global*/


/*Export*/
export default controller_Docs_ToggleRightSideContent;
/*Export*/