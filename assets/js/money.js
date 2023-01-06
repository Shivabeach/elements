/** @format */
'use strict';
import { reasons } from './reasons.js';
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
// display liabilities on right side, create table
// use reduce to total the amounts, display in total liabilities

const today = new Date();
const f = new Intl.DateTimeFormat('en-us', {
	dateStyle: 'full',
	timeStyle: 'full',
});
color.innerHTML = f.format(today);

function getStore() {
	storage = JSON.parse(localStorage.getItem('storage')) || [];
	budgetAmount.innerText = `${storage}`;
}

//TODO make this function so it adds numbers entered to the storage number
function saveBudget(value) {
	const add = +stores + +value;
	storage.push(add);
	localStorage.setItem('storage', JSON.stringify(storage));
	getStore();
}

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

function sum() {
	const cost = document.querySelectorAll('.cost');
	const sumOfValues = [];
	cost.forEach((costed) => {
		const costes = costed.firstChild.nodeValue;
		sumOfValues.push(costes);
	});
	const toNum = sumOfValues.map(Number);
	const totals = toNum.reduce((acc, cum) => acc + cum, 0);
	totalLiabilities.innerHTML = totals;
}

function totalAmountLeft() {
	const totalLiabilitie = parseFloat(totalLiabilities.firstChild.nodeValue);
	const budget = budgetAmount.firstChild.nodeValue;
	const allOfIt = budget - totalLiabilitie;
	cashOnHand.innerText = `${allOfIt}`;
}

outFlow.innerHTML = `
	${reasons.map(output).join('')}`;

addEventListener('DOMContentLoaded', () => {
	getStore();
	sum();
	totalAmountLeft();
});
