// strict mode
// "use strict";

// global scope
var nama = "Achmad Ardi";

function tampilkanNama() {
    console.log(nama);
}

tampilkanNama(); // output : Achmad Ardi;

// local scope
function tampilkanUmur() {
    var umur = 25;
    console.log(umur);
}

// console.log(umur); // ERROR : variable umur dideklarasikan pada function tampilkanUmur sehingga tdk bisa diakses
tampilkanUmur(); // output : 25;

// nested scope
function fungsiLuar() {
    var angka = 10;

    function fungsiDalam() {
        console.log(angka); // output : 10;
    }

    fungsiDalam();
}

fungsiLuar();

// strict mode

// var a; // akan dibuat otomatis krn tidak dideklarasikan pd function (strict mode off), jika strict mode diaktifkan akan menghasilkan ERROR krn var a tdk secara otomatis dibuat pada global scope
function test() {
    a = 2;
}

test();
console.log(a);