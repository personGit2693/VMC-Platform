/*Import*/

/*Import*/


/*Controller*/
function controller_Btn_TogglePasswordVisibility1(inputId){

	const passwordInput = document.getElementById(inputId);
	const passwordEye1 = document.getElementById('togglePasswordBtn1');

	if (passwordInput.type === "password"){
		passwordInput.type = "text";
		passwordEye1.style.setProperty('--iconBtnBgIcon', 'url("../../src/passwordeyeclose.png")');		
	}else{
		passwordInput.type ="password";
		passwordEye1.style.setProperty('--iconBtnBgIcon', 'url("../../src/passwordeyeopen.png")');
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_TogglePasswordVisibility1 = controller_Btn_TogglePasswordVisibility1;
/*Declare Global*/


/*Export*/
export default controller_Btn_TogglePasswordVisibility1;
/*Export*/