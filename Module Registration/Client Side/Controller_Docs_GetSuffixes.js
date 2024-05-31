/*Import*/
import {submitSuffixes} from "./Submit_Suffixes.js";
import outputSuffixOpt from "./Output_SuffixOpt.js";
import outputSuffixLoaderDiv from "./Output_SuffixLoaderDiv.js";
/*Import*/


/*Controller*/
function controller_Docs_GetSuffixes(){	

	submitSuffixes(outputSuffixOpt, outputSuffixLoaderDiv, "suffixLoader-id", "");
}
/*Controller*/


/*Declare Global*/
window.controller_Docs_GetSuffixes = controller_Docs_GetSuffixes;
/*Declare Global*/


/*Export*/
export default controller_Docs_GetSuffixes;
/*Export*/