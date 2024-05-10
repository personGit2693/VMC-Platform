/*Import*/
import {commentSection} from "./Elements_Page_Posting.js";
/*Import*/


/*Controller*/
function controller_Div_ToggleComments(){

	if (commentSection.style.display === "none") {

		commentSection.style.display = "block";

	} else {

		commentSection.style.display = "none";
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Div_ToggleComments = controller_Div_ToggleComments;
/*Declare Global*/


/*Export*/
export default controller_Div_ToggleComments;
/*Export*/