/** @format */
'use strict';
import {
	properCase,
	log,
	listen,
	months,
	addToArray,
	sanitizeInput,
} from './utils.js';
import * as mods from './page2Utils.mjs';

function calculate() {
	const one = mods.number1.value;
	const two = mods.number2.value;
	const done = (one / two) * 100;
	mods.calculated.innerText = done.toFixed(2) + '%';
}
function convertsMToK() {
	let converting = mods.milesToKilo.value * mods.K_TO_MILES;
	converting = converting.toFixed(2);
	mods.convertedMiles.innerHTML = `${converting} Kilometers`;
}
function convertKToM() {
	let converting = mods.kiloToMiles.value * mods.M_TO_KILO;
	converting = converting.toFixed(2);
	mods.showMiles.innerHTML = `${converting} Miles`;
}
function gramsConverter() {
	const gram = mods.inputgrams.value;
	document.getElementById('ounceOutput').innerHTML =
		(Math.ceil(gram) * mods.GR_TO_OZ).toFixed(2) + ' Ounces';
	document.getElementById('lbOutput').innerHTML =
		((Math.ceil(gram) * mods.GR_TO_OZ) / 16).toFixed(2) + ' pounds';
	document.querySelector('.kilograms').innerHTML =
		(Math.ceil(gram) / 1000).toFixed(2) + ' Kilograms';
}
function meterConverter() {
	const feets = Math.floor(inputMeters.value * 3.2808) + ' Feet';
	const miles = (inputMeters.value * 0.0006213712).toFixed(2) + ' Miles';
	document.getElementById('formOutput').innerHTML = feets;
	document.getElementById('miles2').innerText = miles;
}
function temperatureConverter() {
	let convert = inputCelsius.value * 1.8 + 32;
	convert = convert.toFixed(2);
	document.getElementById('outputFahrenheit').innerHTML = `${convert} °Degrees`;
}

function mlToOz() {
	const ounces = (ml.value * 0.03381).toFixed(2);
	mods.showOz.innerHTML = ounces + ' Ounces';
	const pint = (ounces * 0.0625).toFixed(2);
	console.log(pint);
	mods.pints.innerHTML = pint + ' Pints';
}

function ltToGal(lite) {
	mods.showLit.innerHTML =
		(liter.value * mods.LITER_TO_GAL).toFixed(2) + ' Gallons';
}

function cmToIn() {
	mods.showCm.innerHTML = (cm.value / mods.CM_TO_IN).toFixed(2) + ' Inches';
	mods.mm.innerHTML = (cm.value * 10).toFixed(2) + ' Millimeters';
}

(function () {
	'use strict';
	const cripes = document.querySelector('#cripes');
	if (cripes != null) {
		cripes.addEventListener('click', (event) => {
			const ratio = document.getElementById('ratio').value;
			const ounces = document.getElementById('ounces').value;
			if (ratio === '' || ratio <= 0 || ounces === '' || ounces <= 0) {
				event.preventDefault();
				alert('Lets imput some numbers');
				return false;
			} else {
				event.preventDefault();
				const dilute = ounces / ratio;
				const amount = ounces - dilute;
				mods.materialAmount.innerText = dilute.toFixed(2) + ' Ounces';
				mods.dilutionAmount.innerText = amount.toFixed(2) + ' Ounces';
			}
		});
	}
})();

function clear() {
	mods.materialAmount.textContent = '';
	mods.dilutionAmount.textContent = '';
}

function taxable() {
	const taxTn = mods.tnTax.value;
	const tax = mods.taxed.value;
	//const tennTax = 0.07;
	const taxInput = parseFloat((tax * taxTn).toFixed(2)); // right
	mods.partialTotal.innerHTML = `$${taxInput}`;
	fullTax(taxInput);
}

function fullTax(taxInput) {
	const y = +taxed.value;
	const x = taxInput;
	const part = parseFloat((x + y).toFixed(2));
	const parts = sanitizeInput(part);
	mods.fullPrice.innerHTML = `$${parts}`;
}

function knotToMph(value) {
	const knotted = mods.knot.value * mods.KNOT_TO_MPH.toFixed(2);
	mods.knotResponse.innerHTML = `${knotted} MPH`;
}

function addition() {
	let added = parseFloat(mods.a1.value);
	let added2 = parseFloat(mods.a2.value);
	let sum = added + added2;
	mods.add.innerHTML = sum || 0;
}

function subtraction() {
	let subbed = parseFloat(mods.a3.value);
	let subbed2 = parseFloat(mods.a4.value);
	let sum = subbed - subbed2;
	mods.subtract.innerHTML = sum || 0;
}

function multiplied() {
	let added = parseFloat(mods.a5.value);
	let added2 = parseFloat(mods.a6.value);
	let sum = added * added2.toFixed(2);
	mods.multiply.innerHTML = sum || 0;
}

function divided() {
	const added = parseFloat(mods.a7.value);
	const added2 = parseFloat(mods.a8.value);
	let sum = added / added2.toFixed(2);
	mods.divide.innerHTML = sum || 0;
}

mods.reset.addEventListener('click', () => {
	clear();
});

//ml.addEventListener('keyup', mlToOz);
listen(ml, 'keyup', mlToOz);
//liter.addEventListener('keyup', ltToGal);
listen(liter, 'keyup', ltToGal);

inputCelsius.addEventListener('keyup', temperatureConverter);

inputgrams.addEventListener('keyup', gramsConverter);

inputMeters.addEventListener('keyup', meterConverter);

milesToKilo.addEventListener('keyup', convertsMToK);
kiloToMiles.addEventListener('keyup', convertKToM);
mods.click.addEventListener('click', (e) => {
	e.preventDefault();
	calculate();
});
taxed.addEventListener('keyup', taxable);
cm.addEventListener('keyup', cmToIn);
mods.knot.addEventListener('keyup', knotToMph);

mods.a2.addEventListener('keyup', addition);
mods.a4.addEventListener('keyup', subtraction);
mods.a6.addEventListener('keyup', multiplied);
mods.a8.addEventListener('keyup', divided);
