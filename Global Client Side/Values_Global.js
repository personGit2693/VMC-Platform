/*Import*/

/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
var isLightMode = localStorage.getItem('isLightMode') === 'true';
/*Prep export variables*/


/*Assign, Reset, Populate*/
/*_Assign isLightMode*/
function assignIsLightMode(newMode){
	isLightMode = newMode;
}
/*_Assign isLightMode*/
/*Assign, Reset, Populate*/


/*Export*/
export {
	isLightMode,
	assignIsLightMode
};
/*Export*/