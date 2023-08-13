// for...of (1)

// iterasi string (1.1)
let str = 'Hello';
for (let char of str) {
    // console.log(char);
}

// iterasi array (1.2)
let arr = [1, 2, 3, 4];
for (let num of arr) {
    // console.log(num);
}

// iterasi array dengan indeks (1.3)
let person = ['Achmad', 'Qonita', 'Nafisah'];
for (let [i, m] of person.entries()) {
    // console.log(`${m} adalah person ke-${i + 1}`);
}

// iterasi arguments fungsi (1.4)
function printArgs() {
    for (let arg of arguments) {
        // console.log(arg);
    }
}

printArgs('Hello World', 5, true);

// iterasi arguments fungsi + operator matematika (tambah) (1.5)
function addNum() {
    let result = 0;
    for (let r of arguments) {
        result += r;
    }
    return result;
}

// console.log(addNum(1, 2, 3, 4, 5));

// iterasi nodeList (1.6)
const items = document.querySelectorAll('.item');

for (let item of items) {
    // console.log(item.textContent);
}





// forEach (2)
// mengiterasi array (1)
const mixedArray = [1, 'two', true, { name: 'John' }, ['apple', 'banana'], null];

// mixedArray.forEach(e => console.log(e));



// mengiterasi array dengan indeks (2)
person = ['Achmad', 'Qonita', 'Nafisah'];

// person.forEach((e, i) => console.log(`${e} adalah person ke-${i + 1}`));

// mengiterasi nodelist(3)
const items2 = document.querySelectorAll('.item');

// items2.forEach(e => console.log(e.textContent));





// for ... in
// mengiterasi object (1)
person = {
    name: 'John',
    age: 30,
    job: 'Developer'
};

for (let key in person) {
    console.log(`${key}: ${person[key]}`);
}