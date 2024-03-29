/** @format */
import { stories } from './stories.js';
const iconSun = document.querySelector('.icon-sun');
const iconMoon = document.querySelector('.icon-moon');
const ac = document.getElementById('article-container');
const titleList = document.getElementById('title-list');
let tit, stores;

stories.forEach((store) => {
	stores += `
	<article class="article">
		<h4>${store.title}</h4>
		<div class="indent">${store.story}</div>
		<div class="dates">${store.date}</div>
	</article>
	`;
	ac.innerHTML = stores;
});

stories.forEach((titles) => {
	tit += `
		<li>${titles.title} - ${titles.date}</li>
	`;
	titleList.innerHTML = tit;
});

//EXAMPLE of json import: import stores from 'json/data.json' assert {type: 'json'};

// Get first letter
// const cars = ['BMW', 'Honda', 'Ford', 'GM'];
// const first = cars.map((car) => car[0]);
// console.log(first);
