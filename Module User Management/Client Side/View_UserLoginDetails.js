/*Import*/
import {userLoginDetailsWrap} from "./Elements_Page_ManageUser.js";
import UserLoginDetails from "./Component_UserLoginDetails.js";
/*Import*/


/*Render*/
function viewUserLoginDetails(){
	
	userLoginDetailsWrap.innerHTML = UserLoginDetails();
}
/*Render*/


/*Export*/
export default viewUserLoginDetails;
/*Export*/