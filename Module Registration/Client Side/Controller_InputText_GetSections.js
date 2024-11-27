/*Import*/
import {submitSections} from "./Submit_Sections.js";
import outputSectionOpt from "./Output_SectionOpt.js";
import {assignValue_SearchSection, value_SearchSection, assignElemReference_GetSections} from "./Values_Registration.js";
/*Import*/


/*Controller*/
function controller_InputText_GetSections(elem){	

	assignElemReference_GetSections(elem);
	assignValue_SearchSection(elem.value);

	const dataObj = {searchSection:value_SearchSection};
	const controllersObj = {outputSectionOpt};
	const loaderObj = {};

	submitSections(controller_InputText_GetSections, dataObj, controllersObj, loaderObj);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_GetSections = controller_InputText_GetSections;
/*Declare Global*/


/*Export*/
export default controller_InputText_GetSections;
/*Export*/