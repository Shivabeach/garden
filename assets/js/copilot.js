/** @format */

document.querySelector('.todo').addEventListener('submit', function (event) {
	event.preventDefault(); // Prevent the default form submission

	// Create a new FormData object from the form
	console.log(this);
	const formData = new FormData(this);

	// Convert FormData to a plain object
	const formObject = {};
	formData.forEach((value, key) => {
		formObject[key] = value;
	});

	// Convert the plain object to a JSON string
	const jsonString = JSON.stringify(formObject);

	// Use fetch to post the JSON data to the specified URL
	const url = 'http://localhost/garden/assets/js/form.json';
	fetch(url, {
		method: 'POST',
		headers: {
			'Content-Type': 'application/json',
		},
		body: jsonString,
	})
		.then((response) => response.json())

		.then((data) => {
			console.log('Success:', data);
		})
		.catch((error) => {
			console.error('Error:', error);
		});
});
