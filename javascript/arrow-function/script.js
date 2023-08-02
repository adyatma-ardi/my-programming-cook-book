// let tampilPesan = function (nama) {
//     return `Hallo ${nama}`;
// };
// console.log(tampilPesan('Achmad'));

// let tampilPesan = (nama) => {
//     return `Hallo ${nama}`;
// }
// console.log(tampilPesan('Achmad'));

// let tampilPesan = (nama) => `Hallo ${nama}`;
// console.log(tampilPesan('Achmad'));



// Fungsi dengan lebih dari satu baris pernyataan
// const tambahAngka = (a, b) => {
//     const hasil = a + b; // Baris 1: Penjumlahan dua angka
//     const pesan = `Hasil penjumlahan ${a} dan ${b} adalah ${hasil}.`; // Baris 2: Membuat pesan dengan template literal
//     return pesan; // Baris 3: Mengembalikan pesan
// };

// // Memanggil fungsi dengan memberikan argumen 5 dan 7
// console.log(tambahAngka(5, 7));
// // Output: Hasil penjumlahan 5 dan 7 adalah 12.

// const tambahAngka = (a, b) => `Hasil penjumlahan ${a} dan ${b} adalah ${a + b}`;
// console.log(tambahAngka(5, 8));







// // membuat function secara standar (function expression)
// let tampilHalo = function (nama) {
//     return `Halo bro ${nama}`;
// }

// // membuat arrow function dengan 1 argumen
// let tampilHalo2 = (nama) => {
//     return `Halo bro ${nama}`;
// }

// // menyederhanakan arrow function dengan 1 argumen
// let tampilHalo3 = (nama) => `Halo bro ${nama}`;

// // membuat arrow function dengan 2 argumen
// const addNumber = (a, b) => {
//     const hasil = a + b;
//     const pesan = `${a} + ${b} hasilnya adalah ${a + b}`;
//     return pesan;
// };

// // menyederhanakan arrow function dengan 2 argumen
// const addNumber2 = (a, b) => `${a} ${b} hasilnya adalah ${a + b}`;



// const addNum = (...args) => {
//     let result = 0;
//     let str = '';
//     for (let i = 0; i < args.length; i++) {
//         result += args[i];
//         str += `${args[i]}`;
//         if (i < args.length - 1) {
//             str += ` + `;
//         }
//     };
//     return `Hasil dari ${str} adalah ${result}`;
// };





// const multiplyNum = (...args) => {
//     let result = 1;
//     let str = '';
//     for (let i = 0; i < args.length; i++) {
//         result *= args[i];
//         str += `${args[i]}`;
//         if (i < args.length - 1) {
//             str += ' x ';
//         }
//     }
//     return `Hasil dari ${str} adalah ${result}`;
// }



// let mahasiswa = ['Achmad Adyatma Ardi', 'Qonita Dwi Wulandari', 'Nafisah Khumairah'];

// let jmlHuruf = mahasiswa.map(function (nama) {
//     return nama.length;
// });
// // console.log(jmlHuruf);


// let jmlHuruf2 = mahasiswa.map(nama => nama.length);
// // console.log(jmlHuruf2);

// let jmlHuruf3 = mahasiswa.map(nama => ({ nama, panjangStr: nama.length }));
// console.log(jmlHuruf3);
// console.table(jmlHuruf3);

// let jmlHuruf4 = mahasiswa.map((nama) => nama.length);
// // console.log(jmlHuruf2);



// // Konsep this pada arrow function
// // 1) Arrow function tidak dapat menggantikan function expression untuk membuat object dengan constructor
// const Mahasiswa = function (nama, umur) {
//     this.nama = nama;
//     this.umur = umur;
//     this.sayHello = function () {
//         return `Saya ${nama} dan saya berumur ${umur} tahun.`;
//     }
// }
// const mhs1 = new Mahasiswa('Achmad', 26);

