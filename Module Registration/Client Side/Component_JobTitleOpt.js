/*Import*/
import {sections_Array} from "./Request_Sections.js";
/*Import*/


/*Component*/
function JobTitleOpt(){

	let jobTitleOpt = ``;

	for(let index=0; index < sections_Array.length; index++){

		let section_name = sections_Array[index].section_name;
		let section_icon = `../../src/avataricon_black.png`;
		let elemValue = btoa(unescape(encodeURIComponent(JSON.stringify(sections_Array[index]))));

		jobTitleOpt += `<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '300px')" title="${section_name}">
			<input type="hidden" class="optValue_RoClass" value="${elemValue}">
			<div class="optIcon_RoClass" style="--optIcon: url('${section_icon}');"></div>
			<div class="optText_RoClass">${section_name}</div>
		</div>`;
	}

	if(sections_Array.length == 0){
		jobTitleOpt = `<span style="color: #ffffff;">No Result</span>`;
	}

	return jobTitleOpt;
}
/*Component*/


/*Export*/
export default JobTitleOpt;
/*Export*/