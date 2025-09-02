/** @format */
'use strict';
import { properCase, log, months, addToArray } from './utils.js';
const item1 = document.querySelector('.item-1');
const item2 = document.querySelector('.item-2');
const item3 = document.querySelector('.item-3');
const item4 = document.querySelector('.item-4');
const item5 = document.querySelector('.item-5');
const item6 = document.querySelector('.item-6');
const datey = document.getElementById('datey');
const copyr = document.querySelector('.copy');
// site links
const str = 'Home';
const item11 = str.link('http://elements/');
item1.innerHTML = item11;
const str2 = 'Conversions';
const item22 = str2.link('http://elements/pages/page2');
item2.innerHTML = item22;
const str3 = 'Music';
const item33 = str3.link('http://elements/pages/page3');
item3.innerHTML = item33;
const str4 = 'Budget';
const item44 = str4.link('http://elements/pages/page4');
item4.innerHTML = item44;
const str5 = 'CSS';
const item55 = str5.link('http://elements/pages/css');
item5.innerHTML = item55;
const str6 = 'JavaScript';
const item66 = str6.link('http://elements/pages/javascript');
item6.innerHTML = item66;

for (let i = 0; i < document.links.length; i++) {
	// this highlights the current active link
	if (document.links[i].href === document.URL) {
		document.links[i].className = 'current';
	}
}

// function returnDate() {
//   const date = new Date();
//   const day = date.getDate();
//   const month = date.getMonth() + 1;
//   const year = date.getFullYear();
//   datey.style.color = '#4b0082';
//   datey.innerHTML = `Today is ${month} / ${day} / ${year}`;
// }
// returnDate();

const today = new Date();
const f = new Intl.DateTimeFormat('en-us', {
	dateStyle: 'full',
	//timeStyle: 'full',
});
// datey.style.color = '#4b0082';
datey.innerHTML = f.format(today);

const yer = new Date();
copyr.innerHTML = `Elements \u00A92019 - ${yer.getFullYear()}`; // copywright

//
// Envato https://www.youtube.com/watch?v=Xk12JtYG8rw&t=2035s
//--------------------------------------------------------------------------
let indicator = document.querySelector('.indicator');
const switchTheme = () => {
	//body tag
	const rootElem = document.documentElement;
	// data- of the body tag
	let dataTheme = rootElem.getAttribute('data-theme'),
		newTheme;
	// if the data- is light, change to dark
	newTheme = dataTheme === 'light' ? 'dark' : 'light';
	//change the data- to one color or the other
	rootElem.setAttribute('data-theme', newTheme);
	// set the body tag attr in localstorage
	localStorage.setItem('theme', newTheme);
};

if (document.querySelector('#toggle')) {
	document.querySelector('#toggle').addEventListener('click', switchTheme);
}
// const todos = async () => {
//   const response = await fetch('http://localhost/elements/assets/js/data.json');
//   const data = await response.json();
//   return data;
// };
// todos().then((data) => console.log(('resolved', data)));

//do what will be done here. Display it, use foreach ect

// for (let i = 0; i < document.links.length; i++) {
//   // this highlights the current active link
//   if (document.links[i].href === document.URL) {
//     document.links[i].className = 'current';
//   }
// }
// addEventListener('DOMContentLoaded', () => {
//   // console.time();
//   const h = Math.floor(Math.random() * 360)
//   const col = `hsl(${h}deg, 100%, 90%)`
//   document.body.style.backgroundColor = col
//   document.querySelector('.color').innerText = col
//   // console.timeEnd();
// })
