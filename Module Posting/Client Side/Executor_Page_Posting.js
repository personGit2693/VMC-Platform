/*Import*/
import controller_Docs_MoveToggleModeButton from '../../Global Client Side/Controller_Docs_MoveToggleModeButton.js';
import controller_Docs_SetMode from '../../Global Client Side/Controller_Docs_SetMode.js';
import controller_Docs_ToggleRightSideContent from './Controller_Docs_ToggleRightSideContent.js';
/*Import*/


/*Dependencies*/
window.addEventListener('resize', controller_Docs_MoveToggleModeButton);
window.addEventListener('load', controller_Docs_MoveToggleModeButton);
window.addEventListener('resize', controller_Docs_ToggleRightSideContent);
/*Dependencies*/


/*Set dark mode or light mode*/
controller_Docs_SetMode();
/*Set dark mode or light mode*/


/*Display Right side burger*/
controller_Docs_ToggleRightSideContent();
/*Display Right side burger*/