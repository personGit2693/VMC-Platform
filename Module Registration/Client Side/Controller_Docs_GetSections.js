/*Import*/
import {submitSections} from "./Submit_Sections.js";
import outputJobTitleOpt from "./Output_JobTitleOpt.js";
import outputJobTitleLoaderDiv from "./Output_JobTitleLoaderDiv.js";
/*Import*/


/*Controller*/
function controller_Docs_GetSections(){	

	submitSections(outputJobTitleOpt, outputJobTitleLoaderDiv, "jobTitleLoader-id", "");
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_GetSections = controller_Docs_GetSections;
/*Declare Global*/


/*Export*/
export default controller_Docs_GetSections;
/*Export*/