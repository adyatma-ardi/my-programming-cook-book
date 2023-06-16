// membuat array
const fruits = ['apple', 'banana', 'orange'];
const numbers = [1, 2, 3, 4, 5];

var myFunc = function () {
    console.log('ok');
};

const mixedArray = ['teks', 1, false, myFunc];

// mengakses nilai pada array
console.log(fruits[1]);
console.log(fruits[2]);

// mengubah nilai pada array
fruits[1] = 'pineapple';
console.log(fruits);

// menghitung panjang array 
console.log(fruits.length);

// iterasi array
// looping
for (var i = 0; i < fruits.length; i++) {
    console.log(fruits[i]);
}

// forEach
fruits.forEach(function (i) {
    console.log(i);
});