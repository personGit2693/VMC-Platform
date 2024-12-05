/*Import*/
import {signInBtn} from "./Elements_Login.js";
import {value_Password, value_EmpId, assignElemReference_Login} from "./Values_Login.js";
import {submitLogin} from "./Submit_Login.js";
/*Import*/


/*Controller*/
function controller_Btn_Login(elem){
	
	if(value_EmpId !== "" && value_Password !== ""){

		assignElemReference_Login(elem);

		signInBtn.disabled = true;
		signInBtn.innerText = "Logging in";

		const dataObj = {empId:value_EmpId, password:value_Password};
		const controllersObj = {};
		const loaderObj = {};

		submitLogin(controller_Btn_Login, dataObj, controllersObj, loaderObj);
	}else{
		alert("Please provide your employee I.D and Password!");
	}		
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_Login = controller_Btn_Login;
/*Declare Global*/


/*Export*/
export default controller_Btn_Login;
/*Export*/