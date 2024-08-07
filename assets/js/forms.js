/** @format */
const form = document.querySelector('.todo');

function handleSubmit() {
	let formData = new FormData(form);
	let data = Object.fromEntries(formData);
	let jsonData = JSON.stringify(data);

	fetch('assets/js/form.json', {
		//status: 200, should be 201?
		method: 'POST',
		headers: {
			'Content-Type': 'application/json',
		},
		body: jsonData,
	})
		.then((res) => res.json())
		.then((result) => console.log(result)) // Empty array
		.catch((err) => console.log(err));
}
form.addEventListener('submit', (e) => {
	e.preventDefault();
	handleSubmit();
	// Call your function here to display the data from the form.
});
function display() {}
