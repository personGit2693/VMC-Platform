/*Import*/
import {accountsTableBody} from "./Elements_Page_ManageUser.js";
import AccountsDetailsMoreLoader from "./Component_AccountsDetailsMoreLoader.js";
/*Import*/


/*Render*/
function viewAccountsDetailsMoreLoader(){
	accountsTableBody.innerHTML += AccountsDetailsMoreLoader();
}
/*Render*/


/*Export*/
export default viewAccountsDetailsMoreLoader;
/*Export*/