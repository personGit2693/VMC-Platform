/*Import*/
import {fileInput} from "./Elements_Page_Posting.js"
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
var isLightMode = localStorage.getItem('isLightMode') === 'true';
const fileReader = new FileReader();
/*Prep export variables*/


/*Assign, Reset, Populate*/
/*_Assign isLightMode*/
function assignIsLightMode(newMode){
	isLightMode = newMode;
}
/*_Assign isLightMode*/


/*_Reset fileInput*/
function resetFileInput(){
	fileInput.value = '';
}
/*_Reset fileInput*/
/*Assign, Reset, Populate*/


/*Export*/
export {
	isLightMode,
	assignIsLightMode,
	fileReader,
	resetFileInput
};
/*Export*/