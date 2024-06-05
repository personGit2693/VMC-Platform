/*Import*/
import {submitSections} from "./Submit_Sections.js";
import outputJobTitleOpt from "./Output_JobTitleOpt.js";
import outputJobTitleLoaderDiv from "./Output_JobTitleLoaderDiv.js";
/*Import*/


/*Controller*/
function controller_InputText_GetSections(elem){	

	submitSections(outputJobTitleOpt, outputJobTitleLoaderDiv, "jobTitleLoader-id", elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_GetSections = controller_InputText_GetSections;
/*Declare Global*/


/*Export*/
export default controller_InputText_GetSections;
/*Export*/