// // arrow function menggantikan function expression akan menghasilkan error
// const Mahasiswa2 = (nama, umur) => {
//     this.nama = nama;
//     this.umur = umur;
//     this.sayHello = function () {
//         return `Saya ${nama} dan saya berumur ${umur} tahun.`;
//     }
// }
// // const mhs2 = new Mahasiswa2('Qonita', 27);

// // Konsep method dan object menggunakan arrow function
// // 2) Arrow function dapat digunakan untuk membuat method dalam object constructor, tapi untuk object literal hal ini tdk bisa dilakukan (disarankan)
// const Mahasiswa3 = function (nama, umur) {
//     this.nama = nama;
//     this.umur = umur;
//     this.sayHello = () => {
//         return `Saya ${nama} dan saya berumur ${umur} tahun.`;
//     }
// }
// const mhs3 = new Mahasiswa3('Ardi', 26);
// console.log(mhs3.sayHello());

// // 3) Mendefinisikan method menggunakan fungsi konvensional (function expression) pada obj. literal (disarankan)
// const Mahasiswa4 = {
//     nama: 'Achmad',
//     umur: 26,
//     sayHello: function () {
//         return `Saya ${this.nama} dan saya berumur ${this.umur} tahun.`;
//     }
// }
// console.log(Mahasiswa4.sayHello());

// // 4) Mendefinifisikan method dengan Arrow function pada obj. (menghasilkan undefined)
// const Mahasiswa5 = {
//     nama: 'Achmad',
//     umur: 26,
//     sayHello: () => {
//         return `Saya ${this.nama} dan saya berumur ${this.umur} tahun.`;
//     }
// }
// // console.log(Mahasiswa4.sayHello());


// // 5) Alternatif untuk mendefifinisikan method dengan Arrow function pada obj. literal dengan cara mengakses obj. secara langsung (tidak disarankan) 
// const Mahasiswa6 = {
//     nama: 'Budi',
//     umur: 22,
//     sayHello: () => {
//         return `Saya ${Mahasiswa5.nama} dan saya berumur ${Mahasiswa5.umur} tahun.`;
//     }
// };




// // latihan
// // 1. method dengan arrow function pada object constructor
// const coba = function (num1, num2) {
//     this.num1 = num1;
//     this.num2 = num2;
//     this.add = () => {
//         return `Hasil dari ${this.num1} dan ${this.num2} adalah ${this.num1 + this.num2}`;
//     }
// };

// const tes = new coba(5, 4);
// // console.log(tes.add())

// // 2. obj. literal dengan dengan function konvensional
// const coba2 = {
//     num1: 5,
//     num2: 4,
//     add: function () {
//         return `Hasil dari ${this.num1} dan ${this.num2} adalah ${this.num1 + this.num2}`;
//     }
// };
// // console.log('coba2:', coba2.add());

// // 3. obj. literal dengan arrow function
// const coba3 = {
//     num1: 5,
//     num2: 12,
//     add: () => {
//         return `Hasil dari ${this.num1} dan ${this.num2} adalah ${this.num1 + this.num2}`;
//     }
// }
// // console.log('coba3:', coba3.add());

// // 4. alternatif untuk mendefinisikan method pada obj. literal
// const coba4 = {
//     num1: 5,
//     num2: 12,
//     add: () => {
//         return `Hasil dari ${coba4.num1} dan ${coba4.num2} adalah ${coba4.num1 + coba4.num2}`;
//     }
// }
// console.log('coba4:', coba4.add());

const Mahasiswa = function () {
    this.umur = 26;

    // akan menghasilkan NaN
    setInterval(function () {
        // console.log(this.umur++);
    }, 500);

    // akan berjalan dengan normal
    setInterval(() => {
        // console.log(this.umur++);
    }, 500);
};
const mhs = new Mahasiswa();


// case studies
const box = document.querySelector('.box');
box.addEventListener('click', function () {
    let satu = 'size';
    let dua = 'caption';

    if (this.classList.contains(satu)) {
        [satu, dua] = [dua, satu];
    }

    this.classList.toggle(satu);
    setTimeout(() => {
        this.classList.toggle(dua);
    }, 600);
});
















