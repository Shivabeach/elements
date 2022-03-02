/** @format */
import { stories } from './stories.js';
const ac = document.getElementById('article-container');
const titleList = document.getElementById('title-list');
let tit = '';
let stores = '';

stories.forEach((store) => {
	stores += `
	<article>
		<h4>${store.title}</h4>
		<div class="indent">${store.story}</div>
	</article>
	`;
	ac.innerHTML = stores;
});

stories.forEach((titles) => {
	tit += `
		<li>${titles.title}</li>
	`;
	titleList.innerHTML = tit;
});
