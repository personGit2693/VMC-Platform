/*Import*/
import {globalKey} from "../../Global Client Side/Values_Global.js";
/*Import*/


/*Component*/
function GreetingUserDetails(){
	
	const accountFirstname = `${globalKey.account_fname}`;
	const accountId = `${globalKey.account_id}`;

	let greetingUserDetails = `
		<div class="mainmechaCon_RoClass lightMode" id="greetingUserFName">Hi! welcome back, ${accountFirstname}!</div>
		<div class="mainmechaCon_RoClass sub-textFColor" id="greetingUserEmpNo">Employee number ${accountId}</div>
	`;	

	return greetingUserDetails;
}
/*Component*/


/*Export*/
export default GreetingUserDetails;
/*Export*/