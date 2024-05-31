/*Import*/
import {jobTitleDropdown} from "./Elements_Page_Registration.js";
import JobTitleLoaderDiv from "./Component_JobTitleLoaderDiv.js";
/*Import*/


/*Render*/
function viewJobTitleLoaderDiv(){

	jobTitleDropdown.querySelector(".selectDropdownOptsArea_RoClass").innerHTML = JobTitleLoaderDiv();
}
/*Render*/


/*Export*/
export default viewJobTitleLoaderDiv;
/*Export*/