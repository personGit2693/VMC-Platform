/*Import*/
import {globalKey} from "../../Global Client Side/Values_Global.js";
/*Import*/


/*Component*/
function UserLoginDetails(){

	const accountPicture = `./src/${globalKey.account_picture}`;
	const accountFullname = `${globalKey.account_fname} ${globalKey.account_mname} `;

	let userLoginDetails = `
		<div class="userLoginIconWrap_RoClass"><img src="./src/actionofficericon.png"/></div>
		<div class="userLoginDetails_RoClass">${accountFullname}</div>
	`;	

	return userLoginDetails;
}
/*Component*/


/*Export*/
export default UserLoginDetails;
/*Export*/