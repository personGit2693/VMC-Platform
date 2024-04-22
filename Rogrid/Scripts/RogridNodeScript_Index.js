/****************************************************************************************************************************************************************************/
/*cusInputs_RoClass highlight focus*/
const highlightInWrap = (inputs_Param, fontColorValue) =>{
	inputs_Param.parentNode.style.borderColor = fontColorValue;
	inputs_Param.parentNode.children[1].style.color = fontColorValue;
}

const lowlightInWrap = (inputs_Param, fontColorValue) =>{
	if(inputs_Param.value==""){
		inputs_Param.parentNode.style.borderColor = fontColorValue;
		inputs_Param.parentNode.children[1].style.color = fontColorValue;
	}
}
/*cusInputs_RoClass highlight focus*/
/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Display current date*/

if(document.getElementsByClassName("currentDate_RoClass").length != 0){
	/*_currentDate_RoClass Element where to display current date*/
	const currentDate_RoClass_Rogrid = document.getElementsByClassName("currentDate_RoClass")[0];

	const dateInstance_Rogrid = new Date();

	currentDate_RoClass_Rogrid.innerText = dateInstance_Rogrid.toDateString();
	/*_currentDate_RoClass Element where to display current date*/
}

/*Display current date*/
/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Check and uncheck Custom Checkbox*/

const checkCusCheckBox = (realCheckboxElem_Param) =>{
	const checkImageElem_Rogrid = realCheckboxElem_Param.previousElementSibling.children[0].children[0]; /*check image element*/
	if(realCheckboxElem_Param.checked === true){
		checkImageElem_Rogrid.style.visibility = "visible";
	}else if(realCheckboxElem_Param.checked === false){
		checkImageElem_Rogrid.style.visibility = "hidden";
	}
}

/*Check and uncheck Custom Checkbox*/
/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Show and Close Custom Modal*/


/*_Function to show blurrer only*/
const showBlurrerOnly = () =>{
	const thisIsJapan_Class_Rogrid = document.getElementsByClassName("thisIsJapan_RoClass")[0];
	thisIsJapan_Class_Rogrid.style.display = "block";
}
/*_Function to show blurrer only*/


/*_Function to show modal*/
const showMyMod = (modalClass_Param, modalInt_Param) =>{
	const modal_Class_Rogrid = document.getElementsByClassName(modalClass_Param)[modalInt_Param];
	modal_Class_Rogrid.parentNode.style.display = "flex";
	modal_Class_Rogrid.style.display = "block";
	asyncDelayModal(modalClass_Param, modalInt_Param);
}
/*_Function to show modal*/


/*Async function to delay the animation for showing modal*/
async function asyncDelayModal(demodalClass_Param, demodalInt_Param){
	const demodal_Class_Rogrid = document.getElementsByClassName(demodalClass_Param)[demodalInt_Param];

	const promiseAnimateMod_Obj = new Promise((delayAnimateMod_Resolve) => {
		setTimeout(function(){
			demodal_Class_Rogrid.parentNode.style.width = "100%";
			demodal_Class_Rogrid.parentNode.style.height = "100%";
			demodal_Class_Rogrid.style.transform = "scale(1)";			
			delayAnimateMod_Resolve();
		}, 1);		
	});
	await promiseAnimateMod_Obj;
}
/*Async function to delay the animation for showing modal*/


/*Function to close modal*/
function closeMyMod(closeModalClass_Param, closeModalInt_Param){
	const closeModal_Class_Rogrid = document.getElementsByClassName(closeModalClass_Param)[closeModalInt_Param];
	closeModal_Class_Rogrid.parentNode.style.display = "none";
	closeModal_Class_Rogrid.parentNode.style.width = "0px";
	closeModal_Class_Rogrid.parentNode.style.height = "0px";
	closeModal_Class_Rogrid.style.display = "none";
	closeModal_Class_Rogrid.style.transform = "scale(0)";
}
/*Function to close modal*/

/*Show and Close Custom Modal*/
/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Spinning Loading*/

