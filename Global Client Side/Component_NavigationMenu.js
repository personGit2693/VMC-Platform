/*Import*/
import {currentPage} from "./Values_Global.js";
import {accountAccess} from "./Request_GetLoginDetails.js";
/*Import*/


/*Component*/
function NavigationMenu(){

	var navigationOptions = [
		{pageName:"Home", link:"../../index.php", icon:"../../src/homeiconblack.png", activeIcon:"../../src/homeiconblack.png", accessLevelKey:""},
		{pageName:"Manage User Accounts", link:"../../Module User Management/Pages/Page_ManageUser.php", icon:"../../src/user account management icon.png", activeIcon:"../../src/user account management icon.png", accessLevelKey:"User Management Navigation"},
		{pageName:"Settings", link:"../../Module Settings/Pages/Page_AccountSettings.php", icon:"../../src/gear_black.png", activeIcon:"../../src/gear_black.png", accessLevelKey:""},
		{pageName:"Logout", link:"../../Global PHP/DestroySessions.php", icon:"../../src/logouticon black.png", activeIcon:"../../src/logouticon black.png", accessLevelKey:""}
	];
	
	let navigationMenu = `
		<div id="navLogoWrap">
			<img src="../../src/vmclogo.png" />
			<span class="lightMode">VMC WAC</span>
		</div>
	`;

	
	for(let index=0; index < navigationOptions.length; index++){

		let pageName = navigationOptions[index].pageName;
		let link = navigationOptions[index].link;				
		let a_Class = "";
		let div_Class = "";
		let span_Class = "generalNavMenuText_RoClass";
		let div_Styles = "";
		let accessLevelKey = navigationOptions[index].accessLevelKey;


		if(!accountAccess.includes(accessLevelKey) && accessLevelKey != ""){
			continue;
		}


		if(currentPage == pageName){
			a_Class = "activeMainNavMenu_RoClass lightMode";
			div_Class = `activeMainNavMenuIconWrap_RoClass`;
			div_Styles = `--activeMainNavMenuIcon:url('${navigationOptions[index].activeIcon}')`;
		}else {
			a_Class = "mainNavMenu_RoClass lightMode";
			div_Class = `mainNavMenuIconWrap_RoClass`;
			div_Styles = `--mainNavMenuIcon:url('${navigationOptions[index].icon}'); --activeMainNavMenuIcon:url('${navigationOptions[index].activeIcon}')`;
		} 

		navigationMenu += `
			<a href="${link}" class="${a_Class}">					
				<div class="${div_Class}" style="${div_Styles}"></div>
				<span class="${span_Class}">${pageName}</span>
			</a>
		`;
	}


	return navigationMenu;
}
/*Component*/


/*Export*/
export default NavigationMenu;
/*Export*/