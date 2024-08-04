/** @format */

const form = document.querySelector('.todo');

form.addEventListener('submit', (e) => {
	e.preventDefault();

	const formData = new FormData(form);
	const data = Object.fromEntries(formData);

	fetch('assets/js/form.json', {
		method: 'Post',
		headers: {
			'Content-Type': 'application/json',
		},
		body: JSON.stringify(data),
	});
	// .then((res) => res.json())
	// .then((data) => console.log(data));
});
