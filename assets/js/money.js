/** @format */
const available = document.querySelector('.budget');
const amount = document.querySelector('.amount');
const reason = document.querySelector('.reason');
const budget = document.getElementById('budget');
const record = document.querySelector('.record');
const budgetAmount = document.getElementById('budgetAmount');
const totalLiabilities = document.getElementById('totalLiabilities');
const cashOnHand = document.getElementById('cashOnHand');
let arr = [];
const ba = budgetAmount.textContent;

//display liabilities on right side, create table
//use reduce to total the amounts, display in total liabilities

function getStore() {
	const store = localStorage.getItem('storage');
	budgetAmount.innerText = `$${store}`;
}

function saveBudget(value) {
	let storage;
	const stores = localStorage.getItem('storage');
	const add = +stores + +value;
	localStorage.setItem('storage', add);
	getStore();
}

budget.addEventListener('click', (e) => {
	e.preventDefault();
	const realBudget = document.querySelector('.budget').value;
	saveBudget(realBudget);
});

//
// Start adding the reasons and costs
// --------------------------------------------------------------------------

function storeLibability(price, item) {
	let stores = [];
	const setLiability = { amount: price, reason: item };
	stores.push(setLiability);
	localStorage.setItem('liabilities', JSON.stringify(stores));
}

addEventListener('DOMContentLoaded', () => {
	getStore();
});

record.addEventListener('click', (e) => {
	e.preventDefault();
	const price = document.querySelector('.amount').value;
	const item = document.querySelector('.reason').value;
	storeLibability(price, item);
});
