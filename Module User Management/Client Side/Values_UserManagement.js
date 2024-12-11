/*Import*/

/*Import*/


/*Prep variables*/

/*Prep variables*/


/*Prep export variables*/
var elemReference_GetAccounts = "";

var searchAccount = "";
var sortAccountBy = "accounts_tab.account_fname";
var sortAccountScending = "ASC";
var startRowIndex = 0;
var displayRowNum = 200;
var pageNumber = 1;
/*Prep export variables*/


/*Assign, Reset, Populate*/
function resetPageNumber(){
	pageNumber = 1;
}

function assignElemReference_GetAccounts(newValue){
	elemReference_GetAccounts = newValue;
}

function resetStartRowIndex(){
	startRowIndex = 0;
}

function assignStartRowIndex(newValue){

	if(newValue === false){
		pageNumber--;
	}else if(newValue === true){		
		pageNumber++;
	}
	
	startRowIndex = (pageNumber - 1) * displayRowNum;
}

function resetSortAccountScending(){
	sortAccountScending = "ASC";
}

function assignSortAccountScending(newValue){
	sortAccountScending = newValue;
}

function resetSortAccountBy(){
	searchAccount = "accounts_tab.account_fname";
}

function assignSortAccountBy(newValue){
	sortAccountBy = newValue;
}

function resetSearchAccount(){
	searchAccount = "";
}

function assignSearchAccount(newValue){
	searchAccount = newValue;
}
/*Assign, Reset, Populate*/


/*Export*/
export {
	resetPageNumber,
	pageNumber,
	elemReference_GetAccounts,
	assignElemReference_GetAccounts,
	assignSearchAccount,
	resetSearchAccount,
	assignSortAccountBy,
	resetSortAccountBy,
	assignSortAccountScending,
	resetSortAccountScending,
	assignStartRowIndex,
	resetStartRowIndex,
	searchAccount,
	sortAccountBy,
	sortAccountScending,
	startRowIndex,
	displayRowNum
};
/*Export*/