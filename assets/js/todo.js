/** @format */
const dateInput = document.querySelector('.todo-date');
const actionInput = document.querySelector('.todo-action');
const todo = document.querySelector('.todo');
const todoResult = document.querySelector('.todo-result');
const reset = document.querySelector('.reset');
const uidInput = document.querySelector('.uid');
const notes = [];

//let todo = JSON.parse(localstorage.getItem("ideaBarn")) || [];
function store(notes) {
	fetch('assets/js/form.json', {
		method: 'Post',
		headers: {
			'Content-Type': 'application/json',
		},
		body: JSON.stringify(notes),
	});
}

function saveIdea() {
	const uid = uidInput.value.trim();
	const todoDate = dateInput.value.trim();
	const todoAction = actionInput.value.trim();

	let notify = {
		uid: uid,
		todoDate: todoDate,
		todoAction: todoAction,
	};
	notes.push(notify);
	let see = document.querySelector('.see pre');
	see.textContent = '\n' + JSON.stringify(notes, '\t', 2);
	localStorage.setItem('ideaBarn', JSON.stringify(notes));

	store(notes);
}

//show what is typed in textarea
function showResult(val) {
	todoResult.innerText = val;
}
// submit form, add to localstorage
todo.addEventListener('submit', (e) => {
	e.preventDefault();
	saveIdea();
});
//show aht is typed
todo.addEventListener('keyup', () => {
	showResult(actionInput.value);
});
// delete form and display
reset.addEventListener('click', () => {
	todoResult.innerText = '';
});
