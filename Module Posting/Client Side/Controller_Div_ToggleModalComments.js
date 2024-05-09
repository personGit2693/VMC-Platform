/*Import*/
import {modalCommentSection} from "./Elements_Page_Posting.js";
/*Import*/


/*Controller*/
function controller_Div_ToggleModalComments(){

	if (modalCommentSection.style.display === "none") {

		modalCommentSection.style.display = "block";

	} else {

		modalCommentSection.style.display = "none";
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Div_ToggleModalComments = controller_Div_ToggleModalComments;
/*Declare Global*/


/*Export*/
export default controller_Div_ToggleModalComments;
/*Export*/