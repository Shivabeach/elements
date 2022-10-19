/** @format */
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

//console.table(theArray);
