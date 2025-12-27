/** @format */
'use strict';
import { reason } from './reasons.js';
const see = document.querySelector('#see');
const available = document.querySelector('.budget');
const budget = document.getElementById('budget');
const record = document.querySelector('.record');
const budgetAmount = document.getElementById('budgetAmount');
const color = document.querySelector('.color');
const outFlow = document.querySelector('.out-flow');
const cashOnHand = document.getElementById('cashOnHand');
const dateOut = document.querySelector('.date-out');
const costly = document.querySelector('.cost');
const reasonOut = document.querySelector('.reason-out');
const calculate = document.querySelector('.calculate');
const totalLiabilities = document.querySelector('#totalLiabilities');
const arr = [];
const ba = budgetAmount.textContent;
let storage;
const stores = JSON.parse(localStorage.getItem('storage'));
//TODO make this function get the budget number from local storage and display it on the page
function getStore() {
	storage = JSON.parse(localStorage.getItem('storage')) || [];
	budgetAmount.textContent = `${storage}`;
}
//TODO make this function so it adds numbers entered to the storage number. The + makes a string a number
function saveBudget(value) {
	const add = value;
	storage.push(add);
	localStorage.setItem('storage', JSON.stringify(storage));
	getStore();
}
//TODO make this function so when the budget button is clicked it saves the number entered to local storage
budget.addEventListener('click', (e) => {
	e.preventDefault();
	const realBudget = document.querySelector('.budget').value;
	saveBudget(realBudget);
});
//fill in cost reasons from object file reasons.js
function output(out) {
	return `
		<tr>
			<td class="reason-out dis" >${out.reason}</td>
			<td class="cost dis">${out.cost}</td>
			<td class="dis date-out" >${out.date}</td>
		</tr>
	`;
}
//TODO make this function calculate the total liabilities from the cost column
function sum() {
	const cost = document.querySelectorAll('.cost');
	const sumOfValues = [];
	cost.forEach((costed) => {
		const costes = costed.firstChild.nodeValue;
		sumOfValues.push(costes);
	});
	const toNum = sumOfValues.map(Number);
	const totals = toNum.reduce((acc, cum) => acc + cum, 0).toFixed(2);
	totalLiabilities.innerHTML = totals;
}
//TODO make this function calculate the total amount left after liabilities are subtracted from budget
function totalAmountLeft() {
	const totalLiabilitie = parseFloat(totalLiabilities.firstChild.nodeValue);
	const budget = budgetAmount.textContent;
	console.log(budget);
	const allOfIt = (+budget - +totalLiabilitie).toFixed(2);
	cashOnHand.innerText = `$${allOfIt}`;
}
//TODO make this function show the current date and time
const today = new Date();
const f = new Intl.DateTimeFormat('en-us', {
	dateStyle: 'full',
	timeStyle: 'full',
});
color.innerHTML = f.format(today);

//TODO make this function fill in the table with the reasons and costs from the reasons.js file
outFlow.innerHTML = `
	${reason.map(output).join('')}`;

addEventListener('DOMContentLoaded', () => {
	getStore();
	sum();
	totalAmountLeft();
});
