/** @format */
'use strict';
import { stories } from './stories.js';
import { log, titleCase } from './utils.js';
const iconSun = document.querySelector('.icon-sun');
const iconMoon = document.querySelector('.icon-moon');
const articleContainer = document.getElementById('article-container');
const lengths = document.querySelector('.length');
const titleList = document.getElementById('title-list');

function display(story) {
	return `
		<article class="article">
		<h4 class="center-align fs-4 padding-1">${titleCase(story.title)}</h4>
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

lengths.innerHTML = `You have <u>${stories.length}</u> articles`;
