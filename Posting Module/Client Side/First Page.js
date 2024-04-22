/*For Dark / Light Mode toggle*/
const toggleModeButton = document.getElementById('toggle-mode');
const body = document.body;

function setMode(isLightMode) {
	body.classList.toggle('light-mode', isLightMode);
	toggleModeButton.textContent = isLightMode ? 'Dark Mode' : 'Light Mode';
}

const isLightMode = localStorage.getItem('isLightMode') === 'true';

setMode(isLightMode);

toggleModeButton.addEventListener('click', () => {
	const newMode = !body.classList.contains('light-mode');

	setMode(newMode);
	localStorage.setItem('isLightMode', newMode);
});
/*For Dark / Light Mode toggle*/

/*For textarea auto resize*/
function autoResizeTextarea(textarea) {
	textarea.style.height = 'auto';
	textarea.style.height = (textarea.scrollHeight) + 'px';
}
/*For textarea auto resize*/

/*For right side content controls / functions*/
window.addEventListener('DOMContentLoaded', () => {
	const burgerIcon = document.querySelector('.burger-icon');
	const rightSideContent = document.querySelector('.right-side-content');

	function toggleRightSideContent() {
		if (window.innerWidth <= 1080) {
			rightSideContent.style.display = 'none';
			burgerIcon.style.display = 'block';
		} else {
			rightSideContent.style.display = 'block';
			burgerIcon.style.display = 'none';
		}
	}

	function toggleIcon() {
		const img = burgerIcon.querySelector('img');

		if (img.src.includes('burgericon.png')) {
			img.src = '../../src/burgericon_active.png';
		} else {
			img.src = '../../src/burgericon.png';
		}
	}

	toggleRightSideContent();

	burgerIcon.addEventListener('click', () => {
		if (rightSideContent.style.display === 'none') {
			rightSideContent.style.display = 'block';
		} else {
			rightSideContent.style.display = 'none';
		}

		toggleIcon();
	});

	window.addEventListener('resize', toggleRightSideContent);
});
/*For right side content controls / functions*/