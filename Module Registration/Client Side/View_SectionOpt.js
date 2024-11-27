/*Import*/
import {sectionOptWrap} from "./Elements_Page_Registration.js";
import SectionOpt from "./Component_SectionOpt.js";
/*Import*/


/*Render*/
function viewSectionOpt(){
	sectionOptWrap.querySelector(".selectDropdownOptsArea_RoClass").innerHTML = SectionOpt();
}
/*Render*/


/*Export*/
export default viewSectionOpt;
/*Export*/