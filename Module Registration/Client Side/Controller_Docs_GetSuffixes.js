/*Import*/
import {submitSuffixes} from "./Submit_Suffixes.js";
import outputSuffixDiv from "./Output_SuffixDiv.js";
import outputSuffixLoaderDiv from "./Output_SuffixLoaderDiv.js";
/*Import*/


/*Controller*/
function controller_Docs_GetSuffixes(){	

	submitSuffixes(outputSuffixDiv, outputSuffixLoaderDiv, "suffixDropdownLoader-id", "");
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_GetSuffixes = controller_Docs_GetSuffixes;
/*Declare Global*/


/*Export*/
export default controller_Docs_GetSuffixes;
/*Export*/