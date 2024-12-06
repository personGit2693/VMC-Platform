/*Import*/

/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
var elemReference_GetSections = null;
var elemReference_Registration = null;

var registerToEndpoint = null;

var value_SearchSection = "";
var value_empId = "";
var value_empFname = "";
var value_empMname = "";
var value_empLname = "";
var value_empSuffix = "";
var value_empSection = "";
var value_empPassword1 = "";
var value_empPassword2 = "";
var value_regValid = false;
/*Prep export variables*/


/*Assign, Reset, Populate*/
function assignRegisterToEndpoint(newValue){
	registerToEndpoint = newValue;
}

function assignElemReference_Registration(newValue){
	elemReference_Registration = newValue;
}

function assignValue_RegValid(newValue){
	value_regValid = newValue;
}

function resetValue_RegValid(){
	value_regValid = false;
}

function assignValue_EmpPassword2(newValue){
	value_empPassword2 = newValue;
}

function resetValue_EmpPassword2(){
	value_empPassword2 = "";
}

function assignValue_EmpPassword1(newValue){
	value_empPassword1 = newValue;
}

function resetValue_EmpPassword1(){
	value_empPassword1 = "";
}

function assignValue_EmpLname(newValue){
	value_empLname = newValue;
}

function resetValue_EmpLname(){
	value_empLname = "";
}

function assignValue_EmpMname(newValue){
	value_empMname = newValue;
}

function resetValue_EmpMname(){
	value_empMname = "";
}

function assignValue_EmpFname(newValue){
	value_empFname = newValue;
}

function resetValue_EmpFname(){
	value_empFname = "";
}

function assignValue_EmpId(newValue){
	value_empId = newValue;
}

function resetValue_EmpId(){
	value_empId = "";
}

function assignValue_SearchSection(newValue){
	value_SearchSection = newValue;
}

function resetValue_SearchSection(){
	value_SearchSection = "";
}

function assignElemReference_GetSections(elem){
	elemReference_GetSections = elem;
}

function assignValue_EmpSuffix(newValue){
	value_empSuffix = newValue;
}

function resetValue_EmpSuffix(){
	value_empSuffix = "";
}

function assignValue_EmpSection(newValue){
	value_empSection = newValue;
}

function resetValue_EmpSection(){
	value_empSection = "";
}
/*Assign, Reset, Populate*/


/*Export*/
export {
	registerToEndpoint,
	assignRegisterToEndpoint,
	assignElemReference_Registration,
	elemReference_Registration,
	resetValue_RegValid,
	assignValue_RegValid,
	value_regValid,
	assignValue_EmpLname,
	resetValue_EmpLname,
	assignValue_EmpMname,
	resetValue_EmpMname,
	assignValue_EmpFname,
	resetValue_EmpFname,
	assignValue_EmpId,
	resetValue_EmpId,
	resetValue_EmpPassword1,
	assignValue_EmpPassword1,
	resetValue_EmpPassword2,
	assignValue_EmpPassword2,
	value_empId,
	value_empFname,
	value_empMname,
	value_empLname,
	value_empPassword1,
	value_empPassword2,
	resetValue_EmpSection,
	assignValue_EmpSection,
	resetValue_EmpSuffix,
	assignValue_EmpSuffix,
	value_empSuffix,
	value_empSection,
	resetValue_SearchSection,
	value_SearchSection,
	assignValue_SearchSection,
	elemReference_GetSections,
	assignElemReference_GetSections
};
/*Export*/