/*Import*/
import {greetingUserImage} from "./Elements_Index.js";
import {globalKey} from "../../Global Client Side/Values_Global.js";
/*Import*/


/*Component*/
function GreetingUserDetails(){
	
	const accountFirstname = `${globalKey.account_fname}`;
	const accountId = `${globalKey.account_id}`;
	const accountPicture = `./Employee Pictures/${globalKey.account_picture}`;

	greetingUserImage.src = `${accountPicture}`;

	let greetingUserDetails = `
		<div class="mainmechaCon_RoClass lightMode" id="greetingUserFName">Hi! welcome, ${accountFirstname}!</div>
		<div class="mainmechaCon_RoClass sub-textFColor" id="greetingUserEmpNo">Employee number ${accountId}</div>
	`;	

	return greetingUserDetails;
}
/*Component*/


/*Export*/
export default GreetingUserDetails;
/*Export*/