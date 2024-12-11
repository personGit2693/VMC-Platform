/*Import*/
import {accountsTableBody} from "./Elements_Page_ManageUser.js";
import AccountsDetailsTr from "./Component_AccountsDetailsTr.js";
/*Import*/


/*Render*/
function viewAccountsDetailsTr(){
	accountsTableBody.innerHTML = AccountsDetailsTr();
}
/*Render*/


/*Export*/
export default viewAccountsDetailsTr;
/*Export*/