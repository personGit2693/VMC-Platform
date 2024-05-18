/*Import*/

/*Import*/


/*Controller*/
function controller_Btn_TogglePasswordVisibility2(inputId){

	const passwordInput = document.getElementById(inputId);
	const passwordEye1 = document.getElementById('togglePasswordBtn1');
	const passwordEye2 = document.getElementById('togglePasswordBtn2');

	if (passwordInput.type === "password"){
		passwordInput.type = "text";
		passwordEye2.style.setProperty('--iconBtnBgIcon', 'url("../../src/passwordeyeclose.png")');
	}else{
		passwordInput.type ="password";
		passwordEye2.style.setProperty('--iconBtnBgIcon', 'url("../../src/passwordeyeopen.png")');
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_TogglePasswordVisibility2 = controller_Btn_TogglePasswordVisibility2;
/*Declare Global*/


/*Export*/
export default controller_Btn_TogglePasswordVisibility2;
/*Export*/