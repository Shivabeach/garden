/** @format */
import { todoDate } from './selectors.js';
import { select, log } from './utils.js';
const options = {
	weekday: 'short',
	year: 'numeric',
	month: 'long',
	day: 'numeric',
};
const today = new Date();
const f = new Intl.DateTimeFormat('en-us', options);
const fullDate = f.format(today);
// this fills the various date fields with short day, full month and year in forms with date required
if (todoDate) {
	todoDate.value = fullDate;
}
