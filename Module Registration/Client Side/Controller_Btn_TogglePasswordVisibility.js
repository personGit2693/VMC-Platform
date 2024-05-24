/*Import*/

/*Import*/


/*Controller*/
function controller_Btn_TogglePasswordVisibility(inputId, togglePasswordBtn_Elem){

	const passwordInput = document.getElementById(inputId);	

	if (passwordInput.type === "password"){
		passwordInput.type = "text";
		togglePasswordBtn_Elem.style.setProperty('--iconBtnBgIcon', 'url("../../src/passwordeyeclose.png")');		
	}else{
		passwordInput.type ="password";
		togglePasswordBtn_Elem.style.setProperty('--iconBtnBgIcon', 'url("../../src/passwordeyeopen.png")');
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_TogglePasswordVisibility = controller_Btn_TogglePasswordVisibility;
/*Declare Global*/


/*Export*/
export default controller_Btn_TogglePasswordVisibility;
/*Export*/