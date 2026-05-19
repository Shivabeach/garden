/** @format */
//updated with Claude on 4/8/2026
function openPage(pageName, elmnt, color) {
	const tabcontents = document.querySelectorAll('.tabcontent');
	const tablinks = document.querySelectorAll('.tablink');

	tabcontents.forEach((tabcontent) => {
		tabcontent.style.display = 'none';
	});

	tablinks.forEach((tablink) => {
		tablink.style.backgroundColor = '';
	});

	document.getElementById(pageName).style.display = 'block';
	elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById('defaultOpen').click();
