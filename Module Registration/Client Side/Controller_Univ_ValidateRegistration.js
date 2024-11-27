/*Import*/
import {submitRegistrationBtn, cusInputsEmpId, cusInputsEmpFname, cusInputsEmpMname, cusInputsEmpLname, suffixDropdown, sectionDropdown, cusInputsEmpPassword1, cusInputsEmpPassword2} from "./Elements_Page_Registration.js";
import {assignElemReference_Registration, resetValue_RegValid, assignValue_RegValid, value_regValid, value_empId, value_empFname, value_empMname, value_empLname, value_empSuffix, value_empSection, value_empPassword1, value_empPassword2} from "./Values_Registration.js";
import {submitRegistration} from "./Submit_Registration.js";
/*Import*/


/*Controller*/
function controller_Univ_ValidateRegistration(elem){

	assignElemReference_Registration(elem);

	const registrationData_Array = [value_empId, value_empFname, value_empMname, value_empLname, value_empSuffix, value_empSection, value_empPassword1, value_empPassword2];
	const registrationInputs_Array = [cusInputsEmpId, cusInputsEmpFname, cusInputsEmpMname, cusInputsEmpLname, suffixDropdown, sectionDropdown, cusInputsEmpPassword1, cusInputsEmpPassword2];

	/*Check value per data input*/
	for(let index=0; index < registrationData_Array.length; index++){
		if(registrationData_Array[index] == ""){
			registrationInputs_Array[index].style.borderColor = "#7E161F";				
			registrationInputs_Array[index].style.boxShadow = "0px 0px 10px #7E161F";
		}else if(registrationData_Array[index] != ""){
			registrationInputs_Array[index].style.borderColor = "#39AB5B";
			registrationInputs_Array[index].style.boxShadow = "0px 0px 10px #39AB5B";
		}
	}
	/*Check value per data input*/


	/*Check value per data regValid*/
	for(let index=0; index < registrationData_Array.length; index++){
		if(registrationData_Array[index] == ""){
			assignValue_RegValid(false);
			break;
		}else if(registrationData_Array[index] != ""){
			assignValue_RegValid(true);

			if(value_empPassword1 !== value_empPassword2){
				assignValue_RegValid(false);
			}
		}
	}
	/*Check value per data regValid*/


	/*Submit*/
	if(elem === submitRegistrationBtn){		

		submitRegistrationBtn.disabled = true;
		submitRegistrationBtn.innerText = "Submitting";		

		const dataObj = {empId:value_empId, empFname:value_empFname, empMname:value_empMname, empLname:value_empLname, empSuffix:value_empSuffix, empSection:value_empSection, empPassword:value_empPassword1};
		const controllersObj = {};
		const loaderObj = {};

		if(value_regValid === true){
			submitRegistration(controller_Univ_ValidateRegistration, dataObj, controllersObj, loaderObj);
		}else if(value_regValid === false){
			submitRegistration(controller_Univ_ValidateRegistration, dataObj, controllersObj, loaderObj);
		}			
	}	
	/*Submit*/
}
/*Controller*/


/*Declare Global*/
window.controller_Univ_ValidateRegistration = controller_Univ_ValidateRegistration;
/*Declare Global*/


/*Export*/
export default controller_Univ_ValidateRegistration;
/*Export*/