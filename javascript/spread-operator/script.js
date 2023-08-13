// menggabungkan array (1)
let arr1 = [1, 2, 3, 4];
let arr2 = [4, 5, 6];
let combinedArr = [...arr1, ...arr2];
// console.log(combinedArr);







// menggabungkan objek (2)
let obj1 = { a: 1, b: 2 };
let obj2 = { c: 3, d: 4 };
let combinedObj = { ...obj1, ...obj2 };
// console.log(combinedObj);







// menggunakan spread operator untuk tipe data string (3)
// menggunakan spread operator pada string (3.1)
const myString = 'Hello';
// console.log(...myString);

// menyimpan elemen string pada sebuah array (3.2)
const chars = [...myString];
// console.log(chars);

// mengekstrasi string dari array (3.3)
// const person = ['Adyatma', 'Qonita', 'Nafisah'];
// console.log(...person[0]);






// menyisipkan nilai tertentu pada array dan object (4)
// menyisipkan nilai pada array (4.1)
arr1 = [1, 2, 3];
arr2 = [4, 5, 6];
combinedArr = [...arr1, 100, ...arr2];
// console.log(combinedArr);


// menyisipkan nilai pada object (4.2)
obj1 = { a: 1, b: 2 };
obj2 = { c: 3, d: 4 };
combinedObj = { ...obj1, x: 100, ...obj2 };
// console.log(combinedObj);







// menyalin array dan object (5)
// menyalin array (5.1)
let originalArr = [1, 2, 3];

// dengan referensi, perubahan pada salinan akan mempengaruhi aslinya
// let referenceArr = originalArr;
// referenceArr[0] = 0;
// console.log(originalArr);

// dengan spread operator, perubahan pada salinan tdk mempengaruhi aslinya
let copiedArr = [...originalArr];
copiedArr[0] = 0;
// console.log(originalArr);
// console.log(copiedArr);


// menyalin object (5.2)
let originalObj = {
    nama: 'John',
    age: 30
};

// dengan referensi, perubahan pada salinan akan mempengaruhi aslinya
let referenceObj = originalObj;
referenceObj.nama = 'Adyatma';
// console.log(originalObj);
// console.log(referenceObj);

// dengan spread operator, perubahan pada salinan tdk mempengaruhi aslinya
let copiedObj = { ...originalObj };
copiedObj.nama = 'Adyatma';
// console.log(originalObj);
// console.log(copiedObj);






// memanipulasi nodeList (6)
const liPerson = document.querySelectorAll('li');
console.log(liPerson);

// memanipulasi nodeList dengan perulangan for (mengubah menjadi array) (6.1)
const person = [];
for (let i = 0; i < liPerson.length; i++) {
    person.push(liPerson[i].textContent);
}
console.log(person);


// memanipulasi nodeList dengan spread operator (6.2)
const person2 = [...liPerson].map(m => m.textContent);
console.log(person2);








// studi kasus (7)
const namaStuCase = document.querySelector('.nama');
const huruf = [...namaStuCase.textContent].map(h => `<span>${h}</span>`).join('');
namaStuCase.innerHTML = huruf;






// penggunaan spread operator pada function call (8)
// tipe data array (1)
function sum(a, b, c) {
    return a + b + c;
}

const numbers = [1, 2, 3];
const result = sum(...numbers);
console.log(result);


// tipe data object (2)
function printInfo(personCoba) {
    console.log(personCoba.name, personCoba.age);
}

const personCoba = { name: 'John', age: 30 };
printInfo({ ...personCoba });
// console.log({ ...personCoba });








