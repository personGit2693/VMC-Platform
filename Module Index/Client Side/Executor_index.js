/*Import*/
import controller_Doc_GetLoginDetails from "./Controller_Doc_GetLoginDetails.js";
import controller_Doc_GetApps from "./Controller_Doc_GetApps.js";
import controller_Doc_AssignCurrentPage from "./../../Global Client Side/Controller_Doc_AssignCurrentPage.js";
/*Import*/


/*Dependencies*/

/*Dependencies*/


/*Assign Current Page*/
controller_Doc_AssignCurrentPage("Home");
/*Assign Current Page*/


/*Get Account Details*/
controller_Doc_GetLoginDetails(window);
/*Get Account Details*/


/*Get Apps*/
controller_Doc_GetApps(window);
/*Get Apps*/