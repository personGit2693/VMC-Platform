/*Import*/
import {accounts} from "./Request_GetAccounts.js";
/*Import*/


/*Component*/
function AccountsDetailsLoader(){

	let accountsDetailsLoader = `
		<div class="boxLoaderWrap_RoClass" id="accountLoader">
			<div class="boxLoaderIcon_RoClass">
				<img src="../../src/Spinner.gif">
			</div>
		</div>
	`;

	return accountsDetailsLoader;
}
/*Component*/


/*Export*/
export default AccountsDetailsLoader;
/*Export*/