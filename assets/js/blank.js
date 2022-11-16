/** @format */

const colors = ['green', '', '', 'blue', 'white', ''];

const unique = Array.from(new Set(colors));
console.log(unique);

const random = (max = 1000) => {
	return Math.floor(Math.random() * max);
};
const theArray = [
	{
		title: 'The Array',
		subject: 'Microobiology',
		id: random(),
	},
	{
		title: 'More Array',
		subject: 'More Subjects',
		id: random(),
	},
];

// console.table(theArray)
//
//https://www.youtube.com/watch?v=U693xrQKFy4
//scripts https://github.com/max-programming/localstorage-tutorial/blob/master/app.js
// DOM Elements
const studentForm = document.getElementById('studentForm');
const studentsContainer = document.querySelector('.students');
const nameInput = studentForm.name;
const ageInput = studentForm.age;
const rollInput = studentForm.roll;
const students = [];
/*
{
  name: '',
  age: number,
  roll: number
}
*/

const students = JSON.parse(localStorage.getItem('students')) || [];

const addStudent = (name, age, roll) => {
	students.push({
		name,
		age,
		roll,
	});

	localStorage.setItem('students', JSON.stringify(students));

	return { name, age, roll };
};

const createStudentElement = ({ name, age, roll }) => {
	// Create elements
	const studentDiv = document.createElement('div');
	const studentName = document.createElement('h2');
	const studentAge = document.createElement('p');
	const studentRoll = document.createElement('p');

	// Fill the content
	studentName.innerText = 'Student name: ' + name;
	studentAge.innerText = 'Student age: ' + age;
	studentRoll.innerText = 'Student roll: ' + roll;

	// Add to the DOM
	studentDiv.append(studentName, studentAge, studentRoll);
	studentsContainer.appendChild(studentDiv);

	studentsContainer.style.display = students.length === 0 ? 'none' : 'flex';
};

studentsContainer.style.display = students.length === 0 ? 'none' : 'flex';

students.forEach(createStudentElement);

studentForm.onsubmit = (e) => {
	e.preventDefault();

	const newStudent = addStudent(
		nameInput.value,
		ageInput.value,
		rollInput.value
	);

	createStudentElement(newStudent);

	nameInput.value = '';
	ageInput.value = '';
	rollInput.value = '';
};
//
