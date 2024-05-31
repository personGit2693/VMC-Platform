/*Import*/
import {jobTitleDetails_Array} from "./Request_JobTitles.js";
/*Import*/


/*Component*/
function JobTitleOpt(){

	let jobTitleOpt = ``;

	for(let index=0; index < jobTitleDetails_Array.length; index++){

		let jobtitle_name = jobTitleDetails_Array[index].name;
		let jobtitle_icon = `../../src/avataricon_black.png`;
		let elemValue = btoa(unescape(encodeURIComponent(JSON.stringify(jobTitleDetails_Array[index]))));

		jobTitleOpt += `<div class="selectDropdownOpt_RoClass" onclick="displaySelectedOpt(this, '300px')" title="${jobtitle_name}">
			<input type="hidden" class="optValue_RoClass" value="${elemValue}">
			<div class="optIcon_RoClass" style="--optIcon: url('${jobtitle_icon}');"></div>
			<div class="optText_RoClass">${jobtitle_name}</div>
		</div>`;
	}

	if(jobTitleDetails_Array.length == 0){
		jobTitleOpt = `<span style="color: #ffffff;">No Result</span>`;
	}

	return jobTitleOpt;
}
/*Component*/


/*Export*/
export default JobTitleOpt;
/*Export*/