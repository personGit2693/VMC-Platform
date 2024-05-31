/*Import*/
import {suffixDropdown} from "./Elements_Page_Registration.js";
import SuffixOpt from "./Component_SuffixOpt.js";
/*Import*/


/*Render*/
function viewSuffixOpt(){

	suffixDropdown.querySelector(".selectDropdownOptsArea_RoClass").innerHTML = SuffixOpt();
}
/*Render*/


/*Export*/
export default viewSuffixOpt;
/*Export*/