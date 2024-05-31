/*Import*/
import {submitJobTitles} from "./Submit_JobTitles.js";
import outputJobTitleOpt from "./Output_JobTitleOpt.js";
import outputJobTitleLoaderDiv from "./Output_JobTitleLoaderDiv.js";
/*Import*/


/*Controller*/
function controller_InputText_GetJobTitle(elem){	

	submitJobTitles(outputJobTitleOpt, outputJobTitleLoaderDiv, "jobTitleLoader-id", elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_GetJobTitle = controller_InputText_GetJobTitle;
/*Declare Global*/


/*Export*/
export default controller_InputText_GetJobTitle;
/*Export*/