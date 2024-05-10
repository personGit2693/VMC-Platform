/*Import*/
import {img, rightSideContent} from "./Elements_Page_Posting.js";
/*Import*/


/*Controller*/
function controller_Div_DisplayRightSideContent(){

	/*To display burger icon or active burger icon*/
	if (img.src.includes('burgericon.png')) {

		img.src = '../../src/burgericon_active.png';

	} else {

		img.src = '../../src/burgericon.png';
	}
	/*To display burger icon or active burger icon*/


	/*To display right side content*/
	if (rightSideContent.style.display === 'none') {

		rightSideContent.style.display = 'block';

	} else {

		rightSideContent.style.display = 'none';
	}
	/*To display right side content*/
}
/*Controller*/


/*Declare Global*/
window.controller_Div_DisplayRightSideContent = controller_Div_DisplayRightSideContent;
/*Declare Global*/


/*Export*/
export default controller_Div_DisplayRightSideContent;
/*Export*/