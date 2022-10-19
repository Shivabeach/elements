/** @format */
import { properCase, log, months, addToArray } from './utils.js';
const item1 = document.querySelector('.item-1');
const item2 = document.querySelector('.item-2');
const item3 = document.querySelector('.item-3');
const item4 = document.querySelector('.item-4');
let datey = document.getElementById('datey');
const copyr = document.querySelector('.copy');
// site links
const str = 'Home';
const item11 = str.link('http://elements/');
item1.innerHTML = item11;
const str2 = 'Page 2';
const item22 = str2.link('http://elements/pages/page2');
item2.innerHTML = item22;
const str3 = 'Music';
const item33 = str3.link('http://elements/pages/page3');
item3.innerHTML = item33;
const str4 = 'Page 4';
const item44 = str4.link('http://elements/pages/page4');
item4.innerHTML = item44;

for (let i = 0; i < document.links.length; i++) {
  // this highlights the current active link
  if (document.links[i].href === document.URL) {
    document.links[i].className = 'current';
  }
}

function returnDate() {
  const date = new Date();
  const day = date.getDate();
  const month = date.getMonth() + 1;
  const year = date.getFullYear();
  datey.style.color = '#4b0082';
  datey.innerHTML = `Today is ${month} / ${day} / ${year}`;
}
returnDate();

let yer = new Date();
copyr.innerHTML = `Elements \u00A92019 - ${yer.getFullYear()}`; //copywright

for (let i = 0; i < document.links.length; i++) {
  // this highlights the current active link
  if (document.links[i].href === document.URL) {
    document.links[i].className = 'current';
  }
}
addEventListener('DOMContentLoaded', () => {
  //console.time();
  const h = Math.floor(Math.random() * 360);
  let col = `hsl(${h}deg, 100%, 90%)`;
  document.body.style.backgroundColor = col;
  document.querySelector('.color').innerText = col;
  //console.timeEnd();
});
