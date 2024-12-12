/*Import*/
import {accounts} from "./Request_GetAccounts.js";
/*Import*/


/*Component*/
function AccountsDetailsMoreLoader(){

	let accountsDetailsLoader = `
		<div class="boxLoaderWrap_RoClass" id="moreAccountsLoader">
			<div class="boxLoaderIcon_RoClass">
				<img src="../../src/Spinner.gif">
			</div>
		</div>
	`;

	return accountsDetailsLoader;
}
/*Component*/


/*Export*/
export default AccountsDetailsMoreLoader;
/*Export*/