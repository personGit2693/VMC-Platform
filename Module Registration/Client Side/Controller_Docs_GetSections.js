/*Import*/
import {submitSections} from "./Submit_Sections.js";
import outputSectionOpt from "./Output_SectionOpt.js";
import {value_SearchSection, assignElemReference_GetSections} from "./Values_Registration.js";
/*Import*/


/*Controller*/
function controller_Docs_GetSections(elem){	

	assignElemReference_GetSections(elem);

	const dataObj = {searchSection:value_SearchSection};
	const controllersObj = {outputSectionOpt};
	const loaderObj = {};

	submitSections(controller_Docs_GetSections, dataObj, controllersObj, loaderObj);
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_GetSections = controller_Docs_GetSections;
/*Declare Global*/


/*Export*/
export default controller_Docs_GetSections;
/*Export*/