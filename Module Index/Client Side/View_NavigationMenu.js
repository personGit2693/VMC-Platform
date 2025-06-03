/*Import*/
import {sidemechaCon} from "./../../Global Client Side/Elements_Global.js";
import NavigationMenu from "./Component_NavigationMenu.js";
/*Import*/


/*Render*/
function viewNavigationMenu(){
	
	sidemechaCon.innerHTML = NavigationMenu();
}
/*Render*/


/*Export*/
export default viewNavigationMenu;
/*Export*/