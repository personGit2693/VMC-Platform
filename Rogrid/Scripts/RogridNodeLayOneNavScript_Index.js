/****************************************************************************************************************************************************************************/

/*Change Body Overflow*/
document.body.style.overflow = "hidden";
/*Change Body Overflow*/

/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Layout one Left Side Item display*/

/*_Prep variables*/
var burgerClicked_Rogrid = false;
var leftSideItemShow_Rogrid = false;
/*_Prep variables*/



/*_Left Side Item Itself*/
const sidemecha_RoClass_Rogrid = document.getElementsByClassName("sidemecha_RoClass")[0];
/*_Left Side Item Itself*/




/*_Burger Icon Wrapper and img Elements*/
const burger_RoClass_Rogrid = document.getElementsByClassName("burger_RoClass")[0];
const burgerIcon_RoClass_Rogrid = document.getElementsByClassName("burgerIcon_RoClass")[0];
burgerIcon_RoClass_Rogrid.src = "./src/burgericon.png";
/*_Burger Icon Wrapper img Elements*/



/*_Function to check the size of the screen*/
const checkWinLeftSideItem = (win_Width_Param, win_Height_Param) =>{	
	sidemecha_RoClass_Rogrid.style.transition = "none";

	if(win_Width_Param >= 1081 && win_Width_Param <= 1600){
		burgerClicked_Rogrid = false;
		leftSideItemShow_Rogrid = false;

		sidemecha_RoClass_Rogrid.style.width = "250px";

		burgerIcon_RoClass_Rogrid.src = "./src/burgericon.png";
	}else if(win_Width_Param >= 1601){
		burgerClicked_Rogrid = false;
		leftSideItemShow_Rogrid = false;

		sidemecha_RoClass_Rogrid.style.width = "270px";

		burgerIcon_RoClass_Rogrid.src = "./src/burgericon.png";
	}else if(win_Width_Param <= 641 && burgerClicked_Rogrid == false){
		sidemecha_RoClass_Rogrid.style.width = "0px";
	}else if(win_Width_Param >= 642 && win_Width_Param <= 1080 && burgerClicked_Rogrid == false){
		sidemecha_RoClass_Rogrid.style.width = "0px";
	}else if(win_Width_Param <= 641 && burgerClicked_Rogrid == true && leftSideItemShow_Rogrid == true){
		sidemecha_RoClass_Rogrid.style.width = "180px";
	}else if(win_Width_Param >= 642 && win_Width_Param <= 1080 && burgerClicked_Rogrid == true && leftSideItemShow_Rogrid == true){
		sidemecha_RoClass_Rogrid.style.width = "200px";
	}
}

/*_Function to check the size of the screen*/






/*_Add event to body with checkWinLeftSideItem method*/
window.addEventListener("resize", function(){
	checkWinLeftSideItem(window.innerWidth, window.innerHeight);
});
/*_Add event to body with checkWinLeftSideItem method*/









/*_Function for displaying and closing nav*/
const showLeftSideItem = (win_Width_Param, win_Height_Param) =>{
	burgerClicked_Rogrid = true;
	sidemecha_RoClass_Rogrid.style.transition = "width 0.3s linear 0s";

	if(leftSideItemShow_Rogrid === false && win_Width_Param <= 641){
		sidemecha_RoClass_Rogrid.style.width = "180px";

		burgerIcon_RoClass_Rogrid.src = "./src/burgericon_active.png";

		leftSideItemShow_Rogrid = true;
	}else if(leftSideItemShow_Rogrid === false && win_Width_Param >= 642 && win_Width_Param <= 1080){
		sidemecha_RoClass_Rogrid.style.width = "200px";

		burgerIcon_RoClass_Rogrid.src = "./src/burgericon_active.png";

		leftSideItemShow_Rogrid = true;
	}else if(leftSideItemShow_Rogrid === true){
		sidemecha_RoClass_Rogrid.style.width = "0px";

		burgerIcon_RoClass_Rogrid.src = "./src/burgericon.png";

		leftSideItemShow_Rogrid = false;
	}
}
/*_Function for displaying and closing nav*/



/*_Add event to burger_RoClass_Rogrid with showLeftSideItem method*/
burger_RoClass_Rogrid.addEventListener("click", function(){
	showLeftSideItem(window.innerWidth, window.innerHeight);
});
/*_Add event to burger_RoClass_Rogrid with showLeftSideItem method*/

/*Layout one Left Side Item display*/
/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Collapse Navigation Menu*/

/*_Function for collapsing the collapsable Nav Menu*/
const collapseMenu = (mainNavMenu) => {
	const chevronIconWrap = (mainNavMenu.querySelector(".chevronIconWrap_RoClass") != null) ? mainNavMenu.querySelector(".chevronIconWrap_RoClass") : mainNavMenu.querySelector(".activeChevronIconWrap_RoClass");

	if(mainNavMenu.nextElementSibling.style.maxHeight == "0px"){
		mainNavMenu.nextElementSibling.style.maxHeight = "1000px"; /*Editable*/
		chevronIconWrap.style.transform = "rotate(90deg)";
	}else if(mainNavMenu.nextElementSibling.style.maxHeight != "0px"){
		mainNavMenu.nextElementSibling.style.maxHeight = "0px";
		chevronIconWrap.style.transform = "rotate(0deg)";
	}			
		
}
/*_Function for collapsing the collapsable Nav Menu*/

/*Collapse Navigation Menu*/
/****************************************************************************************************************************************************************************/