/*_Function for showing the spinner loading*/
const showSpinningLoad = () => {
	const thisIsJapan_Class_Rogrid = document.getElementsByClassName("thisIsJapan_RoClass")[0];
	const spinnerLoad_RoClass_Rogrid = document.getElementsByClassName("spinnerLoad_RoClass")[0];

	spinnerLoad_RoClass_Rogrid.style.display = "block";
	thisIsJapan_Class_Rogrid.style.display = "block";
}
/*_Function for showing the spinner loading*/


/*_Function for closing the spinner loading*/
const removeSpinningLoad = () => {
	const thisIsJapan_Class_Rogrid = document.getElementsByClassName("thisIsJapan_RoClass")[0];
	const spinnerLoad_RoClass_Rogrid = document.getElementsByClassName("spinnerLoad_RoClass")[0];

	spinnerLoad_RoClass_Rogrid.style.display = "none";
	thisIsJapan_Class_Rogrid.style.display = "none";
}
/*_Function for closing the spinner loading*/

/*Spinning Loading*/
/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Function for removing notification box*/
const removeNotiBox = (notiBoxCloseImg_Rogrid_Param) =>{
	const notiBoxElem_Rogrid = notiBoxCloseImg_Rogrid_Param.parentNode.parentNode;
	notiBoxElem_Rogrid.remove();
}
/*Function for removing notification box*/
/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Function to auto remove the Notification Box*/
async function removeNotiBox_Timeout(notiboxImg_Param){	

	const promiseRemoveNotibox_Obj = new Promise((removeNotiBox_Resolve) => {
		setTimeout(function(){
			removeNotiBox(notiboxImg_Param);
		}, 3000);		
	});

	await promiseRemoveNotibox_Obj;
}
/*Function to auto remove the Notification Box*/
/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Function for creating notification box with auto close*/
const notifyNodeBox = (resultBool_Param, notiMessage_Param, wrapperId_Param) =>{
	const notifBoxWrapperId_Rogrid = document.getElementById(wrapperId_Param);

	if(resultBool_Param == true){
		/*_<div class="notifyFlex_Suc_RoClass">*/
		const notifyFlex_Suc_RoClass_Rogrid = document.createElement("div");
		notifyFlex_Suc_RoClass_Rogrid.className = "notifyFlex_Suc_RoClass";
		/*_<div class="notifyFlex_Suc_RoClass">*/


		/*_<div class="notifyMessItem_Suc_RoClass"><b>SUCCESS!</b> Message Here</div>*/
		const notifyMessItem_Suc_RoClass_Rogrid = document.createElement("div");
		notifyMessItem_Suc_RoClass_Rogrid.className = "notifyMessItem_Suc_RoClass";

		const notifyMessBoldTag_Rogrid = document.createElement("b");
		const notifyMessBoldTag_InnerTEXT = document.createTextNode("SUCCESS! ");
		notifyMessBoldTag_Rogrid.appendChild(notifyMessBoldTag_InnerTEXT);

		const notifyMess_InnerText = document.createTextNode(notiMessage_Param);

		notifyMessItem_Suc_RoClass_Rogrid.appendChild(notifyMessBoldTag_Rogrid);
		notifyMessItem_Suc_RoClass_Rogrid.appendChild(notifyMess_InnerText);
		/*_<div class="notifyMessItem_Suc_RoClass"><b>SUCCESS!</b> Message Here</div>*/


		/*_<div class="notifyCloseItem_Suc_RoClass">*/
		const notifyCloseItem_Suc_RoClass_Rogrid = document.createElement("div");
		notifyCloseItem_Suc_RoClass_Rogrid.className = "notifyCloseItem_Suc_RoClass";
		/*_<div class="notifyCloseItem_Suc_RoClass">*/


		/*_<img src="./src/closeModIcon_Suc.png" onclick="removeNotiBox(this)">*/
		const closeNotiBoxImg_Suc_Rogrid = document.createElement("img");
		closeNotiBoxImg_Suc_Rogrid.setAttribute("src", "./src/closeModIcon_Suc.png");
		closeNotiBoxImg_Suc_Rogrid.addEventListener("click", function(){
			removeNotiBox(this); /*From framework*/
		});
		/*_<img src="./src/closeModIcon_Suc.png" onclick="removeNotiBox(this)">*/


		/*_Append*/
		notifyCloseItem_Suc_RoClass_Rogrid.appendChild(closeNotiBoxImg_Suc_Rogrid);
		notifyFlex_Suc_RoClass_Rogrid.appendChild(notifyMessItem_Suc_RoClass_Rogrid);
		notifyFlex_Suc_RoClass_Rogrid.appendChild(notifyCloseItem_Suc_RoClass_Rogrid);
		notifBoxWrapperId_Rogrid.insertBefore(notifyFlex_Suc_RoClass_Rogrid, notifBoxWrapperId_Rogrid.firstChild);
		/*_Append*/


		/*_Execute Notification Box Timeout*/
		removeNotiBox_Timeout(closeNotiBoxImg_Suc_Rogrid);
		/*_Execute Notification Box Timeout*/

	}else if(resultBool_Param == false){
		/*_<div class="notifyFlex_Failed_RoClass">*/
		const notifyFlex_Failed_RoClass_Rogrid = document.createElement("div");
		notifyFlex_Failed_RoClass_Rogrid.className = "notifyFlex_Failed_RoClass";
		/*_<div class="notifyFlex_Failed_RoClass">*/


		/*_<div class="notifyMessItem_Failed_RoClass"><b>Failed!</b> Message Here</div>*/
		const notifyMessItem_Failed_RoClass_Rogrid = document.createElement("div");
		notifyMessItem_Failed_RoClass_Rogrid.className = "notifyMessItem_Failed_RoClass";

		const notifyMessBoldTag_Rogrid = document.createElement("b");
		const notifyMessBoldTag_InnerTEXT = document.createTextNode("Failed! ");
		notifyMessBoldTag_Rogrid.appendChild(notifyMessBoldTag_InnerTEXT);

		const notifyMess_InnerText = document.createTextNode(notiMessage_Param);

		notifyMessItem_Failed_RoClass_Rogrid.appendChild(notifyMessBoldTag_Rogrid);
		notifyMessItem_Failed_RoClass_Rogrid.appendChild(notifyMess_InnerText);
		/*_<div class="notifyMessItem_Failed_RoClass"><b>Failed!</b> Message Here</div>*/


		/*_<div class="notifyCloseItem_Failed_RoClass">*/
		const notifyCloseItem_Failed_RoClass_Rogrid = document.createElement("div");
		notifyCloseItem_Failed_RoClass_Rogrid.className = "notifyCloseItem_Failed_RoClass";
		/*_<div class="notifyCloseItem_Failed_RoClass">*/


		/*_<img src="./src/closeModIcon_Failed.png" onclick="removeNotiBox(this)">*/
		const closeNotiBoxImg_Failed_Rogrid = document.createElement("img");
		closeNotiBoxImg_Failed_Rogrid.setAttribute("src", "./src/closeModIcon_Failed.png");
		closeNotiBoxImg_Failed_Rogrid.addEventListener("click", function(){
			removeNotiBox(this); /*From framework*/
		});
		/*_<img src="./src/closeModIcon_Failed.png" onclick="removeNotiBox(this)">*/


		/*_Append*/
		notifyCloseItem_Failed_RoClass_Rogrid.appendChild(closeNotiBoxImg_Failed_Rogrid);
		notifyFlex_Failed_RoClass_Rogrid.appendChild(notifyMessItem_Failed_RoClass_Rogrid);
		notifyFlex_Failed_RoClass_Rogrid.appendChild(notifyCloseItem_Failed_RoClass_Rogrid);
		notifBoxWrapperId_Rogrid.insertBefore(notifyFlex_Failed_RoClass_Rogrid, notifBoxWrapperId_Rogrid.firstChild);
		/*_Append*/
		


		/*_Execute Notification Box Timeout*/
		removeNotiBox_Timeout(closeNotiBoxImg_Failed_Rogrid);
		/*_Execute Notification Box Timeout*/
	}
}
/*Function for creating notification box with auto close*/
/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Function for creating notification box without auto close*/
const notifyNodeBoxStay = (resultBool_Param, notiMessage_Param, wrapperId_Param) =>{
	const notifBoxWrapperId_Rogrid = document.getElementById(wrapperId_Param);

	if(resultBool_Param == true){
		/*_<div class="notifyFlex_Suc_RoClass">*/
		const notifyFlex_Suc_RoClass_Rogrid = document.createElement("div");
		notifyFlex_Suc_RoClass_Rogrid.className = "notifyFlex_Suc_RoClass";
		/*_<div class="notifyFlex_Suc_RoClass">*/


		/*_<div class="notifyMessItem_Suc_RoClass"><b>SUCCESS!</b> Message Here</div>*/
		const notifyMessItem_Suc_RoClass_Rogrid = document.createElement("div");
		notifyMessItem_Suc_RoClass_Rogrid.className = "notifyMessItem_Suc_RoClass";

		const notifyMessBoldTag_Rogrid = document.createElement("b");
		const notifyMessBoldTag_InnerTEXT = document.createTextNode("SUCCESS! ");
		notifyMessBoldTag_Rogrid.appendChild(notifyMessBoldTag_InnerTEXT);

		const notifyMess_InnerText = document.createTextNode(notiMessage_Param);

		notifyMessItem_Suc_RoClass_Rogrid.appendChild(notifyMessBoldTag_Rogrid);
		notifyMessItem_Suc_RoClass_Rogrid.appendChild(notifyMess_InnerText);
		/*_<div class="notifyMessItem_Suc_RoClass"><b>SUCCESS!</b> Message Here</div>*/


		/*_<div class="notifyCloseItem_Suc_RoClass">*/
		const notifyCloseItem_Suc_RoClass_Rogrid = document.createElement("div");
		notifyCloseItem_Suc_RoClass_Rogrid.className = "notifyCloseItem_Suc_RoClass";
		/*_<div class="notifyCloseItem_Suc_RoClass">*/


		/*_<img src="./src/closeModIcon_Suc.png" onclick="removeNotiBox(this)">*/
		const closeNotiBoxImg_Suc_Rogrid = document.createElement("img");
		closeNotiBoxImg_Suc_Rogrid.setAttribute("src", "./src/closeModIcon_Suc.png");
		closeNotiBoxImg_Suc_Rogrid.addEventListener("click", function(){
			removeNotiBox(this); /*From framework*/
		});
		/*_<img src="./src/closeModIcon_Suc.png" onclick="removeNotiBox(this)">*/


		/*_Append*/
		notifyCloseItem_Suc_RoClass_Rogrid.appendChild(closeNotiBoxImg_Suc_Rogrid);
		notifyFlex_Suc_RoClass_Rogrid.appendChild(notifyMessItem_Suc_RoClass_Rogrid);
		notifyFlex_Suc_RoClass_Rogrid.appendChild(notifyCloseItem_Suc_RoClass_Rogrid);
		notifBoxWrapperId_Rogrid.insertBefore(notifyFlex_Suc_RoClass_Rogrid, notifBoxWrapperId_Rogrid.firstChild);
		/*_Append*/
	}else if(resultBool_Param == false){
		/*_<div class="notifyFlex_Failed_RoClass">*/
		const notifyFlex_Failed_RoClass_Rogrid = document.createElement("div");
		notifyFlex_Failed_RoClass_Rogrid.className = "notifyFlex_Failed_RoClass";
		/*_<div class="notifyFlex_Failed_RoClass">*/


		/*_<div class="notifyMessItem_Failed_RoClass"><b>Failed!</b> Message Here</div>*/
		const notifyMessItem_Failed_RoClass_Rogrid = document.createElement("div");
		notifyMessItem_Failed_RoClass_Rogrid.className = "notifyMessItem_Failed_RoClass";

		const notifyMessBoldTag_Rogrid = document.createElement("b");
		const notifyMessBoldTag_InnerTEXT = document.createTextNode("Failed! ");
		notifyMessBoldTag_Rogrid.appendChild(notifyMessBoldTag_InnerTEXT);

		const notifyMess_InnerText = document.createTextNode(notiMessage_Param);

		notifyMessItem_Failed_RoClass_Rogrid.appendChild(notifyMessBoldTag_Rogrid);
		notifyMessItem_Failed_RoClass_Rogrid.appendChild(notifyMess_InnerText);
		/*_<div class="notifyMessItem_Failed_RoClass"><b>Failed!</b> Message Here</div>*/


		/*_<div class="notifyCloseItem_Failed_RoClass">*/
		const notifyCloseItem_Failed_RoClass_Rogrid = document.createElement("div");
		notifyCloseItem_Failed_RoClass_Rogrid.className = "notifyCloseItem_Failed_RoClass";
		/*_<div class="notifyCloseItem_Failed_RoClass">*/


		/*_<img src="./src/closeModIcon_Failed.png" onclick="removeNotiBox(this)">*/
		const closeNotiBoxImg_Failed_Rogrid = document.createElement("img");
		closeNotiBoxImg_Failed_Rogrid.setAttribute("src", "./src/closeModIcon_Failed.png");
		closeNotiBoxImg_Failed_Rogrid.addEventListener("click", function(){
			removeNotiBox(this); /*From framework*/
		});
		/*_<img src="./src/closeModIcon_Failed.png" onclick="removeNotiBox(this)">*/


		/*_Append*/
		notifyCloseItem_Failed_RoClass_Rogrid.appendChild(closeNotiBoxImg_Failed_Rogrid);
		notifyFlex_Failed_RoClass_Rogrid.appendChild(notifyMessItem_Failed_RoClass_Rogrid);
		notifyFlex_Failed_RoClass_Rogrid.appendChild(notifyCloseItem_Failed_RoClass_Rogrid);
		notifBoxWrapperId_Rogrid.insertBefore(notifyFlex_Failed_RoClass_Rogrid, notifBoxWrapperId_Rogrid.firstChild);
		/*_Append*/
	}
}
/*Function for creating notification box without auto close*/
/****************************************************************************************************************************************************************************/





