/*Import*/
import {fileInput} from "./Elements_Page_Posting.js"
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
const fileReader = new FileReader();
/*Prep export variables*/


/*Assign, Reset, Populate*/
/*_Reset fileInput*/
function resetFileInput(){
	fileInput.value = '';
}
/*_Reset fileInput*/
/*Assign, Reset, Populate*/


/*Export*/
export {
	fileReader,
	resetFileInput
};
/*Export*/