/** @format */
const todoDate = document.querySelector('.todo-date');
const todoAction = document.querySelector('.todo-action');
const todo = document.querySelector('.todo');
const todoResult = document.querySelector('.todo-result');
const reset = document.querySelector('.reset');
const notes = [];

function showResult(val) {
	todoResult.innerText = val;
}

todo.addEventListener('keyup', () => {
	showResult(todoAction.value);
});

reset.addEventListener('click', () => {
	todoResult.innerText = '';
});
