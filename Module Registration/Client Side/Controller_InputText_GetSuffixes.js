/*Import*/
import {submitSuffixes} from "./Submit_Suffixes.js";
import outputSuffixDiv from "./Output_SuffixDiv.js";
import outputSuffixLoaderDiv from "./Output_SuffixLoaderDiv.js";
/*Import*/


/*Controller*/
function controller_InputText_GetSuffixes(elem){	

	submitSuffixes(outputSuffixDiv, outputSuffixLoaderDiv, "suffixDropdownLoader-id", elem.value);
}
/*Controller*/


/*Declare Global*/
window.controller_InputText_GetSuffixes = controller_InputText_GetSuffixes;
/*Declare Global*/


/*Export*/
export default controller_InputText_GetSuffixes;
/*Export*/