/****************************************************************************************************************************************************************************/
/*Function for checking and unchecking custom radio button*/
const radioCircleSelected = (origRadioBtn_Elem, innerCircleColor) =>{

	const origRadioBtnName_Rogrid = origRadioBtn_Elem.getAttribute("name"); /*Get the original button name to filter only the involved radio buttons Section.*/

	const origRadioBtnColl_Rogrid = document.getElementsByName(origRadioBtnName_Rogrid); /*Filter only the involved original button and collect them Section.*/

	for(let index=0; origRadioBtnColl_Rogrid.length > index; index++){

		const customRadioCircleBtn_Rogrid = origRadioBtnColl_Rogrid[index].previousElementSibling; /*Get the customized radio button or the label elem Section.*/		

		/*_Checking which radio button is selected and design its customized radio button*/
		if(origRadioBtnColl_Rogrid[index] === origRadioBtn_Elem){

			if(origRadioBtnColl_Rogrid[index].getAttribute("data-rogridradio-check") == "false"){
				
				origRadioBtnColl_Rogrid[index].setAttribute("data-rogridradio-check", "true");				
				customRadioCircleBtn_Rogrid.style.boxShadow = "0px 0px 15px "+innerCircleColor;
				customRadioCircleBtn_Rogrid.children[0].style.backgroundColor = innerCircleColor;				

			}else if(origRadioBtnColl_Rogrid[index].getAttribute("data-rogridradio-check") == "true"){

				origRadioBtnColl_Rogrid[index].setAttribute("data-rogridradio-check", "false");
				origRadioBtnColl_Rogrid[index].checked = false;
				customRadioCircleBtn_Rogrid.style.boxShadow = "none";
				customRadioCircleBtn_Rogrid.children[0].style.backgroundColor = "transparent";
			}		

		}else if(origRadioBtnColl_Rogrid[index] !== origRadioBtn_Elem){

			origRadioBtnColl_Rogrid[index].setAttribute("data-rogridradio-check", "false");
			origRadioBtnColl_Rogrid[index].checked = false;
			customRadioCircleBtn_Rogrid.style.boxShadow = "none";
			customRadioCircleBtn_Rogrid.children[0].style.backgroundColor = "transparent";
		}
		/*_Checking which radio button is selected and design its customized radio button*/
	}
}


