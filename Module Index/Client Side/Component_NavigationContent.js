/*Import*/
import {lightmode, darkmode, colormode} from "../../Global Client Side/Values_Global.js";
import {apps} from "../../Global Client Side/Request_GetApps.js";
/*Import*/


/*Component*/
function WebAppDiv(){

	let webAppDiv = ``;

	let perWebAppIcon_ColorMode = ``;
	let perWebAppName_ColorMode = ``;

	if(colormode == lightmode){
		perWebAppIcon_ColorMode = `perWebAppIcon_LightMode`;
		perWebAppName_ColorMode = `lightMode`;
	}else if(colormode == darkmode){
		perWebAppIcon_ColorMode = `perWebAppIcon_DarkMode`;
		perWebAppName_ColorMode = `darkMode`;
	}

	for(let index=0; index < apps.length; index++){		

		webAppDiv += `
			<div class="mainmechaCon_RoClass perWebApp" title="${apps[index].app_abbre}" onclick="controller_Div_LoginToApp('${apps[index].app_link}')">
				<div class="mainmechaCon_RoClass ${perWebAppIcon_ColorMode}" style="--perWebAppIcon_BgImage_DarkMode: url('../../src/${apps[index].app_lighticon}'); --perWebAppIcon_BgImage_LightMode: url('../../src/${apps[index].app_lighticon}');"></div>
				<div class="mainmechaCon_RoClass perWebAppName ${perWebAppName_ColorMode}">${apps[index].app_nameid}</div>
			</div>
		`;
	}	

	return webAppDiv;
}
/*Component*/


/*Export*/
export default WebAppDiv;
/*Export*/