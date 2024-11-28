/*Import*/

/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
var elemReference_Login = null;

var value_EmpId = "";
var value_Password = "";
/*Prep export variables*/


/*Assign, Reset, Populate*/
function assignElemReference_Login(newValue){
	elemReference_Login = newValue;
}

function assignValue_EmpId(newValue){
	value_EmpId = newValue;
}

function resetValue_EmpId(){
	value_EmpId = "";
}

function assignValue_Password(newValue){
	value_Password = newValue;
}

function resetValue_Password(){
	value_Password = "";
}
/*Assign, Reset, Populate*/


/*Export*/
export {
	elemReference_Login,
	assignElemReference_Login,
	value_EmpId,
	value_Password,
	assignValue_EmpId,
	resetValue_EmpId,
	assignValue_Password,
	resetValue_Password
};
/*Export*/