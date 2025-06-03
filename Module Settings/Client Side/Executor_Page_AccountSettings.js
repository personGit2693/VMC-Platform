/*Import*/
import controller_Doc_GetLoginDetails from './Controller_Doc_GetLoginDetails.js';
import outputPageLoader from "../../Global Client Side/Output_PageLoader.js";
import controller_Doc_AssignCurrentPage from "./../../Global Client Side/Controller_Doc_AssignCurrentPage.js";
/*Import*/


/*Dependencies*/
//outputPageLoader();
/*Dependencies*/


/*Assign Current Page*/
controller_Doc_AssignCurrentPage("Settings");
/*Assign Current Page*/

/*Get Login Details*/
controller_Doc_GetLoginDetails(window);
/*Get Login Details*/