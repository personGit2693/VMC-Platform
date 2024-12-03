/*Import*/

/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
var elemReference_GetLoginDetails = null;

var lightmode = "lightmode";
var darkmode = "darkmode";
var globalKey = null;
var colorMode = "lightmode";

var isLightMode = localStorage.getItem('isLightMode') === 'true';
var chatContactName = "";
/*Prep export variables*/


/*Assign, Reset, Populate*/
function assignElemReference_GetLoginDetails(newValue){
	elemReference_GetLoginDetails = newValue;
}

function assignGlobalKey(newValue){
	globalKey = JSON.parse(unescape(atob(newValue)));
}

function resetGlobalKey(){
	globalKey = null;
}

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
	darkmode,
	lightmode,
	colorMode,
	elemReference_GetLoginDetails,
	assignElemReference_GetLoginDetails,
	resetGlobalKey,
	globalKey,
	assignGlobalKey,
	isLightMode,
	assignIsLightMode,
	chatContactName,
	assignChatContactName
};
/*Export*/