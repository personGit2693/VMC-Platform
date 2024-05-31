/*Import*/
import controller_Docs_GetSuffixes from "./Controller_Docs_GetSuffixes.js";
import controller_Docs_GetJobTitle from "./Controller_Docs_GetJobTitle.js";
/*Import*/


/*Dependencies*/
document.body.addEventListener("click", closeSelectDropdownOpts, true);
/*Dependencies*/

/*Populate dropdown for suffixes*/
controller_Docs_GetSuffixes();
/*Populate dropdown for suffixes*/


/*Populate dropdown for job title*/
controller_Docs_GetJobTitle();
/*Populate dropdown for job title*/