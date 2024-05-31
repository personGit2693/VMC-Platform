/*Import*/
import {submitJobTitles} from "./Submit_JobTitles.js";
import outputJobTitleOpt from "./Output_JobTitleOpt.js";
import outputJobTitleLoaderDiv from "./Output_JobTitleLoaderDiv.js";
/*Import*/


/*Controller*/
function controller_Docs_GetJobTitle(){	

	submitJobTitles(outputJobTitleOpt, outputJobTitleLoaderDiv, "jobTitleLoader-id", "");
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_GetJobTitle = controller_Docs_GetJobTitle;
/*Declare Global*/


/*Export*/
export default controller_Docs_GetJobTitle;
/*Export*/