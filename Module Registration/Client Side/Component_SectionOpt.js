/*Import*/
import {sections_Array} from "./Request_Sections.js";
/*Import*/


/*Component*/
function SectionOpt(){

	let sectionOpt = ``;

	for(let index=0; index < sections_Array.length; index++){

		let office_Name = sections_Array[index].office;
		let office_Icon = `../../src/avataricon_black.png`;
		let elemValue = btoa(unescape(encodeURIComponent(JSON.stringify(sections_Array[index]))));

		sectionOpt += `<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '300px'), controller_DivOpt_AssignSectionValue(this), controller_Univ_ValidateRegistration()" title="${office_Name}">
			<input type="hidden" class="optValue_RoClass" value="${elemValue}">
			<div class="optIcon_RoClass" style="--optIcon: url('${office_Icon}');"></div>
			<div class="optText_RoClass">${office_Name}</div>
		</div>`;
	}

	if(sections_Array.length == 0){
		sectionOpt = `<span style="color: #ffffff;">No Result</span>`;
	}

	return sectionOpt;
}
/*Component*/


/*Export*/
export default SectionOpt;
/*Export*/