/*Import*/
import {jobTitleDropdown} from "./Elements_Page_Registration.js";
import JobTitleOpt from "./Component_JobTitleOpt.js";
/*Import*/


/*Render*/
function viewJobTitleOpt(){

	jobTitleDropdown.querySelector(".selectDropdownOptsArea_RoClass").innerHTML = JobTitleOpt();
}
/*Render*/


/*Export*/
export default viewJobTitleOpt;
/*Export*/