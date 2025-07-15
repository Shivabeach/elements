/** @format */
'use strict';
import { stories } from './stories.js';
import { log, titleCase, select } from './utils.js';
const iconSun = document.querySelector('.icon-sun');
const iconMoon = document.querySelector('.icon-moon');
const articleContainer = select('#article-container');
const lengths = select('.length');
const titleList = select('#title-list');

function display(story) {
	return `
		<article class="article">
		<h4 class="titles center-align fs-4 padding-1">${titleCase(story.title)}</h4>
		<div class="indent">${story.story}</div>
		<div class="dates">Date: <span class="show-Date">${story.date}</span></div>
		<div>
		</article>
	`;
}

function titlesList(titles) {
	return `
		<ul id="title-list">
		<li>${titleCase(titles.title)}</li>
		</ul>
	`;
}

function titleNumber(quanity) {
	return `${quanity.title.length}`;
}

articleContainer.innerHTML = `
	${stories.map(display).join('')}`;

titleList.innerHTML = `
	${stories.map(titlesList).join('')}`;

lengths.innerHTML = `You have <u class="fs-5">${stories.length}</u> articles`;

//https://teamtreehouse.com/library/javascript-search/javascript-search
const article = document.querySelectorAll('.article');
const titleSearch = select('#titleSearch');
titleSearch.addEventListener('keyup', (e) => {
	let currentValue = e.target.value.toLowerCase();
	let titles = document.querySelectorAll('h4.titles');
	titles.forEach((title) => {
		if (title.textContent.toLowerCase().includes(currentValue)) {
			title.parentNode.style.display = 'block';
		} else {
			title.parentNode.style.display = 'none';
		}
	});
});

const body = document.querySelector('body');
const toggle = document.getElementById('toggle');
if (toggle) {
	toggle.addEventListener('click', () => {
		toggle.classList.toggle('active');
		body.classList.toggle('active');
	});
}
