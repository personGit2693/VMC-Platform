/*Import*/
import {accountsTableBody} from "./Elements_Page_ManageUser.js";
import AccountsDetailsLoader from "./Component_AccountsDetailsLoader.js";
/*Import*/


/*Render*/
function viewAccountsDetailsLoader(){
	accountsTableBody.innerHTML = AccountsDetailsLoader();
}
/*Render*/


/*Export*/
export default viewAccountsDetailsLoader;
/*Export*/