const radioCheckSelected = (origRadioBtn_Elem) =>{

	const origRadioBtnName_Rogrid = origRadioBtn_Elem.getAttribute("name"); /*Get the original button name to filter only the involved radio buttons Section.*/

	const origRadioBtnColl_Rogrid = document.getElementsByName(origRadioBtnName_Rogrid); /*Filter only the involved original button and collect them Section.*/
	

	/*_Checking which radio button is selected and make the customized check visible*/
	for(let index=0; origRadioBtnColl_Rogrid.length > index; index++){

		if(origRadioBtnColl_Rogrid[index] === origRadioBtn_Elem){

			if(origRadioBtnColl_Rogrid[index].getAttribute("data-rogridradio-check") == "false"){

				origRadioBtnColl_Rogrid[index].setAttribute("data-rogridradio-check", "true");
				origRadioBtnColl_Rogrid[index].previousElementSibling.children[0].style.visibility = "visible";

			}else if(origRadioBtnColl_Rogrid[index].getAttribute("data-rogridradio-check") == "true"){

				origRadioBtnColl_Rogrid[index].checked = false;
				origRadioBtnColl_Rogrid[index].setAttribute("data-rogridradio-check", "false");
				origRadioBtnColl_Rogrid[index].previousElementSibling.children[0].style.visibility = "hidden";	
			}				

		}else if(origRadioBtnColl_Rogrid[index] !== origRadioBtn_Elem){

			origRadioBtnColl_Rogrid[index].checked = false;
			origRadioBtnColl_Rogrid[index].setAttribute("data-rogridradio-check", "false");
			origRadioBtnColl_Rogrid[index].previousElementSibling.children[0].style.visibility = "hidden";
		}
	}
	/*_Checking which radio button is selected and make the customized check visible*/
}
/*Function for checking and unchecking custom radio button*/
/****************************************************************************************************************************************************************************/


