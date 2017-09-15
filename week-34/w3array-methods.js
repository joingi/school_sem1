// Array exercise from W3School

var cars = ["Saab", "Volvo", "BMW", "Benz"];
var bikes = ["Honda", "Harley", "Ducati"];
var trucks = ["Iveco", "Man", "Scania"]

// concat()	Joins two or more arrays, and returns a copy of the joined arrays
/*
var automobile = cars.concat(bikes, trucks);
console.log(automobile);
 */

// copyWithin()	Copies array elements within the array, to and from specified positions
/*
Copy the first two array elements to the last two array elements:
cars.copyWithin("target", "start", "end");
cars.copyWithin(0, 3, cars.length);
console.log(cars);
*/

// every()	Checks if every element in an array pass a test
/* var ages = [32, 33, 16, 40]; // 16

function checkAdult(age) {
   return age >= 18;
}
console.log(ages.every(checkAdult)); */
// Returns false because 16 is less then 18

/* var survey = [
    { name: "Steve",   answer: "Yes"},
    { name: "Jessica", answer: "Yes"},
    { name: "Peter",   answer: "Yes"},
    { name: "Elaine",  answer: "No"}
];

function isSameAnswer(el, index, arr) {
        // Do not test the first array element, as you have nothing to compare to
        if (index === 1){
            return true;
        }
        else {
        //do each array element value match the value of the previous array element
            return (el.answer === arr[index - 1].answer);
        }
}
console.log(survey.every(isSameAnswer));
*/

// fill() array.fill(value, start, end) Fill the elements in an array with a static value
/* var fillCars = cars.fill("Pony", 0, 2);
console.log(fillCars); */
// [ 'Pony', 'Pony', 'BMW', 'Benz' ]

// filter()	Creates a new array with every element in an array that pass a test
// Return an array of all the values in the ages array that are 18 or over:
// var ages = [32, 33, 16, 40];

// function checkAdult(age) {
//     return age >= 18;
// }

// function myFunc() {
//     console.log(ages.filter(checkAdult));
// }
// myFunc();

// find()	Returns the value of the first element in an array that pass a test
/* var ages = [3, 10, 18, 20];

function checkAdult(age) {
    return age >= 18;
}

function myFunc() {
    console.log(ages.find(checkAdult));
}
myFunc(); */
// Return 18

/* JavaScript Array findIndex() Method */
// findIndex()	Returns the index of the first element in an array that pass a test
// var ages = [3, 10, 18, 20];

// function checkAdult(age) {
//     return age >= 8;
// }

// function myFunc() {
//     console.log(ages.findIndex(checkAdult));
// }
// myFunc();
// Returns 18 because its index position is 2
// Will return -1 if statement is false

/*
JavaScript Array isArray() Method -- BOOLEAN True or False
join()	Joins all elements of an array into a string
*/
// console.log(Array.isArray(cars));
// Returns true

/*
JavaScript Array join() Method
join() Joins all elements of an array into a string
 */
// var joinCars = cars.join(' And ');
// console.log(joinCars);

/*
JavaScript Array lastIndexOf() Method
lastIndexOf()	Search the array for an element, starting at the end, and returns its position
 */
// console.log(cars.lastIndexOf('BMW'));
// Returns 2

/*
JavaScript Array map() Method
map()	Creates a new array with the result of calling a function for each array element
 */

// var numbers = [65, 44, 12, 4];

// function multipleWithMap(num) {
//     return num * 10;
// }

// function myFunc() {
//     return numbers.map(multipleWithMap);
// }
// console.log(myFunc());

// Sample 2
/* var persons = [
    {firstname : "Malcom", lastname: "Reynolds"},
    {firstname : "Kaylee", lastname: "Frye"},
    {firstname : "Jayne", lastname: "Cobb"}
];
function getFullName(item, index) {
    var fullName = [item.firstname, item.lastname].join(' ');
    return fullName;
}

function myFunc() {
    console.log(persons.map(getFullName));
}
myFunc();
*/

var fruits = ["Banana", "Orange", "Apple", "Mango"];
// fruits.splice(2, 0, "Lemon", "Kiwi");
fruits.splice(2);
console.log(fruits);