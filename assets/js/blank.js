/** @format */
import { todoDate } from './selectors.js';
import { select, log } from './utils.js';
const options = {
	weekday: 'short',
	year: 'numeric',
	month: 'long',
	day: 'numeric',
};
const noDate = 'No Date';
const today = Temporal.Now.plainDateISO();
const f = new Intl.DateTimeFormat('en-us', options);
const fullDate = f.format(today);
// this fills the various date fields with short day, full month and year in forms with date required
todoDate ? (todoDate.value = fullDate) : (todoDate.value = noDate);
