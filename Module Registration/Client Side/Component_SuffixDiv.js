/*Import*/
import {suffixDetails_Array} from "./Request_Suffixes.js";
/*Import*/


/*Component*/
function SuffixDiv(){

	let suffixDiv = ``;

	for(let index=0; index < suffixDetails_Array.length; index++){

		let suffix_text = suffixDetails_Array[index].suffix_text;
		let suffix_icon = `../../src/${suffixDetails_Array[index].suffix_icon}`;
		let elemValue = btoa(unescape(encodeURIComponent(JSON.stringify(suffixDetails_Array[index]))));

		suffixDiv += `<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '1000px')">
			<input type="hidden" class="optValue_RoClass" value="${elemValue}">
			<div class="optIcon_RoClass" style="--optIcon: url('${suffix_icon}');"></div>
			<div class="optText_RoClass">${suffix_text}</div>
		</div>`;
	}

	return suffixDiv;
}
/*Component*/


/*Export*/
export default SuffixDiv;
/*Export*/