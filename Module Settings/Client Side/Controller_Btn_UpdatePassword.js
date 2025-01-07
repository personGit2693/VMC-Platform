/*Import*/
import {globalKey} from "../../Global Client Side/Values_Global.js";
import {oldInputPassword, newInputPassword, cNewInputPassword} from "./Elements_Page_AccountSettings.js";
import {oldPassword, newPassword, cNewPassword, submitUpdatePassword, resetSubmitUpdatePassword, assignSubmitUpdatePassword} from "./Values_Settings.js";
/*Import*/


/*Controller*/
function controller_Btn_UpdatePassword(elem){
	
	/*assignElemReference_GetLoginDetails(elem);*/

	const dataObj = {};
	const controllersObj = {};
	const loaderObj = {};		

	if(oldPassword !== globalKey.correctPassword){
		
		oldInputPassword.nextElementSibling.style.color = "#7E161F";
		oldInputPassword.parentElement.style.borderColor = "#7E161F";
		oldInputPassword.parentElement.style.boxShadow = "0px 0px 10px #7E161F";

		alert(`Current Password is not match!`);
	}else{

		oldInputPassword.nextElementSibling.style.color = "#39AB5B";
		oldInputPassword.parentElement.style.borderColor = "#39AB5B";
		oldInputPassword.parentElement.style.boxShadow = "0px 0px 10px #39AB5B";

		if(newPassword === "" || cNewPassword === ""){
			newInputPassword.nextElementSibling.style.color = "#7E161F";
			newInputPassword.parentElement.style.borderColor = "#7E161F";
			newInputPassword.parentElement.style.boxShadow = "0px 0px 10px #7E161F";

			cNewInputPassword.nextElementSibling.style.color = "#7E161F";
			cNewInputPassword.parentElement.style.borderColor = "#7E161F";
			cNewInputPassword.parentElement.style.boxShadow = "0px 0px 10px #7E161F";

			alert(`Please provide your new password and confirm it!`);
		}else{
			if(newPassword !== cNewPassword){
			
			newInputPassword.nextElementSibling.style.color = "#7E161F";
			newInputPassword.parentElement.style.borderColor = "#7E161F";
			newInputPassword.parentElement.style.boxShadow = "0px 0px 10px #7E161F";

			cNewInputPassword.nextElementSibling.style.color = "#7E161F";
			cNewInputPassword.parentElement.style.borderColor = "#7E161F";
			cNewInputPassword.parentElement.style.boxShadow = "0px 0px 10px #7E161F";

			alert(`New Password and Confirm Password are not match`);
			}else{

				assignSubmitUpdatePassword(true);

				newInputPassword.nextElementSibling.style.color = "#39AB5B";
				newInputPassword.parentElement.style.borderColor = "#39AB5B";
				newInputPassword.parentElement.style.boxShadow = "0px 0px 10px #39AB5B";

				cNewInputPassword.nextElementSibling.style.color = "#39AB5B";
				cNewInputPassword.parentElement.style.borderColor = "#39AB5B";
				cNewInputPassword.parentElement.style.boxShadow = "0px 0px 10px #39AB5B";
			}
		}
		
	}


	if(submitUpdatePassword === true){
		alert(`New Password Updated`);
	}

	/*submitGetLoginDetails(controller_Btn_UpdatePassword, dataObj, controllersObj, loaderObj, serverPath, logoutPath);*/
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_UpdatePassword = controller_Btn_UpdatePassword;
/*Declare Global*/


/*Export*/
export default controller_Btn_UpdatePassword;
/*Export*/