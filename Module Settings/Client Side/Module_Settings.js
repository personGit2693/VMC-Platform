/*toggle password visibility*/

function togglePasswordVisibility(inputId) {
	const passwordInput = document.getElementById(inputId);

	if (passwordInput.type === "password"){
		passwordInput.type = "text";
	}

	else{
		passwordInput.type ="password";
	}
}

/*toggle password visibility*/

/*change profile pic*/

function openFileSelector(){
	document.getElementById('fileInput').click();
}

const fileInput = document.getElementById('fileInput');

if (fileInput){

	fileInput.addEventListener('change', function() {
		const selectedFile = this.files[0];
		if (selectedFile) {
			const reader = new FileReader();
			reader.onload = function(event){
				document.getElementById('profilePic-id').src = event.target.result;
				document.getElementById('profilePic-id1').src = event.target.result;
			};
			reader.readAsDataURL(selectedFile);
		}
	});
}	

/*change profile pic*/

/*Edit Name*/
const nameDisplay = document.getElementById('nameDisplay-id');
const changeNamePic = document.getElementById('changeNamePic-id');

changeNamePic.addEventListener('click', function(){
	nameDisplay.contentEditable = true;
	nameDisplay.focus();
});

nameDisplay.addEventListener('blur', function(){
	nameDisplay.contentEditable = false;
});
/*Edit Name*/