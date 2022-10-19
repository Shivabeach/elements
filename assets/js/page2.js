/** @format */
// import {
// 	properCase,
// 	log,
// 	listen,
// 	months,
// 	addToArray,
// 	sanitizeInput,
// } from './utils.js';
const number1 = document.querySelector('.no1');
const number2 = document.querySelector('.no2');
const click = document.querySelector('.click');
const calculated = document.querySelector('.calculated');
const M_TO_KILO = 0.6213712;
const K_TO_MILES = 1.61;
const milesToKilo = document.getElementById('milesToKilo');
const kiloToMiles = document.getElementById('kiloToMiles');
const inputCelsius = document.getElementById('inputCelsius');
const inputgrams = document.getElementById('inputgrams');
const inputMeters = document.getElementById('inputMeters');

const showLit = document.getElementById('showLit');
const liter = document.getElementById('liter');
const showOz = document.querySelector('.showOz');
const ml = document.getElementById('ml');
const reset = document.getElementById('reset1');

let materialAmount = document.getElementById('materialAmount');
let dilutionAmount = document.getElementById('dilutionAmount');

function calculate() {
	const one = number1.value;
	const two = number2.value;
	const done = (one / two) * 100;
	calculated.innerText = done.toFixed(2) + '%';
}
function convertsMToK() {
	let converting = milesToKilo.value * K_TO_MILES;
	converting = converting.toFixed(2);
	convertedMiles.innerHTML = `${converting} Kilometers`;
}
function convertKToM() {
	let converting = kiloToMiles.value * M_TO_KILO;
	converting = converting.toFixed(2);
	showMiles.innerHTML = `${converting} Miles`;
}
function gramsConverter() {
	let gram = inputgrams.value * 0.035274;
	document.getElementById('ounceOutput').innerHTML =
		Math.ceil(gram) + ' Ounces';
	document.getElementById('lbOutput').innerHTML =
		Math.ceil(gram) / 16 + ' pounds';
}
function meterConverter() {
	let feets = Math.floor(inputMeters.value * 3.2808) + ' Feet';
	let miles = (inputMeters.value * 0.0006213712).toFixed(2) + ' Miles';
	document.getElementById('formOutput').innerHTML = feets;
	document.getElementById('miles2').innerText = miles;
}
function temperatureConverter() {
	let convert = inputCelsius.value * 1.8 + 32;
	convert = convert.toFixed(2);
	document.getElementById('outputFahrenheit').innerHTML = `${convert} Degrees`;
}

function mlToOz() {
	showOz.innerHTML = (ml.value * 0.03381).toFixed(2) + ' Ounces';
}

function lToOz(lite) {
	showLit.innerHTML = (liter.value * 33.814).toFixed(2) + ' Ounces';
}

(function() {
	'use strict';
	let cripes = document.querySelector('#cripes');
	if (cripes != null) {
		cripes.addEventListener('click', (event) => {
			let ratio = document.getElementById('ratio').value;
			let ounces = document.getElementById('ounces').value;
			if (ratio === '' || ratio <= 0 || ounces === '' || ounces <= 0) {
				event.preventDefault();
				alert('Lets imput some numbers');
				return false;
			} else {
				event.preventDefault();
				let dilute = ounces / ratio;
				let amount = ounces - dilute;
				materialAmount.innerText = Math.round(dilute) + ' Ounces';
				dilutionAmount.innerText = Math.round(amount) + ' Ounces';
			}
		});
	}
})();

function clear() {
	materialAmount.textContent = '';
	dilutionAmount.textContent = '';
}

reset.addEventListener('click', () => {
	clear();
});

ml.addEventListener('keyup', mlToOz);
liter.addEventListener('keyup', lToOz);

inputCelsius.addEventListener('keyup', () => {
	temperatureConverter();
});

inputgrams.addEventListener('keyup', () => {
	gramsConverter();
});

inputMeters.addEventListener('keyup', () => {
	meterConverter();
});

milesToKilo.addEventListener('keyup', (e) => {
	convertsMToK();
});
kiloToMiles.addEventListener('keyup', (e) => {
	convertKToM();
});
click.addEventListener('click', (e) => {
	e.preventDefault();
	calculate();
});
