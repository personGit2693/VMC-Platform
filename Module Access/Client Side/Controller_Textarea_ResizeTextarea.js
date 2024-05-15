/*Import*/

/*Import*/


/*Controller*/
function controller_Textarea_ResizeTextArea(textarea){

	textarea.style.height = 'auto';
	textarea.style.height = (textarea.scrollHeight) + 'px';
}
/*Controller*/


/*Declare Global*/
window.controller_Textarea_ResizeTextArea = controller_Textarea_ResizeTextArea;
/*Declare Global*/


/*Export*/
export default controller_Textarea_ResizeTextArea;
/*Export*/