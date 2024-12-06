/*Import*/

/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
var elemReference_RegisterEsrs = null;
var elemReference_GetLoginDetails = null;
var elemReference_GetApps = null;
var elemReference_RegisterSmis = null;

var esrsEndpoint = "LoginEsrs";
var smisEndpoint = "LoginSmis";
var pageRegistrationSuccessPath = "../../Global Pages/Page_RegistrationSuccess.php";
var lightmode = "lightMode";
var darkmode = "darkMode";
var globalKey = null;
var colormode = "lightMode";

var isLightMode = localStorage.getItem('isLightMode') === 'true';
var chatContactName = "";
/*Prep export variables*/


/*Assign, Reset, Populate*/
function assignElemReference_RegisterSmis(newValue){
	elemReference_RegisterSmis = newValue;
}

function assignElemReference_RegisterEsrs(newValue){
	elemReference_RegisterEsrs = newValue;
}

function assignElemReference_GetApps(newValue){
	elemReference_GetApps = newValue;
}

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
	elemReference_RegisterSmis,
	assignElemReference_RegisterSmis,
	smisEndpoint,
	esrsEndpoint,
	pageRegistrationSuccessPath,
	elemReference_RegisterEsrs,
	assignElemReference_RegisterEsrs,
	assignElemReference_GetApps,
	elemReference_GetApps,
	darkmode,
	lightmode,
	colormode,
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