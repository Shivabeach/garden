/** @format */
import { properCase, log, listen, addToArray } from './utils.js';
const copyr = document.querySelector('.copyr');
const datey = document.querySelector('.datey');

let yer = new Date();
copyr.innerHTML = `\u00A92024 - ${yer.getFullYear()}`; //copywright

// Highlight the current active link using URL normalization
const normalizeHref = (href) => {
	try {
		const u = new URL(href, location.href);
		u.hash = '';
		return u.href.replace(/\/$/, '');
	} catch (err) {
		return href.replace(/#.*$/, '').replace(/\/$/, '');
	}
};
const currentHref = normalizeHref(window.location.href);
Array.from(document.links).forEach((link) => {
	if (normalizeHref(link.href) === currentHref) {
		link.classList.add('current');
	}
});

//Footer Date
const today = Temporal.Now.plainDateISO();
const f = new Intl.DateTimeFormat('en-us', {
	dateStyle: 'full',
});
datey.innerHTML = f.format(today);

const rand = document.querySelector('.rand');
const max = 1000;
const min = 1;
//const a = Math.random() * (max - min) + min
rand.textContent = Math.round(Math.random() * (max - min) + min.toFixed(0));