/****************************************************************************************************************************************************************************/ 
/*Capture webpage*/
const capturePage = (captureElemId_Param, thisElem_Param) => {
	
	window.scrollTo(0, 0);
	
	html2canvas(document.getElementById(captureElemId_Param)).then(function (canvas) {		
		canvas.toBlob(function(canvasBlob){
			saveAs(canvasBlob, thisElem_Param.value);	
		});
	});	
}
/*Capture webpage*/
/****************************************************************************************************************************************************************************/ 


/****************************************************************************************************************************************************************************/ 
/*Function for turning upside down the arrow of clickable action button and show the action list buttons*/
const showActionButtons = (masterBtnWrap) =>{	
	masterBtnWrap.classList.toggle("masterBtnWrap_Animate_Class");

	if(masterBtnWrap.classList.contains("masterBtnWrap_Animate_Class") === true){
		masterBtnWrap.children[1].children[0].src = "./src/Chevron Up.png"; /*Editable action button arrow icon*/

		masterBtnWrap.nextElementSibling.style.display = "block";
	}else if(masterBtnWrap.classList.contains("masterBtnWrap_Animate_Class") === false){
		masterBtnWrap.children[1].children[0].src = "./src/Chevron Down.png"; /*Editable action button arrow icon*/

		masterBtnWrap.nextElementSibling.style.display = "none";
	}	
}
/*Function for turning upside down the arrow of clickable action button and show the action list buttons*/
/****************************************************************************************************************************************************************************/ 




