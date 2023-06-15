// hoisting
console.log(x); // output : undefined
var x = 5;

hoisted(); // output : Hello World!
function hoisted() {
    console.log('Hello World!');
};

// function declaration
function multiply(a, b) {
    return a * b;
};

console.log(multiply(5, 3));

// function expression
const multiply2 = function (a, b, c) {
    return a * b * c;
};

console.log(multiply2(5, 4, 5));
