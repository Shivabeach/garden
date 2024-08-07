/** @format */

const form = document.querySelector('.todo');

// let formData = new FormData(form);
// let data = Object.fromEntries(formData);

const clickhandler = async () => {
	try {
		let formData = new FormData(form);
		let data = Object.fromEntries(formData);
		const res = await fetch('assets/js/form.json', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
			},
			body: data,
		});
		const dataForm = await res.json();

		if (!res.ok) {
			console.log(dataForm.description);
			return;
		}

		console.log(dataForm);
	} catch (error) {
		console.log(error);
	}
};
form.addEventListener('submit', (e) => {
	e.preventDefault();
	clickhandler();
});