/****************************************************************************************************************************************************************************/ 
/*Draw Pie Chart*/
function drawPieChart(chartData_Array, chartOption_Obj, chartWrapperId){
	const data = google.visualization.arrayToDataTable(chartData_Array);
	const options = chartOption_Obj;

	const chart = new google.visualization.PieChart(document.getElementById(chartWrapperId));

	chart.draw(data, options);
}
/*Draw Pie Chart*/
/****************************************************************************************************************************************************************************/ 




/****************************************************************************************************************************************************************************/ 
/*Draw Line Chart*/
function drawLineChart(chartData_Array, chartOption_Obj, chartWrapperId){
	const data = google.visualization.arrayToDataTable(chartData_Array);
	const options = chartOption_Obj;

	const chart = new google.visualization.LineChart(document.getElementById(chartWrapperId));

	chart.draw(data, options);
}
/*Draw Line Chart*/
/****************************************************************************************************************************************************************************/ 



/****************************************************************************************************************************************************************************/ 
/*Draw Bar Chart*/
function drawBarChart(chartData_Array, chartOption_Obj, chartWrapperId){
	const data = google.visualization.arrayToDataTable(chartData_Array);
	const options = chartOption_Obj;

	const chart = new google.visualization.BarChart(document.getElementById(chartWrapperId));

	chart.draw(data, options);
}
/*Draw Bar Chart*/
/****************************************************************************************************************************************************************************/ 



