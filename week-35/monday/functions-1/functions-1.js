// Pass values to multiple functions

// Create 4 functions - make sure the name is an action
// When you run it this is the sequence:
// function 2 calls function 4
// function 4 calls function 1
// function 1 calls function 3
/*

var iCounter = 0;
function showOne() {
    console.log(1);
    showThree();
}

function showTwo() {
    console.log(2);
    if (iCounter != 1) {
        iCounter++;
        showFour();
    }
}

function showThree() {
    console.log(3);
    showTwo();
 }

function showFour() {
    console.log(4);
    showOne();
}
showTwo();
 */
// 2
// 4
// 1
// 3
// 2

/*
function getProducts(){
    return [1,"Car"];
}
var aProducts = getProducts();
console.log( aProducts );
 */

/*
CREATE 3 FUNCTIONS
THE FIRST FUNCTION (functionOne) SHOWS A NUMBER THAT YOU PASS TO IT
functionOne calls functionTwo and it passes the number it received * 10
to function two
functionTwo call functionThree passing the number to it (functionThree)
functionThree shows the final number in the screen
NOTE: functionTwo does NOT display anything in the console
NOTE: You must pass values between functions
*/
/*
function playOne(iNumber, b) {
    // console.log(iNumber);
    iNumber = iNumber * 10;
    b = b * 10;

    playTwo(iNumber,b);
}
function playTwo(iNumber, b) {

    playThree(iNumber, b);
}
function playThree(iNumber, b) {
    console.log(iNumber, b);

}
playOne(10, 10);
 */

/*
    -Create a function that takes two arguments
    -the 1st arg is a number
    -the 2nd arg is a product name
    -the function RETURNS an array containing the number and the product name
    - show the array in the console
NOTE: The function does NOT show the array in the console
*/


// Pass function with array to another function
/*
function getProducts(iNumber, sProductName) {
    return [iNumber, sProductName]
}
var aProductName = getProducts(2, 'Bike');
console.log(aProductName);
 */
/*
-create a function that takes two arguments
-both arguments are numbers
-the function takes each number and multiplies it by 10
-the function calls another function passing those numbers
to the other function, but the numbers are passed in an array
-this last function shows in the console the second number which is in the array

*/
/*
function makeNumbers(iNum1, iNum2) {

    iNum1 = iNum1 * 10;
    iNum2 = iNum2 * 10;

    getNumbers(iNum1, iNum2);
    // console.log(iNum1);
}

function getNumbers(iNum1, iNum2) {
    // WRONG
    // console.log([iNum1, iNum2]);

    var aNumbers = [iNum1, iNum2];
    console.log(aNumbers[1]);

}

makeNumbers(3,3);
*/
// Solution
/*
function doSomething(iNumberOne, iNumberTwo){
    var aNumbers = [iNumberOne,iNumberTwo];
    showData( aNumbers );
}
function showData( aData ){
// aData = [5, 10]
console.log( aData[1] );
}
 */



