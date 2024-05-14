/*Import*/
import {fileInput} from "./Elements_Page_Posting.js"
/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
const fileReader = new FileReader();
var chatContactName = "";
/*Prep export variables*/


/*Assign, Reset, Populate*/
/*_Assign chatContactName*/
function assignChatContactName(chatContactName_Param){
	chatContactName = chatContactName_Param;
}
/*_Assign chatContactName*/


/*_Reset fileInput*/
function resetFileInput(){
	fileInput.value = '';
}
/*_Reset fileInput*/
/*Assign, Reset, Populate*/


/*Export*/
export {
	fileReader,
	resetFileInput,
	chatContactName,
	assignChatContactName
};
/*Export*/