/** @format */
import { properCase, log, listen, months, addToArray } from './utils.js';

// function returnDate() {
// 	const date = new Date();
// 	const day = date.getDate();
// 	const month = date.getMonth() + 1;
// 	const year = date.getFullYear();
// 	datey.style.color = '#4b0082';
// 	datey.innerHTML = `Today is ${month} / ${day} / ${year}`;
// }
// returnDate();

let yer = new Date();
copyr.innerHTML = `\u00A92024 - ${yer.getFullYear()}`; //copywright

for (let i = 0; i < document.links.length; i++) {
	// this highlights the current active link
	if (document.links[i].href === document.URL) {
		document.links[i].className = 'current';
	}
}
const date = new Date();
const today = Intl.DateTimeFormat('en-US').format(date);
