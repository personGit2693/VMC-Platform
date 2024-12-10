/*Import*/
import {userLoginDetailsWrap} from "./Elements_Index.js";
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