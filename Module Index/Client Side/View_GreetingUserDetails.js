/*Import*/
import {greetingUserDetailsWrap} from "./Elements_Index.js";
import GreetingUserDetails from "./Component_GreetingUserDetails.js";
/*Import*/


/*Render*/
function viewGreetingUserDetails(){
	
	greetingUserDetailsWrap.innerHTML = GreetingUserDetails();
}
/*Render*/


/*Export*/
export default viewGreetingUserDetails;
/*Export*/