!function(){"use strict";var e=[,function(e,t,n){n.r(t),n.d(t,{addClass:function(){return s},addToArray:function(){return u},addUp:function(){return o},createElement:function(){return a},listen:function(){return l},log:function(){return c},months:function(){return m},months2:function(){return f},properCase:function(){return r},returnDate:function(){return p},sanitizeInput:function(){return d},select:function(){return i},titleCase:function(){return g}});const r=e=>`${e[0].toUpperCase()}${e.slice(1).toLowerCase()}`,o=e=>{e.reduce(((e,t)=>t+e),0)},u=(e,t)=>(e.push(t),e),c=e=>{console.log(e)},i=(e,t)=>(t||document).querySelector(e),l=function(e,t,n){let r=arguments.length>3&&void 0!==arguments[3]&&arguments[3];e.addEventListener(t,n,!!r)},a=(e,t)=>{const n=document.createElement(e);return t&&n.classList.add(t),n},s=(e,t,n)=>{(n||document).querySelector(e).classList.add(t)},d=e=>{const t=document.createElement("div");return t.textContent=e,t.innerHTML},m=["January","February","March","April","May","June","July","August","September","October","November","December"],p=e=>{let t=new Date;return`${t.getDate()}/${t.getMonth()+1}/${t.getFullYear()}`},f={"01":"Jan","02":"Feb","03":"Mar","04":"Apr","05":"May","06":"Jun","07":"Jul","08":"Aug","09":"Sep",10:"Oct",11:"Nov",12:"Dec"};function g(e){for(var t=e.toLowerCase().split(" "),n=0;n<t.length;n++)t[n]=t[n].charAt(0).toUpperCase()+t[n].substring(1);return t.join(" ")}}],t={};function n(r){var o=t[r];if(void 0!==o)return o.exports;var u=t[r]={exports:{}};return e[r](u,u.exports,n),u.exports}n.d=function(e,t){for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var r={};!function(){n.r(r);n(1);const e=document.querySelector(".item-1"),t=document.querySelector(".item-2"),o=document.querySelector(".item-3"),u=document.querySelector(".item-4"),c=document.getElementById("datey"),i=document.querySelector(".copy"),l="Home".link("http://elements/");e.innerHTML=l;const a="Conversions".link("http://elements/pages/page2");t.innerHTML=a;const s="Music".link("http://elements/pages/page3");o.innerHTML=s;const d="Budget".link("http://elements/pages/page4");u.innerHTML=d;for(let e=0;e<document.links.length;e++)document.links[e].href===document.URL&&(document.links[e].className="current");!function(){const e=new Date,t=e.getDate(),n=e.getMonth()+1,r=e.getFullYear();c.style.color="#4b0082",c.innerHTML=`Today is ${n} / ${t} / ${r}`}();const m=new Date;i.innerHTML=`Elements ©2019 - ${m.getFullYear()}`;const p=()=>{const e=document.documentElement;let t;t="light"===e.getAttribute("data-theme")?"dark":"light",e.setAttribute("data-theme",t),localStorage.setItem("theme",t)};document.querySelector("#theme-switcher")&&document.querySelector("#theme-switcher").addEventListener("click",p)}()}();
//# sourceMappingURL=script-dist.js.map