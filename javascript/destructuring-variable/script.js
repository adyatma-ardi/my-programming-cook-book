// Array destructuring (1)
const numbers = [1, 2, 3];
const [a, b, c] = numbers;

// console.log(a);
// console.log(b);
// console.log(c);

// Object destructuring (2)
const person = {
    nama: 'Adyatma Ardi',
    role: 'Software Engineer'
}
const { nama, role } = person;

// console.log(nama);
// console.log(role);

// Skipping items (arr) (3)
const perkenalan = ['Halo', 'nama', 'saya', 'Adyatma Ardi'];
const [salam, , , nama2] = perkenalan;

// console.log(nama2);

// Swap items (4)
// number
let m = 1;
let n = 2;

// console.log(m);
// console.log(n);

[m, n] = [n, m];

// console.log(m);
// console.log(n);

// array
const swapArr = [1, 2, 3, 4];
// console.log(swapArr);
[swapArr[0], swapArr[1]] = [swapArr[1], swapArr[0]];
// console.log(swapArr);

// object
const swapObj = {
    a: 1,
    b: 2
};

// console.log(swapObj);
[swapObj.a, swapObj.b] = [swapObj.b, swapObj.a];
// console.log(swapObj);

// Return value pada function (5)
function coba() {
    return [1, 2];
}

const [s, t] = coba();
// console.log(s);
// console.log(t);

// Rest parameters (6)
// arr
const [restArr, ...argsArr] = [1, 2, 3, 4];
// console.log(restArr);
// console.log(argsArr);

// obj
objRest = {
    firstName: 'Achmad',
    lastName: 'Ardi',
    umur: 26
}
const { firstName, ...argsObj } = objRest;
// console.log(firstName);
// console.log(argsObj);

// Assignment tanpa deklarasi object (7)
({ nama3, age3, role3 } = {
    nama3: 'Adyatma Ardi',
    age3: 26,
    role3: 'Software Engineer'
});
// console.log(nama3);
// console.log(role3);

// Assign ke variabel baru (8)
let person2 = {
    nama4: 'Adyatma Ardi',
    umur: 26,
    role4: 'Software Engineer'
};

const { nama4, role4: r } = person2;
// console.log(nama4);
// console.log(r);

// Memberikan default value (9)
const person3 = {
    nama5: 'Adyatma Ardi',
    umur: 26,
    role5: 'Software Engineer'
};

const { nama5, email = 'email@default.com' } = person3;
// console.log(nama5);
// console.log(email);

// Memberikan nilai default + assign ke variabel baru (10)
const person4 = {
    nama6: 'Adyatma Ardi',
    role6: 'Software Engineer'
};
const { nama6, email: e = 'email2@default.com' } = person4;
// console.log(e);

// Mengambil field pada object, setelah dikirim sebagai parameter function 
const person5 = {
    id: 1,
    nama7: 'Adyatma Ardi',
    email: 'adyatmaardi@gmail.com',
};

function getIdPerson({ id }) {
    return id;
}
console.log(getIdPerson(person5));

