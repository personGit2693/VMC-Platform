/*Import*/
/*Import*/


/*Controller*/
function controller_Btn_TogglePasswordVisibility(inputId){

	const passwordInput = document.getElementById(inputId);

	if (passwordInput.type === "password"){
		passwordInput.type = "text";
	}
	else{
		passwordInput.type ="password";
	}
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_TogglePasswordVisibility = controller_Btn_TogglePasswordVisibility;
/*Declare Global*/


/*Export*/
export default controller_Btn_TogglePasswordVisibility;
/*Export*/