/****************************************************************************************************************************************************************************/ 
/*Draw Area Chart*/
function drawAreaChart(chartData_Array, chartOption_Obj, chartWrapperId){
	const data = google.visualization.arrayToDataTable(chartData_Array);
	const options = chartOption_Obj;

	const chart = new google.visualization.AreaChart(document.getElementById(chartWrapperId));

	chart.draw(data, options);
}
/*Draw Area Chart*/
/****************************************************************************************************************************************************************************/ 



/****************************************************************************************************************************************************************************/ 
/*Display Date Range Calendar Lite*/
function displayDateRangeCalLite(dateRange){
	const dateRangeTooltipArrow = dateRange.querySelector(".dateRangeTooltipArrow_RoClass");
	const dateRangeCalLiteWrap = dateRange.nextElementSibling;

	if(dateRangeTooltipArrow.style.display == "block"){		
		dateRangeCalLiteWrap.style.maxHeight = "0px";
		dateRangeTooltipArrow.style.display = "none";
	}else if(dateRangeTooltipArrow.style.display != "block"){		
		dateRangeCalLiteWrap.style.maxHeight = "1000px";
		dateRangeTooltipArrow.style.display = "block";
	}
}

function setDateRangeFromText(dateRange, calLiteValue){
	const newDateFormatFrom = new Date(calLiteValue.value);
	
	const dateRangeFrom = dateRange.querySelector(".dateRangeFrom_RoClass");

	dateRangeFrom.innerText = newDateFormatFrom.toLocaleDateString();
}

function setDateRangeToText(dateRange, calLiteValue){
	const newDateFormatTo = new Date(calLiteValue.value);
	
	const dateRangeTo = dateRange.querySelector(".dateRangeTo_RoClass");

	dateRangeTo.innerText = newDateFormatTo.toLocaleDateString();
}
/*Display Date Range Calendar Lite*/
/****************************************************************************************************************************************************************************/ 


/****************************************************************************************************************************************************************************/ 
/*Display Select Dropdown Options*/
function showSelectDropdownOpts(displayedSelectedFlex, selectDropdownOptionsWrap_Height){
	const selectDropdownOptionsWrap = displayedSelectedFlex.parentNode.querySelector(".selectDropdownOptionsWrap_RoClass");
	const displayedSelectedChevron = displayedSelectedFlex.querySelector(".displayedSelectedChevron_RoClass");
	const searchOpts = displayedSelectedFlex.parentNode.querySelector(".searchOpts_RoClass");

	if(selectDropdownOptionsWrap.style.display != "block"){		
		selectDropdownOptionsWrap.style.display = "block";
		displayedSelectedChevron.style.transform = "rotateX(180deg)";		
		selectDropdownOptionsWrap.style.maxHeight = selectDropdownOptionsWrap_Height;
		searchOpts.focus();
	}else if(selectDropdownOptionsWrap.style.display == "block"){
		selectDropdownOptionsWrap.style.maxHeight = "0";
		selectDropdownOptionsWrap.style.display = "none";
		displayedSelectedChevron.style.transform = "rotateX(0deg)";
	}	
}


