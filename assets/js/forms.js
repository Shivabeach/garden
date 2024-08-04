/** @format */
const form = document.querySelector('.todo');
form.addEventListener('submit', handleSubmit);

function handleSubmit(e) {
	e.preventDefault();
	let formData = new FormData(form);
	let data = Object.fromEntries(formData);
	let jsonData = JSON.stringify(data);

	fetch('assets/js/form.json', {
		method: 'Post',
		headers: {
			'Content-Type': 'application/json',
		},
		body: jsonData,
	})
		.then((res) => res.json())
		.then((result) => console.log(result))
		.catch((err) => console.log(err));
}
