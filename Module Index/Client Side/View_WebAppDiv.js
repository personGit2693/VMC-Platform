/*Import*/
import {webAppList} from "./Elements_Index.js";
import WebAppDiv from "./Component_WebAppDiv.js";
/*Import*/


/*Render*/
function viewWebAppDiv(){
	
	webAppList.innerHTML = WebAppDiv();
}
/*Render*/


/*Export*/
export default viewWebAppDiv;
/*Export*/