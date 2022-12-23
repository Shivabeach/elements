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

const number1 = document.querySelector('.no1');
const number2 = document.querySelector('.no2');
const click = document.querySelector('.click');
const calculated = document.querySelector('.calculated');
const M_TO_KILO = 0.6213712;
const K_TO_MILES = 1.61;
const CM_TO_IN = 2.54;
const GR_TO_OZ = 0.035274;
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

const materialAmount = document.getElementById('materialAmount');
const dilutionAmount = document.getElementById('dilutionAmount');

const tnTax = document.querySelector('.tnTax');
const taxed = document.getElementById('taxed');
const fullPrice = document.getElementById('fullPrice');
const partialTotal = document.getElementById('partialTotal');

const cm = document.getElementById('cm');
const showCm = document.getElementById('showCm');
const mm = document.querySelector('.mm');

const add = document.querySelector('#add');
const subtract = document.querySelector('#subtract');
const multiply = document.querySelector('#multiply');
const divide = document.querySelector('#divide');
const response = document.querySelector('.response');
const knotResponse = document.querySelector('.knotResponse');
const knot = document.querySelector('.knot');
const KNOT_TO_MPH = 1.150779;
const LITER_TO_GAL = 0.2641729;

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
  const gram = inputgrams.value;
  document.getElementById('ounceOutput').innerHTML =
    (Math.ceil(gram) * GR_TO_OZ).toFixed(2) + ' Ounces';
  document.getElementById('lbOutput').innerHTML =
    ((Math.ceil(gram) * GR_TO_OZ) / 16).toFixed(2) + ' pounds';
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
  document.getElementById('outputFahrenheit').innerHTML = `${convert} Degrees`;
}

function mlToOz() {
  showOz.innerHTML = (ml.value * 0.03381).toFixed(2) + ' Ounces';
}

function ltToGal(lite) {
  showLit.innerHTML = (liter.value * LITER_TO_GAL).toFixed(2) + ' Gallons';
}

function cmToIn() {
  showCm.innerHTML = (cm.value / CM_TO_IN).toFixed(2) + ' Inches';
  mm.innerHTML = (cm.value * 10).toFixed(2) + ' Millimeters';
}

(function() {
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

function taxable() {
  const taxTn = tnTax.value;
  const tax = taxed.value;
  //const tennTax = 0.07;
  const taxInput = tax * taxTn; // right
  partialTotal.innerHTML = `$${taxInput}`;
  fullTax(taxInput);
}

function fullTax(taxInput) {
  const y = +taxed.value;
  const x = taxInput;
  const part = (x + y).toFixed(2);
  const parts = sanitizeInput(part);
  fullPrice.innerHTML = `$${parts}`;
}

function knotToMph(value) {
  const knotted = knot.value * KNOT_TO_MPH.toFixed(2);
  knotResponse.innerHTML = `${knotted} MPH`;
}

reset.addEventListener('click', () => {
  clear();
});

ml.addEventListener('keyup', mlToOz);
liter.addEventListener('keyup', ltToGal);

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
taxed.addEventListener('keyup', (e) => {
  taxable();
});
cm.addEventListener('keyup', () => {
  cmToIn();
});
knot.addEventListener('keyup', () => {
  knotToMph();
});
