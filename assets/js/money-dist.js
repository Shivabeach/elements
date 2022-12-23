"use strict";const see=document.querySelector("#see"),available=document.querySelector(".budget"),amount=document.querySelector(".amount"),reason=document.querySelector(".reason"),budget=document.getElementById("budget"),record=document.querySelector(".record"),budgetAmount=document.getElementById("budgetAmount"),totalLiabilities=document.getElementById("totalLiabilities"),cashOnHand=document.getElementById("cashOnHand"),arr=[],ba=budgetAmount.textContent;let storage;const stores=JSON.parse(localStorage.getItem("storage"));function getStore(){storage=JSON.parse(localStorage.getItem("storage"))||[],budgetAmount.innerText=`$${storage}`}function saveBudget(e){const t=+stores+ +e;storage.push(t),localStorage.setItem("storage",JSON.stringify(storage)),getStore()}function storeLibability(e,t){const o=[],n={amount:e,reason:t};o.push(n),localStorage.setItem("liabilities",JSON.stringify(o))}function display(){localStorage.getItem("liabilities")}function seeStories(e){return`\n\t\t<article class="article">\n\t\t<h4 class="titles center-align fs-4 padding-1">${e.title}</h4>\n\t\t<div class="indent">${e.story}</div>\n\t\t<div class="dates">Date: <span class="show-Date">${e.date}</span></div>\n\t\t</article>\n\t`}let theTitle,theDate,theStory;budget.addEventListener("click",(e=>{e.preventDefault();saveBudget(document.querySelector(".budget").value)})),record.addEventListener("click",(e=>{e.preventDefault();storeLibability(document.querySelector(".amount").value,document.querySelector(".reason").value)})),addEventListener("DOMContentLoaded",(()=>{getStore()})),fetch("http://localhost/elements/assets/js/data.json").then((e=>e.json())).then((e=>{theTitle=e.title,theDate=e.date,theStory=e.story,console.log(e)}));
//# sourceMappingURL=money-dist.js.map