/*Import*/
import {suffixDropdown} from "./Elements_Page_Registration.js";
import SuffixLoaderDiv from "./Component_SuffixLoaderDiv.js";
/*Import*/


/*Render*/
function viewSuffixLoaderDiv(){

	suffixDropdown.querySelector(".selectDropdownOptsArea_RoClass").innerHTML = SuffixLoaderDiv();
}
/*Render*/


/*Export*/
export default viewSuffixLoaderDiv;
/*Export*/