/** @format */
const available = document.querySelector('.budget')
const amount = document.querySelector('.amount')
const reason = document.querySelector('.reason')
const budget = document.getElementById('budget')
const record = document.querySelector('.record')
const budgetAmount = document.getElementById('budgetAmount')
const totalLiabilities = document.getElementById('totalLiabilities')
const cashOnHand = document.getElementById('cashOnHand')
const arr = []
const ba = budgetAmount.textContent
let storage
const stores = JSON.parse(localStorage.getItem('storage'))
// display liabilities on right side, create table
// use reduce to total the amounts, display in total liabilities

function getStore () {
  storage = JSON.parse(localStorage.getItem('storage')) || []
  budgetAmount.innerText = `$${storage}`
}

function saveBudget (value) {
  const add = +stores + +value
  storage.push(add)
  localStorage.setItem('storage', JSON.stringify(storage))
  getStore()
}
// ==========================================================================
// above needs work. Put get storage under getStore
// ==========================================================================

budget.addEventListener('click', (e) => {
  e.preventDefault()
  const realBudget = document.querySelector('.budget').value
  saveBudget(realBudget)
})

// ==========================================================================
// Add costs and liabilities to storage
// ==========================================================================

function storeLibability (price, item) {
  const stores = []
  const setLiability = { amount: price, reason: item }
  stores.push(setLiability)
  localStorage.setItem('liabilities', JSON.stringify(stores))
}

function display () {
  const show = []
  const detail = localStorage.getItem('liabilities')
}

record.addEventListener('click', (e) => {
  e.preventDefault()
  const price = document.querySelector('.amount').value
  const item = document.querySelector('.reason').value
  storeLibability(price, item)
})

addEventListener('DOMContentLoaded', () => {
  getStore()
})
