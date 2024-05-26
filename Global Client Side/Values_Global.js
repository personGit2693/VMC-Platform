/*Import*/

/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
var isLightMode = localStorage.getItem('isLightMode') === 'true';
var chatContactName = "";
/*Prep export variables*/


/*Assign, Reset, Populate*/
/*_Assign isLightMode*/
function assignIsLightMode(newMode){
	isLightMode = newMode;
}
/*_Assign isLightMode*/

/*_Assign chatContactName*/
function assignChatContactName(chatContactName_Param){
	chatContactName = chatContactName_Param;
}
/*_Assign chatContactName*/
/*Assign, Reset, Populate*/


/*Export*/
export {
	isLightMode,
	assignIsLightMode,
	chatContactName,
	assignChatContactName
};
/*Export*/