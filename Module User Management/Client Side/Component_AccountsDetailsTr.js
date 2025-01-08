/*Import*/
import {accounts} from "./Request_GetAccounts.js";
/*Import*/


/*Component*/
function AccountsDetailsTr(){

	let accountsDetailsTr = ``;
		
	for(let index=0; index<accounts.length; index++){

		const accountId = `${accounts[index].account_id}`;
		const accountPicture = `../../Employee Pictures/${accounts[index].account_picture}`;
		const accountFullname = `${accounts[index].account_fname} ${accounts[index].account_mname} ${accounts[index].account_lname} ${accounts[index].account_suffix}`;
		const accountSection = accounts[index].account_section;
		const accountCreated = accounts[index].account_datetime;

		let accountStatus = "";
		if(accounts[index].account_status == 1){
			accountStatus = "Activated";
		}else{
			accountStatus = "Deactivated";
		}

		accountsDetailsTr += `
			<tr>
				<td data-label="Employee Number"><img src="${accountPicture}"/>${accountId}</td>	
				<td data-label="Employee Name">${accountFullname}</td>
				<td data-label="Account Status">${accountStatus}</td>	
				<td data-label="Account Section">${accountSection}</td>	
				<td data-label="Date Created">${accountCreated}</td>
				<td data-label="Actions">
					<div class="cusDroplistBtn_RoClass">
						<div class="masterBtnWrap_RoClass" onclick="showActionButtons(this)">
							<button>Actions</button>
							<div><img src="../../src/Chevron Down.png"></div>
						</div>					
						<div class="droplistWrap_RoClass">
							<button class="listBtn_RoClass" value="${accountId}" onclick="controller_Btn_ResetPassword(this)">Reset Password</button>
						</div>
					</div>
				</td>
			</tr>
		`;
	}	

	return accountsDetailsTr;
}
/*Component*/


/*Export*/
export default AccountsDetailsTr;
/*Export*/