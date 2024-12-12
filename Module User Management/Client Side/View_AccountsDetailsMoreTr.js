/*Import*/
import {accountsTableBody} from "./Elements_Page_ManageUser.js";
import AccountsDetailsMoreTr from "./Component_AccountsDetailsMoreTr.js";
/*Import*/


/*Render*/
function viewAccountsDetailsMoreTr(){
	accountsTableBody.innerHTML += AccountsDetailsMoreTr();
}
/*Render*/


/*Export*/
export default viewAccountsDetailsMoreTr;
/*Export*/