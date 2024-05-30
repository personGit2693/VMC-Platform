/*Import*/
import {suffixDropdown} from "./Elements_Page_Registration.js";
import SuffixDiv from "./Component_SuffixDiv.js";
/*Import*/


/*Render*/
function viewSuffixDiv(){

	suffixDropdown.querySelector(".selectDropdownOptsArea_RoClass").innerHTML = SuffixDiv();
}
/*Render*/


/*Export*/
export default viewSuffixDiv;
/*Export*/