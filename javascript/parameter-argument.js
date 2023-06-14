// parameter
// function tambah(a, b) {
//     return a + b;
// }

// argument
// console.log(tambah(1, 2));

// argument bisa dimasukkan ke suatu variabel
// function tambah(a, b) {
//     return a + b;
// }

// var a = parseInt(prompt('masukkan nilai 1')),
//     b = parseInt(prompt('masukkan nilai 1')),
//     hasil = tambah(a, b);

// console.log(hasil);

// argument bisa dilakukan operasi matematika
// function tambah(a, b) {
//     return a + b;
// }

// var a = parseInt(prompt('masukkan nilai 1')),
//     b = parseInt(prompt('masukkan nilai 1')),
//     hasil2 = tambah(a * 2, b * 2);

// console.log(hasil2);

// argument dapat berisi function
// function tambah(a, b) {
//     return a + b;
// }

// function kali(a, b) {
//     return a * b;
// }

// var a = parseInt(prompt('masukkan nilai 1')),
//     b = parseInt(prompt('masukkan nilai 1')),
//     hasil3 = kali(tambah(a, b), 3);

// console.log(hasil3);

// Jika parameter dan argument tidak sesuai
// 1. parameter lebih sedikit dari argument (diabaikan)

// function tambah(a, b) {
//     return a + b;
// }

// console.log(tambah(5, 20, 10));
// note. nilai 10 akan DIABAIKAN

// 2. parameter lebih banyak dari argument (undefined)

// function tambah(a, b, c) {
//     return a + b;
// }

// console.log(tambah(5, 20));
// note. nilai c akan UNDEFINED

// 3. arguments
// nilai yang diabaikan akan disimpan pada suatu array 'arguments'

// function tambah() {
//     return arguments;
// }

// console.log(tambah(5, 20, 10, 'hi', true));

// 4. membuat argument bersifat dinamis
function tambah() {
    var hasil = 0;

    for (var i = 0; i < arguments.length; i++) {
        hasil += arguments[i];
    }
    // console.log(arguments.length);
    return hasil;
}

var coba = tambah(1, 2, 3, 8, 9, 10);
console.log(coba);