/** @format */
const form = document.querySelector('.todo');

async function writeDataFromForm() {
	let formData = new FormData(form);
	let data = Object.fromEntries(formData);
	let jsonData = JSON.stringify(data);

	const url = 'assets/js/form.json';

	let response = await fetch(url, {
		//status: 200, should be 201?
		method: 'POST',
		headers: {
			'Content-Type': 'application/json',
		},
		body: jsonData,
	})
		.then((res) => res.json())
		.then((result) => console.log('Success:', result)) // Empty array
		.catch((err) => alert('there is a problem'));
	// console.log(res.status));
}
form.addEventListener('submit', (e) => {
	e.preventDefault();
	writeDataFromForm();
});
// function display() {}
