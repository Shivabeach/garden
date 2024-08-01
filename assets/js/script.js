/** @format */
import { properCase, log, listen, months, addToArray } from './utils.js';

const copyr = document.querySelector('.copyr');
const datey = document.querySelector('.datey');

let yer = new Date();
copyr.innerHTML = `\u00A92024 - ${yer.getFullYear()}`; //copywright

for (let i = 0; i < document.links.length; i++) {
	// this highlights the current active link
	if (document.links[i].href === document.URL) {
		document.links[i].className = 'current';
	}
}
const today = new Date();
const f = new Intl.DateTimeFormat('en-us', {
	dateStyle: 'full',
	timeStyle: 'full',
});
// datey.style.color = '#4b0082';
datey.innerHTML = f.format(today);