function closeSelectDropdownOpts(){
	const allSelectDropdownWrap = document.querySelectorAll(".selectDropdownWrap_RoClass");
	
	for(let index=0; index < allSelectDropdownWrap.length; index++){
		const selectDropdownOptionsWrap = allSelectDropdownWrap[index].querySelector(".selectDropdownOptionsWrap_RoClass");
		const displayedSelectedChevron = allSelectDropdownWrap[index].querySelector(".displayedSelectedChevron_RoClass");

		if(selectDropdownOptionsWrap.style.display == "block"){
			selectDropdownOptionsWrap.style.maxHeight = "0";
			selectDropdownOptionsWrap.style.display = "none";
			displayedSelectedChevron.style.transform = "rotateX(0deg)";
		}		
	}
}


function displaySelectedOpt(selectDropdownOpt, selectDropdownOptionsWrap_Height){
	const selectedOptValue = selectDropdownOpt.parentNode.parentNode.parentNode.querySelector(".selectedOptValue_RoClass");
	const displayedSelectedFlex = selectDropdownOpt.parentNode.parentNode.parentNode.querySelector(".displayedSelectedFlex_RoClass");
	const displayedSelectedIcon = selectDropdownOpt.parentNode.parentNode.parentNode.querySelector(".displayedSelectedIcon_RoClass");
	const displayedSelectedText = selectDropdownOpt.parentNode.parentNode.parentNode.querySelector(".displayedSelectedText_RoClass");
	const displayedSelectedResetBtn = selectDropdownOpt.parentNode.parentNode.parentNode.querySelector(".displayedSelectedResetBtn_RoClass");

	const optValue = selectDropdownOpt.querySelector(".optValue_RoClass");
	const optIcon = selectDropdownOpt.querySelector(".optIcon_RoClass");
	const optText = selectDropdownOpt.querySelector(".optText_RoClass");

	/*Assign selectedOptValue value*/
	selectedOptValue.value = optValue.value;
	displayedSelectedFlex.title = optText.innerText;
	displayedSelectedIcon.style.setProperty("--optIcon", getComputedStyle(optIcon).getPropertyValue('--optIcon'));
	displayedSelectedText.innerText = optText.innerText;
	displayedSelectedResetBtn.style.display = "block";
	/*Assign selectedOptValue value*/
}


function focusoutSearchSelectDrop(searchOpts, selectDropdownOptionsWrap_Height){
	showSelectDropdownOpts(searchOpts.parentNode.parentNode.querySelector(".displayedSelectedFlex_RoClass"), selectDropdownOptionsWrap_Height);
}


function resetSelectDropdown(resetSelDropBtn, resetSelDropTitle, resetSelDropIcon, resetSelDropText){

	const selectedOptValue = resetSelDropBtn.parentNode.parentNode.querySelector(".selectedOptValue_RoClass");
	const selectedFlex = resetSelDropBtn.parentNode.parentNode.querySelector(".displayedSelectedFlex_RoClass");
	const selectedIcon = resetSelDropBtn.parentNode.parentNode.querySelector(".displayedSelectedIcon_RoClass");
	const selectedText = resetSelDropBtn.parentNode.parentNode.querySelector(".displayedSelectedText_RoClass");


	/*Reset Area*/
	/*_Reset Select Dropdown Value*/
	selectedOptValue.value = "";
	/*_Reset Select Dropdown Value*/

	/*_Display none displayedSelectedResetBtn*/
	resetSelDropBtn.style.display = "none";
	/*_Display none displayedSelectedResetBtn*/

	/*_Reset Title*/
	selectedFlex.title = resetSelDropTitle;
	/*_Reset Title*/

	/*_Reset Icon*/
	selectedIcon.style.setProperty("--optIcon", "url('"+resetSelDropIcon+"')");
	/*_Reset Icon*/

	/*_Reset Text*/
	selectedText.innerText = resetSelDropText;
	/*_Reset Text*/
	/*Reset Area*/
}
/*Display Select Dropdown Options*/
/****************************************************************************************************************************************************************************/ 


/****************************************************************************************************************************************************************************/ 
/*Box Loader*/
function displayBoxLoader(boxLoaderWrap){

	boxLoaderWrap.style.display = "flex";
}


function hideBoxLoader(boxLoaderWrap){

	boxLoaderWrap.style.display = "none";
}
/*Box Loader*/
/****************************************************************************************************************************************************************************/ 